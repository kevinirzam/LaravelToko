<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_model extends Model
{
    protected $table = 'employee';
    public $timestamps = false;

    protected $primaryKey = 'employee_id';

    protected $fillable = [
      'employee_id',
      'employee_nama',
      'employee_address',
      'employee_phone_number'
    ];
}
