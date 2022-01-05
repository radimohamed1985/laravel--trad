<?php

use App\Http\Controllers\client;
use App\Http\Controllers\invoices;
use App\Http\Controllers\salesprocess;
use App\Http\Controllers\showproduct;
use App\Http\Controllers\statment;
use App\Http\Controllers\supplier;
use App\Http\Controllers\tergeries;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products',[showproduct::class,'allproduct']);
Route::get('insertpage',[showproduct::class,'insertpage']);
Route::post('insertdatabase',[showproduct::class,'insertdatabase']);
Route::get('salepage',[salesprocess::class,'salepage']);
Route::post('insertsale',[salesprocess::class,'insertsale']);
Route::post('invoice',[salesprocess::class,'insertinvoice']);
Route::post('updateproduct',[salesprocess::class,'updatingProduct']);
Route::get('restoreproduct{id}',[salesprocess::class,'restoreProduct']);
Route::get('getserial',[salesprocess::class,'getserial']);
Route::get('delete{id}',[salesprocess::class,'deleting']);
Route::get('getprice{id}',[salesprocess::class,'getprice']);
Route::get('getcostprice{id}',[salesprocess::class,'getcostprice']);
Route::get('gettransaction{serial}',[salesprocess::class,'gettransaction']);
Route::get('gettransactionhead{serial}',[salesprocess::class,'gettransactionhead']);
Route::get('head{serial}',[salesprocess::class,'gettransactionhead']);
Route::get('addclientpage',[client::class,'addclientpage']);
Route::post('addclient',[client::class,'addclient']);
Route::get('purchase',[showproduct::class,'addDailyProduct']);
Route::post('addpurchasing',[showproduct::class,'addnewpurchasing']);
Route::get('statment',[statment::class,'statmentPage']);
Route::get('showinvoices{id}',[invoices::class,'getinvoice']);
Route::get('showdates{date}',[invoices::class,'showDate']);
Route::get('showdates',[invoices::class,'showAllDate']);
Route::get('showclientstatment{id}',[statment::class,'clientStatment']);
Route::get('payment',[statment::class,'payments']);
Route::post('insertClientpayment',[statment::class,'insertpayment']);
Route::get('tergery',[tergeries::class,'tergerypage']);
Route::post('insertintregrery',[tergeries::class,'insertTergery']);
Route::get('alltregery{date}',[tergeries::class,'showtregery']);

Route::post('insertsupplieraccount',[showproduct::class,'insertsupplieracc']);
Route::get('pays',[showproduct::class,'supplierpays']);
Route::get('revenue',[salesprocess::class,'revenuecal']);
Route::get('dayrevenue',[salesprocess::class,'dayrevenuecal']);
Route::get('totalday',[salesprocess::class,'totaldayrevenuecal']);
Route::get('supplierstatment',[statment::class , 'supplier']);
Route::get('checksupplier{id}',[statment::class , 'supplieracc']);
Route::get('supplierpage',[supplier::class , 'supplieraddpage']);
Route::post('addsupplier',[supplier::class , 'newsupplier']);


Route::get('downloading',[client::class,'download']);
Route::get('testing',function(){
    return view('test');
});
