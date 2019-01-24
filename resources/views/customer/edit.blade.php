
form redirect <br>


@foreach($customer as $customerList)
  <form action="{{Route('customer.update',$customerList->customer_id)}}" method="post">

  {{csrf_field() }}
  {{method_field('PUT')}}
      <input type="text" name="txt_nama" value="{{$customerList->nama}}"/>
      <br/>
      <input type="text" name="txt_address" value="{{$customerList->address}}"/>

      <br>
@endforeach
  <button type="submit" name="button">Submit</button> <br>
</form>
