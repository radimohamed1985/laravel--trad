@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table" dir="rtl">
        <tr>
            <td>اسم المنتج </td>
            <td>الكمية </td>
            <td>سعر البيع </td>
            <td>الاجمالى  </td>

        </tr>
        @foreach ($product as $item)
        <tr>
            <td>{{$item->product_name}}</td>
            <td>{{$item->pro_qty}}</td>
            <td>{{$item->sale_price}}</td>
            <td>{{$item->total}}</td>
        </tr>
        @endforeach

        </table>

</div>
<center>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>

@endsection

