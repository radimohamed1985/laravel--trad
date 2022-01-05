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
            <td><select name="supplier_id" id="supplier_name"><option value="0">-- اسم المورد--</option>
            </option>@foreach ($suppliername as $supplier)
            <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>   @endforeach
                </select><span> </span><a  class="btn btn-danger" id="supplierbalancesheet">كشف حساب العميل</a></td>
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


<!--end Modal invoice -->

        <div class="container">


                <table class="table"  dir="rtl" id="statment">
            <thead>
                    <tr>
                        <td>اسم المورد</td> <td>dept(دفعات) </td> <td>credit(فواتير) </td> <td>balance</td><td>date</td>
                    </tr> </thead>
                    <tbody class="table" id="supplierstatment" dir="rtl" ></tbody>
                </table>



        </div>



<center>
    <a href="{{url('salepage')}}" class="btn btn-success additem">اضافة فاتورة او بند جديد </a>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>

@endsection()
