// start some function to use on insert sale transaction page and use on product show page
// first function get total of transaction as qty * price
$(function() {
    $('#pro_qty').on('keyup', function() {
        var cost = $('#sale_price').val();
        var qty = $('#pro_qty').val();
        console.log(cost * qty);
        console.log(cost);
        console.log(qty);
        $('#pro_total').val(cost * qty);

    })

    // function to find the price of product to use on invoice and sale tarnsaction (as sales price )
    $('#product_id').on('change', function() {
        var id = $('#product_id').val();
        $.ajax({
            type: "GET",
            url: "getprice" + id,

            success: function(data) {
                document.getElementById('price').value = data
            }
        })
    });
    // function to find the price of product to use on invoice and sale tarnsaction (as cost price)
    $('#product_id').on('change', function() {
        var id = $('#product_id').val();
        $.ajax({
            type: "GET",
            url: "getcostprice" + id,
            success: function(data) {
                document.getElementById('cost').value = data
            }
        })
    });

    //---------------------------------------------- insert on sales table  --------------------------------

    // get all prices cost and sale price to use on inc=voice and on inserting new purchased daily items
    $("#sale_qty").on('keyup', function() {
        var qty = $('#sale_qty').val();
        var price = $('#price').val();
        $('#sale_total').val(qty * price);
    });
    //  end of get prices
    $("#pro_qty").on('keyup', function() {
        var qty = $('#pro_qty').val();
        var price = $('#price').val();
        $('#total').val(qty * price);
    });
    $("#price").on('keyup', function() {
        var qty = $('#sale_qty').val();
        var price = $('#price').val();
        $('#sale_total').val(qty * price);
    });
    // insert sale transaction into salestable
    $('#submit').on('click', function(e) {
        e.preventDefault();
        var serial = $('#serial').val();
        var date = $('#sale_date').val();
        var client_id = $('#client_id').val();
        var product_id = $('#product_id').val();
        var sale_qty = $('#sale_qty').val();
        var sale_total = $('#sale_total').val();
        var sale_price = $('#price').val();
        var cost = $('#cost').val();
        var totalcost = cost * sale_qty;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'insertsale',
            data: {
                'sale_serial': serial,
                'product_id': product_id,
                'client_id': client_id,
                'sale_cost': cost,
                'price': sale_price,
                'sale_qty': sale_qty,
                'sale_total': sale_total,
                'total_cost': totalcost,
                'sale_date': date,
            },
            success: function(data) {
                alert('done')
            }
        })
    });


    $('#serial').val(function() {
        $.ajax({
            type: 'GET',
            url: 'getserial',
            success: function(data) {
                $('#serial').val(data);
            }
        })
    })
    $('#invoiceConfirm').on('click', function(e) {
        e.preventDefault();
        var serial = $('#serial').val();
        var date = $('#date').val();
        var client_id = $('#client_idd').val();
        var product_id = $('#product_id').val();
        var sale_qty = $('#sale_qty').val();
        var sale_total = $('#total').val();
        var sale_price = $('#price').val();
        var cost = $('#cost').val();
        console.log(serial);
        console.log(date);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: 'invoice',

            data: {
                'in_serial': serial,
                'client_id': client_id,
                'in_total': sale_total,
                'date': date,
            },
            success: function(data) {
                alert('done')
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus);
                alert("Error: " + errorThrown);
            }
        })
    });

});
//---------------------------------------------- updating product table --------------------------------
// updating product table quantanties
$('#submit').on('click', function(e) {
    e.preventDefault();
    var product_id = $('#product_id').val();
    var sale_qty = $('#sale_qty').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'updateproduct',
        data: {

            'product_id': product_id,
            'pro_qty': sale_qty,
        },
    })
});
// --------------------------------------------end of updating product---------------------------

// ######################################### start inserting on invoice table ####################333

$('.additem').fadeOut();
$('#submit2').on('click', function(e) {
    e.preventDefault();

    // $('.head').fadeOut();
    // $('.additem').fadeIn();
    var serial = $('#serial').val();
    $.ajax({
        type: 'GET',
        url: 'gettransaction' + serial,
        success: function(data) {
            document.getElementById('invoiceForm').innerHTML = data
        }
    })
    $.ajax({
        type: 'GET',
        url: 'head' + serial,
        success: function(data) {
            document.getElementById('staticBackdropLabel').innerHTML = data
            console.log(data);
            $('.del_btn').on('click', function(e) {
                e.preventDefault();
            });
        }
    })


});

// ######################################### end inserting on invoice table ####################

// ##########################################3   report pages ##############################33

// show all client invoices

