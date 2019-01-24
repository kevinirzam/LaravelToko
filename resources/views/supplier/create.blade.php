<form method="POST" class="" action="{{route('supplier.store')}}">
  {{csrf_field()}}
  <input type="text" name="txt_id" id="txt_id"/><p></p>
  <input type="text" name="txt_name" id="txt_name"/><p></p>
  <input type="text" name="txt_address" id="txt_address"/><p></p>
  <input type="submit"
          id="sbm_save"
          name="sbm_save"
          value="save"/>
</form>
