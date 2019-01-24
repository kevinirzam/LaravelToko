
form redirect <br>


@foreach($employee as $employeeList)
  <form action="{{Route('employee.update',$employeeList->employee_id)}}" method="post">

  {{csrf_field() }}
  {{method_field('PUT')}}
      nama <input type="text" name="txt_nama" value="{{$employeeList->employee_nama}}"/>
      <br/>
      alamat <input type="text" name="txt_alamat" value="{{$employeeList->employee_address}}"/>
      <br>
      telpon <input type="text" name="txt_telp" value="{{$employeeList->employee_phone_number}}"/>
      <br>
@endforeach
  <button type="submit" name="button">Submit</button> <br>
</form>
