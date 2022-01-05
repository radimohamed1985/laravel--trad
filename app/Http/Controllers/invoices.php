<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;

class invoices extends Controller
{
  public function getinvoice($id){
     $invoices = invoice::with('client')->where('client_id',$id)->get();
foreach($invoices as $invoice)
        echo'<tr scope="row"><td><input type="hidden" name="sale_qty" value="'.$invoice->client_id.'">'.$invoice->client->client_name.' </td><td>'.$invoice->in_serial.' </td> <td>'.$invoice->in_total.'</td> <td>'.$invoice->date.'</td></tr>' ;

}

public function showDate($date){
    $invoices = invoice::with('client')->where('date',$date)->get();

foreach($invoices as $invoice)
       echo'<tr scope="row"><td><input type="hidden" name="sale_qty" value="'.$invoice->client_id.'">'.$invoice->client->client_name.' </td><td>'.$invoice->in_serial.' </td> <td>'.$invoice->in_total.'</td> <td>'.$invoice->date.'</td></tr>' ;
}

public function showAllDate(){
    $invoices = invoice::with('client')->get();
    foreach($invoices as $invoice)
           echo'<tr scope="row"><td><input type="hidden" name="sale_qty" value="'.$invoice->client_id.'">'.$invoice->client->client_name.' </td><td>'.$invoice->in_serial.' </td> <td>'.$invoice->in_total.'</td> <td>'.$invoice->date.'</td></tr>' ;

    }
}

