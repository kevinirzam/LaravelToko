<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_model;

class CustomerController extends Controller
{
    //buat fungsi baru untuk index
    function cust()
    {
      //echo "asoy geboy";
      $customer = Customer_model::get([
        'customer_id',
        'nama',
        'address'
      ]);
      return view('customer.customer',compact('customer'));
    }


    //function create
    function create()
    {
      return view('customer.create');
    }


    public function store(Request $request)
    {
      $txt_id = $request->input('txt_id');
      $txt_name = $request->input('txt_name');
      $txt_address = $request->input('txt_address');
      //echo $txt_id." ".$txt_name." ".$txt_address;

      Customer_model::create([
        'customer_id'=>$txt_id,
        'nama'=>$txt_name,
        'address'=>$txt_address
      ]);

      return redirect('/dataCustomer');
    }


    public function show($id)
    {
      //echo $id;
      //Select * from customer where customer_id = $id
      //$customer = Customer_model::where('customer_id',$id);

      $customer = Customer_model::where('customer_id',$id)->get();
      return view('customer.show',compact('customer'));
    }

    public function edit($id)
    {
      //echo $id;
      //Select * from customer where customer_id = $id
      //$customer = Customer_model::where('customer_id',$id);

      $customer = Customer_model::where('customer_id',$id)->get();
      return view('customer.edit',compact('customer'));
    }

    public function update(Request $request,$id)
    {
      $txt_id = $request->input('txt_id');
      $txtName = $request->input('txt_nama');
      $txtAddress = $request->input('txt_address');

      Customer_model::where('customer_id',$id)->update([
        'nama'=>$txtName,
        'address'=>$txtAddress
      ]);
      return redirect('/dataCustomer');
    }

    public function destroy($id)
    {
      $customer = Customer_model::where('customer_id',$id)->first();
      $customer->delete();
      return redirect('/dataCustomer');
    }
}
