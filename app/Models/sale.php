<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table='sales';
    protected $guarded=[];
    public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
    public function client(){
        return $this->hasMany(client::class,'client_id');
    }
}
