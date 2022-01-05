@extends('layouts.app')

@section('head')
<h1 class="text-center">عرض الحسابات </h1>
@endsection
@section('content')
<div class="container head " >

<table class="table " dir="rtl">
    <form action="" method="POST">
        @csrf
        <tr>
            <td><select name="client_id" id="client_name"><option value="0">-- اسم العميل--</option>
                 @foreach ($clients as $client )<option value="{{$client->id}}">{{$client->client_name}}</option>    @endforeach
                </select><span> </span><a  class="btn btn-light" id="clientshow">عرض فواتير العميل</a><span> </span><a  class="btn btn-danger" id="balancesheet">كشف حساب العميل</a></td>
            <td><input type="date" name="sale_date" id="sale_date"><span> </span><a  class="btn btn-light" id="dateshow">عرض فواتير يوم</a></td>
            <td><input type="text" name="sale_serial" value="" placeholder="serialnumber" id="serial"> <span> </span> <a href="" id="submit2" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">عرض الفاتورة </a></td>
        </tr>


    <tr>

        <td></td>
       <td>                <a href="{{url('statment')}}" class="btn btn-light">  استعلام عن حساب اخر  </a>
       </td>
    </tr>


    </form>
</tr>
</table>
</div>

<!-- Modal invoice -->
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">العودة للفاتورة</button>
        <button type="button" class="btn btn-primary" id="invoiceConfirm">تأكيد الفاتورة </button>
      </div>
    </div>
  </div>
</div>
<!--end Modal invoice -->

        <div class="container">
            <table class="table"  dir="rtl" id="clientinvoice">
                <thead>
                    <tr>
                    <td>اسم العميل</td> <td>رقم الفاتورة </td> <td scope="col">الاجمالى </td> <td>التاريخ</td>
                </tr> </thead>  
            <tbody class="table" id="allinvoiceform" dir="rtl"></tbody>  </table>
       
                <table class="table"  dir="rtl" id="statment">
            <thead>
                    <tr>
                        <td>اسم العميل</td> <td>dept </td> <td>credit </td> <td>balance</td><td>date</td>
                    </tr> </thead>
                    <tbody class="table" id="statment2" dir="rtl" ></tbody>
                </table>
             


        </div>



<center>
    <a href="{{url('salepage')}}" class="btn btn-success additem">اضافة فاتورة او بند جديد </a>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>

@endsection()
