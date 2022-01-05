@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="background-color:lightblue" dir="ltr">  {{ __('Dashboard') }} : {{ Auth::user()->name }}</div>

                <div class="card-body" style="background-color: #EEE">
                <table class="table " dir="rtl" style="border: 1px solid #EEE">
                    <tbody>
                        <tr>
                            <td>    <a href="{{url('products')}}" class="btn btn-info">عرض كل المنتجات </a></td>
                            <td>
                    <a href="{{url('statment')}}" class="btn btn-info">   عرض تقارير حسابات العملاء </a>
                            </td>
                            <td>
                                <a href="{{url('revenue')}}" class="btn btn-info">   عرض تقارير ارباح </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                    <a href="{{url('payment')}}" class="btn btn-info">دفعات عملاء <i class="fas fa-hand-holding-usd"></i> </a>

                            </td>
                            <td>
                    <a href="{{url('pays')}}" class="btn btn-info">دفعات موردين <i class="far fa-money-bill-alt"></i> </a>

                            </td>
                            <td>
                    <a href="{{url('tergery')}}" class="btn btn-info">  الخزنة  <i class="fas fa-wallet "></i> </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                    <a href="{{url('insertpage')}}" class="btn btn-info">اضافة منتجات جديدة <i class="fas fa-plus-square"></i> </a>

                            </td>
                            <td>
                <a href="{{url('salepage')}}" class="btn btn-info">  اضافة فاتورة جديدة  <i class="fas fa-file-invoice-dollar"></i>  </a>

                            </td>

                            <td>
                <a href="{{url('purchase')}}" class="btn btn-info">اضافة مشتريات اليوم <i class="fas fa-luggage-cart"></i>
                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{url('addclientpage')}}" class="btn btn-info">اضافة عميل جديد <i class="fas fa-user-alt"></i> </a>

                                            </td>
                                            <td>
                                                <a href="{{url('supplierstatment')}}" class="btn btn-info"> كشف حساب موردين    <i class="fas fa-cash-register"></i>  </a>

                                                            </td>
                                                            <td>
                                                                <a href="{{url('supplierpage')}}" class="btn btn-info">اضافة مورد جديد <i class="fas fa-user-alt"></i> </a>

                                                                            </td>
                        </tr>
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
