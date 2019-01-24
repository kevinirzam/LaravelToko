<br>
@foreach ($employee as $employeeList)
  {{$employeeList->employee_id}}
  {{$employeeList->employee_nama}}
  {{$employeeList->employee_address}}
  {{$employeeList->employee_phone_number}}
  <a href="/employee/{{$employeeList->employee_id}}">show</a>
  <a href="/employee/{{$employeeList->employee_id}}/edit">edit</a>
  <form action="/employee/{{$employeeList->employee_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button>X</button>
  </form>
  <br>
@endforeach
<br>
<a href="{{url('employee/create')}}">tambah lagi</a>
