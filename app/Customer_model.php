<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_model extends Model
{
    //deklasrasi table
    protected $table = 'customer';

    //laravel default id
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    //attribute
    protected $fillable = [
      'customer_id',
      'nama',
      'address'
    ];
}
