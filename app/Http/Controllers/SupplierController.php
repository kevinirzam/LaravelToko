<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier_model;

class SupplierController extends Controller
{
    //

    function sups()
    {
      //echo "asoy geboy";
      $supplier = Supplier_model::get([
        'supplier_id',
        'supplier_name',
        'supplier_address'
      ]);
      return view('supplier.supplier',compact('supplier'));
    }

    function create()
    {
      return view('supplier.create');
    }

    public function store(Request $request)
    {
      $txt_id = $request->input('txt_id');
      $txt_name = $request->input('txt_name');
      $txt_address = $request->input('txt_address');
      //echo $txt_id." ".$txt_name." ".$txt_address;

      Supplier_model::create([
        'supplier_id'=>$txt_id,
        'supplier_name'=>$txt_name,
        'supplier_address'=>$txt_address
      ]);

      return redirect('/dataSupplier');
    }
}
