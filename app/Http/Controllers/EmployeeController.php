<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee_model;

class EmployeeController extends Controller
{
    //tampilkan data
    function emp()
    {

      $employee = Employee_model::get([
        'employee_id',
        'employee_nama',
        'employee_address',
        'employee_phone_number'
      ]);
      return view('employee.employee',compact('employee'));
    }




    //create data
    function create(){
      return view('employee.create');
    }

    function store(Request $request)
    {
      $employeeId = $request->input('txt_id');
      $employeeName = $request->input('txt_nama');
      $employeeAlamat = $request->input('txt_alamat');
      $employeeNomor = $request->input('txt_telp');

      Employee_model::create([
        'employee_id'=>$employeeId,
        'employee_nama'=>$employeeName,
        'employee_address'=>$employeeAlamat,
        'employee_phone_number'=>$employeeNomor
      ]);

      return redirect('/dataEmployee');
    }




    //show data
    public function show($id)
    {
      $employee = Employee_model::where('employee_id',$id)->get();
      return view('employee.show',compact('employee'));
    }


    //edit data
    public function edit($id)
    {
      $employee = Employee_model::where('employee_id',$id)->get();
      return view('employee.edit',compact('employee'));
    }

    public function update(Request $request,$id)
    {
      $employeeNama = $request->input('txt_nama');
      $employeeAlamat = $request->input('txt_alamat');
      $employeeNomor = $request->input('txt_telp');

      Employee_model::where('employee_id',$id)->update([
        'employee_nama'=>$employeeNama,
        'employee_address'=>$employeeAlamat,
        'employee_phone_number'=>$employeeNomor
      ]);
      return redirect('/dataEmployee');
    }


    //destroy data

    public function destroy($id)
    {
      $employee = Employee_model::where('employee_id',$id)->first();
      $employee->delete();
      return redirect('/dataEmployee');
    }


}
