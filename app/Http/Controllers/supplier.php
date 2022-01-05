<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
use Illuminate\Http\Request;

class supplier extends Controller
{
 public function newsupplier(Request $req){
     ModelsSupplier::create($req->all());
     return redirect()->back()->with('message','inserted into database');
 }
 public function supplieraddpage(){
     return view('addsupplier');
 }
}
