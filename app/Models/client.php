<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table='clients';
    protected $guarded=[];

public function accounts(){
    return $this->belongsTo('account','client_id');
}
}
