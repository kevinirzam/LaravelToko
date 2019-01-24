ini halaman show <br/>

@foreach ($customer as $customerList)
  {{$customerList->customer_id}}
  {{$customerList->nama}}
  {{$customerList->address}}
@endforeach

  <a href="{{url('/dataCustomer')}}">
    index
  </a>
