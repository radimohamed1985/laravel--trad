<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\client;
use App\Models\Supplier;
use App\Models\Supplieracc;
use App\Models\tergery;
use Illuminate\Http\Request;

class statment extends Controller
{
    // first statment page
    public function statmentPage(){
        $clients= client::get();
        return view('statment',compact('clients'));
    }

    // show client statment
    public function clientStatment($client_id){

        $clientaccount=account::with('clients')->where('client_id',$client_id)->get();
        foreach($clientaccount as $transaction){


            echo'<tr scope="row"><td>'.$transaction->clients->client_name.' </td><td>'.$transaction->dept.' </td> <td>'.$transaction->credit.'</td><td>'.$transaction->balance.'</td><td>'.$transaction->date.'</td></tr>' ;

          }


    }

    // go to payment page
    public function payments(){

        $clientname=client::get();
        return view('payment',compact('clientname'));
      }

      // insert payment to account table
      public function insertpayment(Request $req){
          $client=account::where('client_id',$req->client_id)->get()->last();
account::create(
    [
        'client_id'=>$req->client_id,
        'invoice_serial'=>'0',
        'dept'=>'0',
        'credit'=>$req->payment,
        'balance'=>($client->balance)-($req->payment),
        'date'=> date('y-m-d')
    ]
    );
    $tregerystatus=tergery::get()->last();
    tergery::create([
        'dept'=>$req->payment,
        'credit'=>'0',
        'balance'=>($tregerystatus->balance)+$req->payment,
        'date'=>date('y-m-d')
    ]);
    return redirect()->back()->with('msg','تم تسجيل الدفعه بنجاح');

}
//  supplier statment
public function supplier(){
    $suppliername= Supplier::get();

    return view('supplierstatment',compact('suppliername'));
}
public function supplieracc($id){
    $supplieracc= Supplieracc::with('supplier')->where('supplier_id',$id)->get();
    foreach($supplieracc as $supplier){
        echo'<tr scope="row"><td>'.$supplier->supplier->supplier_name.' </td><td>'.$supplier->dept.' </td> <td>'.$supplier->credit.'</td><td>'.$supplier->balance.'</td><td>'.$supplier->date.'</td></tr>' ;
    }

}


}
