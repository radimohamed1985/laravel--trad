@extends('layouts.app')

@section('content');
<div class="container">
    <center>
        <form action="{{url('addsupplier')}}" method="post" dir='rtl'>
            @csrf
        <table class="table">
        <tr>

            <td><input type="text" placeholder='اسم المورد' name="supplier_name" ></td>

        <td><input type="submit" value="اضافة مورد جديد"></td></tr>

        </table>


        </form>

        </center>

</div>
@if(Session::has('message'))
<p class="msg">{{session::get('message')}}</p>
@endif

<center>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>
@endsection
