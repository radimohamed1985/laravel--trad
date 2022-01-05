@extends('layouts.app')

@section('content');
<div class="container">
    <center>
        <form action="{{url('addclient')}}" method="post" dir='rtl'>
            @csrf
        <table class="table">
        <tr>
        
            <td><input type="text" placeholder='اسم العميل' name="client_name" ></td>
        
        <td><input type="submit" value="اضافة عميل جديد"></td></tr>
        
        </table>
            
        
        </form>
        
        </center>

</div>

<center>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>
@endsection