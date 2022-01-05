@extends('layouts.app')
@section('head')
<h1 class="text-center">فاتورة </h1>
@endsection
@section('content')
<div class="container head " >

<table class="table " dir="rtl">
    <form action="{{url('insertsale')}}" method="POST">
        @csrf
        <tr>
            <td><select name="client_id" id="client_id"><option value="">-- اسم العميل--</option> @foreach ($clients as $client )<option value="{{$client->id}}">{{$client->client_name}}</option>    @endforeach</td>
            <td><input type="date" name="sale_date" id="sale_date"></td>
            <td><input type="text" name="sale_serial" value="" placeholder="serialnumber" id="serial"></td>
        </tr>
        <tr>
            <td><select name="product_id" id="product_id"><option value="">--اختر اسم المنتج --</option>@foreach ($productname as $item )<option value="{{$item->id}}">{{$item->product_name}}</option> @endforeach</select> </td>
            <td><input type="text" name="sale_qty" id="sale_qty" placeholder="ادخل الكمية "></td>
            <td><input type="text" name="price" id="price" placeholder="السعر"></td>
            <td><input type="hidden" name="sale_cost" id="cost" placeholder="cost"></td>
            <td><input type="hidden" name="sale_cost" id="totalcost" placeholder="cost"></td>
            <td><input type="text" name="sale_total" id="sale_total" placeholder="الاجمالى"></td>
            <td >
                <input type="submit" value="&#10133 " id="submit" class="btn btn-success">
                </td>
             </tr>

    <tr>

        <td><a href="" id="submit2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">عرض الفاتورة </a></td>
       <td>                <a href="{{url('salepage')}}" class="btn btn-light">  اضافة فاتورة جديدة  </a>
       </td>
       <td>
        @if (Session::has('addmsg'))
        <p class="msg">{{Session::get('addmsg')}}</p>
            
        @endif
       </td>
    </tr>


    </form>
</tr>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" dir="rtl">
        <h5 class="modal-title text-start " id="staticBackdropLabel" dir="rtl" >


        </h5>
        {{--  <button type="button" class="btn-close flex-start" data-bs-dismiss="modal" aria-label="Close"></button>  --}}
      </div>
      <div class="modal-body"  >
        <div class="container">
            <table class="table"  dir="rtl" >
                <tr>
                    <td>اسم الصنف</td> <td>الكمية </td> <td>السعر</td> <td>الاجمالى</td>
                </tr>
            <table class="table" id="invoiceForm" dir="rtl" >

            </table>
        </div>
      </div>
      @if (Session::has('msg'))
      <p class="msg">{{Session::get('msg')}}</p>
          
      @endif
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">العودة للفاتورة</button>
        <button type="button" class="btn btn-primary" id="invoiceConfirm">تأكيد الفاتورة </button>
      </div>
    </div>
  </div>
</div>

<center>
    <a href="{{url('salepage')}}" class="btn btn-success additem">اضافة فاتورة او بند جديد </a>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>

@endsection()
