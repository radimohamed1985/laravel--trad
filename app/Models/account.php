<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
   protected $table='accounts';
   protected $guarded=[];

   public function clients(){
    return $this->belongsTo(client::class,'client_id');
}
}