$('#clientinvoice').fadeOut();
$('#client_name').on('change', function() {
    var id = $('#client_name').val();
    console.log(id);
})
$('#clientshow').on('click', function(e) {
    e.preventDefault()
    var id = $('#client_name').val();
    $('#statment').fadeOut();
    $('#statment2').fadeOut();
    $('#clientinvoice').fadeIn();
    $('#allinvoiceform').fadeIn();

    $.ajax({
        url: 'showinvoices' + id,
        type: 'GET',
        success: function(data) {
            document.getElementById('allinvoiceform').innerHTML = data
            console.log(data);
        }
    })

})

//end of client invoices
// start balance sheet
$('#statment').fadeOut();
$('#balancesheet').on('click', function(e) {
        e.preventDefault()
        var id = $('#client_name').val();
        $('#clientinvoice').fadeOut();
        $('#allinvoiceform').fadeOut();
        $('#statment').fadeIn();
        $('#statment2').fadeIn();

        $.ajax({
            url: 'showclientstatment' + id,
            type: 'GET',
            success: function(data) {
                document.getElementById('statment2').innerHTML = data
                console.log(data);
            }
        })

    })
    // start date show
$('#dateshow').on('click', function(e) {
    e.preventDefault()
    var date = $('#sale_date').val();
    console.log(date);
    $('#statment').fadeOut();
    $('#statment2').fadeOut();
    $('#clientinvoice').fadeIn();
    $('#allinvoiceform').fadeIn();
    if (date == null) {
        $.ajax({
            url: 'showdates',
            type: 'GET',
            success: function(data) {
                document.getElementById('allinvoiceform').innerHTML = data
                console.log(data);
            }
        })
    }
    $.ajax({
        url: 'showdates' + date,
        type: 'GET',
        success: function(data) {
            document.getElementById('allinvoiceform').innerHTML = data
            console.log(data);
        }
    })

});
//  end of date show
// ##########################################3   report pages ##############################

// ##########################################3   supplier statment pages ##############################
$('#supplierbalancesheet').on('click',function(e){
    e.preventDefault();
    $('#statment').fadeIn();

$suppliername=$('#supplier_name').val();

$.ajax({
    type:'GET',
    url:'checksupplier'+$suppliername,

    success:function(data){
        document.getElementById('supplierstatment').innerHTML=data
        console.log(data);
    }
})

})

// ##########################################3   supplier statment  pages ##############################
// single function

$('.msg').fadeOut('slow');

/*##################################################3333333
              tergery
 #######################################################*/
$('#backpage').fadeOut();
$('.head3').fadeOut();

$('#insertintregery').on('click', function(e) {
    e.preventDefault();
    $('#backpage').fadeIn();
    var date = $('#tergery-date').val();
    var dept = $('#tergery-dept').val();
    var credit = $('#tergery-credit').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: 'insertintregrery',
        data: {
            'dept': dept,
            'credit': credit,
            'date': date

        },
        success: function() {
            alert("تم تسجيل البيان ");
        }
    })

});
$('#backpage2').fadeOut();


$('#showing').on('click', function(e) {
    e.preventDefault();
    var date = $('#tergery-date').val();

    $('.head2').fadeOut();
    $('.head3').fadeIn();

    $('#backpage2').fadeIn();
    $.ajax({
        type: "GET",
        url: "alltregery" + date,
        success: function(data) {
            document.getElementById('tregeryshow').innerHTML = data;
            console.log("hello");
        }
    })

})
$('#revenueShow').on('click', function(e) {
    e.preventDefault();
    var date = $('#revenue_date').val();
    var date2 = $('#revenue_date2').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: "dayrevenue",
        data: {
            'date': date,
            'date2': date2
        },
        success: function(data) {
            document.getElementById('allrevenue').innerHTML = data;
        }
    });
    $.ajax({
        type: "GET",
        url: "totalday",
        data: {
            'date': date,
            'date2': date2
        },
        success: function(data) {
            document.getElementById('totalrevenue').innerHTML = data;
        }
    })
})


/* ################################################################################################
                                         all about delete from all tables
  ##################################3################################################################ */


function del(id) {
    // restore
    $.ajax({
            type: 'GET',
            url: 'restoreproduct' + id,

        })
        // end restore

    $.ajax({
        type: 'GET',
        url: 'delete' + id,
        success: function() {
            var serial = $('#serialnumber').val();
            $.ajax({
                type: 'GET',
                url: 'gettransaction' + serial,
                success: function(data) {
                    document.getElementById('invoiceForm').innerHTML = data
                }
            })
            $.ajax({
                type: 'GET',
                url: 'head' + serial,
                success: function(data) {
                    document.getElementById('staticBackdropLabel').innerHTML = data
                    console.log(data);
                    $('.del_btn').on('click', function(e) {
                        e.preventDefault();
                    });
                }
            })

            alert('done');
        }
    });
}
