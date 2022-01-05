@extends('layouts.app')

@section('content')

<div class="container head2">

    <form  method="POST">
        @csrf
        <center>
        <table  dir="rtl">
            <tr>
                <td>التاريخ</td>
                <td><input type="date" name="date" id="tergery-date"  ></td>
            </tr>
            <tr>
                <td>تمويلات</td>
                <td><input type="text" name="dept" id="tergery-dept" value="0" ></td>
            </tr>
            <tr>
                <td>مصروفات</td>
                <td><input type="text" name="credit" id="tergery-credit" value="0" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="form-control" value="تسجيل بيان" id="insertintregery"></td>
            </tr>
            <tr>
                <td colspan="2">   <form action="" method="get">
                    <input type="submit" value=" عرض حركة خزنة " id="showing" class="form-control btn btn-danger" >
                        </form></td>
            </tr>
        </table>
    </form>

</center>

    <center>
        @if(Session::has('msg'))
        <p class="msg">{{Session::get('msg')}}</p>
        @endif
        <a href="{{url('tergery')}}" class="btn btn-success " id="backpage">  استعلام خزنة جديد     </a>

    </center>
</div>

@endsection
@section('content2')

<div class="container head3">
    <h1 class="text-center">عرض تقرير الخزنة</h1>
    <table class="table" dir="rtl">
        <thead>
            <tr>
                <td>date</td>
                <td>dept</td>
                <td>credit</td>
                <td>balance</td>
            </tr>
        </thead>
        <tbody id="tregeryshow"></tbody>
    </table>
</div>
<center>
    <a href="{{url('tergery')}}" class="btn btn-success " id="backpage2">  استعلام خزنة جديد     </a>
    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</center>
@endsection
