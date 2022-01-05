<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table='invoices';
    protected $guarded=[];

    public function client(){
        return $this->belongsTo(client::class,'client_id');
    }
}
