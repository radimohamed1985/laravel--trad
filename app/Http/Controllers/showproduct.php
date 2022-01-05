<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\product;
use App\Models\sale;
use App\Models\Supplier;
use App\Models\Supplieracc;
use App\Models\tergery;
use Illuminate\Http\Request;

class showproduct extends Controller
{
    public function allproduct(){
        $product=product::get();
        return view('products',compact('product'));
    }
    public function insertpage(){

        return view('insertproduct');
    }
    public function insertdatabase(Request $req){
        // $check=product::where('product_name',$req->product_name);

            product::create($req->all());
            return redirect()->back();




    }
    public function addDailyProduct(){

        $suppliername= Supplier::get();
        $product=product::get();
        return view('purchasing',compact('suppliername','product'));
    }

    public function addnewpurchasing(Request $req){
        $product=product::find($req->product_name);
        $newitemtotal=($req->cost_price)*($req->pro_qty);
        $oldtotal=($product->cost_price)*($product->pro_qty);
        $newqty=($product->pro_qty)+($req->pro_qty);
        $product->update([
            'cost_price'=>($newitemtotal+$oldtotal)/$newqty,
            'sale_price'=>$req->sale_price,
            'pro_qty'=>($product->pro_qty)+$req->pro_qty,
            'total'=>$req->total
        ]);
if($req->status =='0'){
    $costtotal=($req->cost_price)*($req->pro_qty);
    $checksupplier=Supplieracc::where('supplier_id',$req->supplier_id)->get()->last();
  if($checksupplier){
    Supplieracc::create([
        'supplier_id'=>$req->supplier_id,
        'dept'=>'0',
        'credit'=>$costtotal,
        'balance'=>($checksupplier->balance)+$costtotal,
        'date'=>$req->date,
    ]);
  }else{
    $costtotal=($req->cost_price)*($req->pro_qty);
    Supplieracc::create([
        'supplier_id'=>$req->supplier_id,
        'dept'=>'0',
        'credit'=>$costtotal,
        'balance'=>$costtotal,
        'date'=>$req->date,
    ]);
  }
 

}else{
    $checksupplier=Supplieracc::where('supplier_id',$req->supplier_id)->get()->last();
    $costtotal=($req->cost_price)*($req->pro_qty);

    if($checksupplier){
    Supplieracc::create([
        'supplier_id'=>$req->supplier_id,
        'dept'=>$costtotal,
        'credit'=>$costtotal,
        'balance'=>($checksupplier->balance),
        'date'=>$req->date,
    ]);}else{
        Supplieracc::create([
            'supplier_id'=>$req->supplier_id,
            'dept'=>$costtotal,
            'credit'=>$costtotal,
            'balance'=>'0',
            'date'=>$req->date,
        ]);
    }
    $tregerystatus=tergery::get()->last();
tergery::create([
    'dept'=>'0',
    'credit'=>$costtotal,
    'balance'=>($tregerystatus->balance)-$costtotal,
    'date'=>$req->date
]);

}

        return redirect()->back()->with('success','inserted to store');

    }

    //  supplier account

    public function supplierpays(){

        $suppliername= Supplier::get();
       
        return view('supplierpayment',compact('suppliername'));
    }
public function insertsupplieracc(Request $req){
  
        $checksupplier=Supplieracc::where('supplier_id',$req->supplier_id)->get()->last();
      
        Supplieracc::create([
            'supplier_id'=>$req->supplier_id,
            'dept'=>$req->payment,
            'credit'=>'0',
            'balance'=>($checksupplier->balance)-$req->payment,
            'date'=>$req->date,
        ]);
  
        $tregerystatus=tergery::get()->last();
    tergery::create([
        'dept'=>'0',
        'credit'=>$req->payment,
        'balance'=>($tregerystatus->balance)-$req->payment,
        'date'=>$req->date
    ]);
    return redirect()->back()->with('success','inserted to store');

    }


}
