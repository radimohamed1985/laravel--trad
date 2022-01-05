@extends('layouts.app')

@section('content')

<form action="{{url('insertsupplieraccount')}}" method="post">
    @csrf
<table class="table" dir="rtl">
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
    <td>الدفعة </td>
    <td>
        <input type="payment" name="payment">
    </td>
    <td colspan="2"><input type="submit" value="سداد"> </td>
 

</table>
   
</form>

<center>
    @if(Session::has('msg'))
    <p class='msg'>{{Session::get('msg')}}</p>
    @endif
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>


</center>


@endsection