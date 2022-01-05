{{--
=============================================================================================
here we are going to insert new products to store for the first time as main working products
==============================================================================================

  --}}


@extends('layouts.app')
@section('content')
<div class="container">



<form action="{{url('insertdatabase')}}" method="POST">
    @csrf
    <table class="table" style="direction: rtl";>
    <tr>
        <td>اسم المنتج</td>
        {{--  <input type="text" name="id">  --}}
        <td> <input type="text" name="product_name" ></td>
        </tr>
       <tr>
       <td>السعر</td>
       <td> <input type="text" name="sale_price" id="sale_price"></td>
       </tr>
       <tr>
       <td>سعر التكلفة</td>
                               <td>
                               <input type="text" name="cost_price"   id="price2" >

                               </td>
       </tr>
       <tr>
        <td>الكمية</td>
        <td>  <input type="text" name="pro_qty" id="pro_qty"></td>
        </tr>
       <tr>
        <td>الاجمالى </td>
        <td>        <input type="text" name="total" id="pro_total" ></td>
       </tr>
      <tr>
      <td>date</td>
      <td><input type="date" name="date" id=""></td>
      </tr>
       <tr>
       <td colspan="2">
       <input type="submit" value="اضافة منتج جديد" class="form-control">
       </td>
       </tr>


</form>
</table>
</div>
<center>
    @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>
@endsection

