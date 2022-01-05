{{--
=============================================================================================
                here we are going to insert daily purchased products to store and take the
                average of the new price and the old price 
==============================================================================================

--}}

@extends('layouts.app')

@section('content')
<div class="container">



    <form action="{{url('addpurchasing')}}" method="POST">
        @csrf
        <table class="table" style="direction: rtl";>
        <tr>
            <td>اسم المنتج</td>
            {{--  <input type="text" name="id">  --}}
            <td>  <select name="product_name" id="product_id"><option value=""> </option>@foreach ($product as $item)
                <option value="{{$item->id}}">{{$item->product_name}}</option>
            @endforeach</select></td>
            </tr>
           <tr>
           <td>سعر البيع</td>
           <td> <input type="text" name="sale_price" id="price"></td>
           </tr>
           <tr>
           <td>سعر التكلفة</td>
                                   <td>
                                   <input type="text" name="cost_price"   id="cost" >

                                   </td>
           </tr>
           <tr>
            <td>الكمية</td>
            <td>  <input type="text" name="pro_qty" id="pro_qty"></td>
            </tr>
           <tr>
            <td>الاجمالى </td>
            <td>        <input type="text" name="total" id="total" ></td>
           </tr>


           <tr>
          <td>ااسم المورد</td>
          <td>
          <select name="supplier_id" id=""><option value=""> </option>@foreach ($suppliername as $supplier)
              <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
          @endforeach</select>
          </td>
          </tr>
          <tr>
          <td>date</td>
          <td><input type="date" name="date" id=""></td>
          </tr>
           <tr>
           <td>
           <input type="radio" name="status" id="" value="0">
           </td><td>اجل</td>
          <td>
          <input type="radio" name="status" id="" value="1">
           </td><td>كاش</td>

          </tr>

           <tr>
           <td colspan="2">
           <input type="submit" value="اضافة منتج جديد" class="form-control">
           </td>
           </tr>


    </form>
    </table>
    </div>
    <div class="container">

    
    <center>
        @if(Session::has('success'))
        <p class="alert alert-success">{{Session::get('success') }}</p>
    @endif
        <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

    </center>
</div>
@endsection
