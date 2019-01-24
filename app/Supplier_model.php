<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier_model extends Model
{
    //Deklarasi tabel
    protected $table = 'supplier';

    public $timestamps = false;
    //attribute
    protected $fillable = [
      'supplier_id',
      'supplier_name',
      'supplier_address'
    ];
}
