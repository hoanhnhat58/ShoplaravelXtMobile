<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bill";

    public  function bill_detail(){
        return $this->hasMany('App\Detail', 'id_bill',' id');
    }
    public function bill(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }


}
