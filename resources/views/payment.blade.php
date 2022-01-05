@extends('layouts.app')

@section('content')

<form action="{{url('insertClientpayment')}}" method="post">
    @csrf
<table class="table" dir="rtl">
<td></td>
<td><select name="client_id" id=""><option value="">--اسم العميل --</option>@foreach($clientname as $name)
    <option value="{{$name->id}}">{{$name->client_name}}</option>
    @endforeach</select></td>
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