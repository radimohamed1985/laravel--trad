<?php

namespace App\Http\Controllers;

use App\Models\tergery;
use Illuminate\Http\Request;

class tergeries extends Controller
{
    public function tergerypage(){
        return view('tergery');
    }

    public function insertTergery(Request $req){
$tregery=tergery::get()->last();
if(!$tregery){

    tergery::create([
        'dept'=>$req->dept,
        'credit'=>$req->credit,
        'balance'=>($req->dept)-($req->credit),
        'date'=>$req->date,
    ]);
}else
{

    tergery::create([
        'dept'=>$req->dept,
        'credit'=>$req->credit,
        'balance'=>$tregery->balance+($req->dept)-($req->credit),
        'date'=>$req->date,
    ]);
}

// return redirect()->back()->with('msg','تم تسجيل البيان بنجاح');
// return response('msg','تم تسجيل البيان بنجاح');

    }

    public function showtregery($date){

        $tregery=tergery::where('date',$date)->get();
    
            // echo'<tr><td>'.$tregery->date.'</td><td>'.$tregery->dept.'</td><td>'.$tregery->credit.'</td><td>'.$tregery->balance.'</td></tr>';
     

        foreach($tregery as $transaction ){
            echo'<tr><td>'.$transaction->date.'</td><td>'.$transaction->dept.'</td><td>'.$transaction->credit.'</td><td>'.$transaction->balance.'</td></tr>';
        }
    }
}
