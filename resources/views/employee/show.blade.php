ini halaman show <br/>

@foreach ($employee as $employeeList)
  {{$employeeList->employee_id}}
  {{$employeeList->employee_nama}}
  {{$employeeList->employee_address}}
  {{$employeeList->employee_phone_number}}
@endforeach

  <a href="{{url('/dataEmployee')}}">
    index
  </a>
