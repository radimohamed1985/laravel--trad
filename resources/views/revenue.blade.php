@extends('layouts.app')


@section('content')
<div class="container head " >

<table class="table " dir="rtl">
    <form action="{{url('dayrevenue')}}" method="GET">
        @csrf
        <tr>

            <td><input type="date" name="sale_date" id="revenue_date"><span> to</span><input type="date" name="sale_date2" id="revenue_date2"><input type="submit"  class="btn btn-light" id="revenueShow" value="عرض ارباح يوم"></td>
        </tr>


    <tr>

        <td></td>
       <td>                <a href="{{url('revenue')}}" class="btn btn-light">  استعلام عن ارباح يوم اخر  </a>
       </td>
    </tr>


    </form>
</tr>
</table>
</div>

<div class="container">
    <table class="table"  dir="rtl" id="revenue">
        <thead>
            <tr>
            <td>رقم الفاتورة </td><td>التاريخ</td> <td>اسم الصنف</td> <td>الكمية </td><td scope="col">الاجمالى </td>
        </tr> </thead>
    <tbody class="table" id="allrevenue" dir="rtl"></tbody>  </table>
    <table>
        <tbody class="table" id="totalrevenue" dir="rtl"></tbody>  </table>

    </table>



    <a href="{{url('home')}}" class="btn btn-success ">  العودة للصفحة الرئيسية    </a>

</div>
@endsection
