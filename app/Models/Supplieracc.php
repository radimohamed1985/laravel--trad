<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplieracc extends Model
{
   protected $table ='supplier_account';
   protected $guarded=[];
   public function supplier(){
       return $this->belongsTo(Supplier::class,'supplier_id');
   }
}
