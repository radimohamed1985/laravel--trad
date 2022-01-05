<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;

use App\Models\client;
use App\Models\invoice;
use App\Models\product;
use App\Models\sale;

class salesprocess extends Controller
{
    public function salepage(){
        $productname =  product::get();
        $clients=client::get();

          return view('sale',compact('productname','clients'));
       }
       public function insertsale(Request $req){
           sale::create($req->all());

           return redirect()->back();


       }
       public function  updatingProduct(Request $req){
        $products=product::find($req->product_id);

        $products->update([
            'pro_qty'=>($products->pro_qty)-($req->pro_qty)
        ]);
       }

       public function getprice($id){
         $product=  product::find($id);
       echo  $product->sale_price;


       }
       public function getcostprice($id){
        $product=  product::find($id);
      echo  $product->cost_price;


      }
      public function gettransaction($serial){
          $transactions=sale::with('product')->where('sale_serial',$serial)->get();

          foreach($transactions as $transaction){

            echo '<tr>';
            echo'<td>'.$transaction->product->product_name.' </td><td><input type="hidden" name="sale_qty" value="'.$transaction->sale_qty.'">'.$transaction->sale_qty.' </td> <td>'.$transaction->price.'</td> <td>'.$transaction->sale_total.'</td><td><a href="" class="del_btn" onclick="del('.$transaction->id.')" >del</a></td>' ;
            echo '<tr>';
          }
          echo '<tr><td>الاجمالى</td><td></td><td>'.$transactions->sum('sale_total').'</td></tr>';

      }

      public function gettransactionhead($serial){
        $transactionhead=sale::with('product')->where('sale_serial',$serial)->get()->first();
        $transactiontotal=sale::with('product')->where('sale_serial',$serial)->get();

        $clientname=client::find($transactionhead->client_id);

        echo '<table class=" text-center" dir="rtl">';
        echo '<form method="POST">';
        echo '<th>فاتورة رقم<input type="text" id="serialnumber" value="'.$transactionhead->sale_serial.'"></th>';
        echo '<tr>';
          echo'<td>التاريخ<input type="text" id="date" value=" '.$transactionhead->sale_date.'"><input type="hidden" id="total" value=" '.$transactiontotal->sum('sale_total').'"></td>' ;
          echo '<tr>';
          echo '<td>اسم العميل :'.$clientname->client_name.'<input type="hidden" id="client_idd" value=" '.$transactionhead->client_id.'"></td> </tr>';
        echo '</table>';

        }
      public function getserial(){
          $serial=sale::get()->last();
          return  $serial->sale_serial+1;
      }
      public function insertinvoice(Request $req){

          $checkserial=invoice::where('in_serial',$req->in_serial)->first();
         if($checkserial == null){
            invoice::Create([
                'in_serial'=>$req->in_serial,
                'client_id'=>$req->client_id,
                'in_total'=>$req->in_total,
                'date'=>$req->date
            ]);
            $clientaccount=account::where('client_id',$req->client_id)->get()->last();
            if($clientaccount==null){ account::create([
                'client_id'=>$req->client_id,
            'invoice_serial'=>$req->in_serial,
                'dept'=>$req->in_total,
                'credit'=>'0',
                'balance'=>$req->in_total,
                'date'=>$req->date
            ]);}
            else{   account::create([
                'client_id'=>$req->client_id,
            'invoice_serial'=>$req->in_serial,
                'dept'=>$req->in_total,
                'credit'=>'0',
                'balance'=>$req->in_total+($clientaccount->balance),
                'date'=>$req->date
            ]);

            }



            }

         elseif($req->in_total== 0){
            $clientaccount=account::where('invoice_serial',$req->in_serial)->first();
            $clientaccount->delete();
             $checkserial->delete();

         }
         else{

            $checkserial->update([
                'in_total'=> $req->in_total
                    ]);
                    $clientaccount=account::where('client_id',$req->client_id)->get()->last();
                    $checkserial=invoice::where('in_serial',$req->in_serial)->first();
                    if($clientaccount==null){ account::create([
                        'client_id'=>$req->client_id,
                    'invoice_serial'=>$req->in_serial,
                        'dept'=>$checkserial->in_total,
                        'credit'=>'0',
                        'balance'=>$checkserial->in_total,
                        'date'=>$req->date
                    ]);}
                    else{
                    $clientaccount->update([
                        'invoice_serial'=>$req->in_serial,
                        'dept'=>$checkserial->in_total,
                        'balance'=>$clientaccount->balance+$checkserial->in_total,
                    ]);
 }}

 }
      public function deleting($id){
          $item=sale::find($id);
        $item->delete();
      }

public function restoreProduct($id){
    $item=sale::find($id);
    $newqty=$item->sale_qty;
    $old_qty=product::find($item->product_id);
    $old_qty->update([
        'pro_qty'=>($old_qty->pro_qty)+$newqty
    ]);
}

//                                  revenue

public function revenuecal(){
    $clients= client::get();
    return view('revenue',compact('clients'));
}

public function dayrevenuecal(Request $req){
 $transaction = sale::with('product')->whereBetween('sale_date',array($req->date,$req->date2))->get();
 foreach($transaction as $trans){

 $totalItemRevenue=($trans->sale_total)-($trans->sale_cost * $trans->sale_qty);
 echo '    <tr>
 <td>'.$trans->sale_serial.' </td><td>'.$trans->sale_date.'</td> <td>'.$trans->product->product_name.' </td> <td>'.$trans->sale_qty.' </td><td scope="col">'.$totalItemRevenue.' </td>
</tr>';
}}
public function totaldayrevenuecal(Request $req){
    $transaction = sale::with('product')->whereBetween('sale_date',array($req->date,$req->date2))->get();

$me =collect($transaction)->sum('sale_total');
$mee =collect($transaction)->sum('total_cost' );







// $total =collect($totalItemRevenue)->sum();
    echo '    <tr>
    <td>total</td><td scope="col"> </td><td scope="col">'.$me-$mee.' </td>
   </tr>';
 }


    }
