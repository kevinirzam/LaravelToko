<br>
<?php foreach ($supplier as $supplierList): ?>
  {{$supplierList->supplier_id}}
   {{$supplierList->supplier_name}}
    {{$supplierList->supplier_address}}
  <br>

<?php endforeach; ?>
<br>
<a href="{{url('supplier/create')}}">ayam goreng</a>
