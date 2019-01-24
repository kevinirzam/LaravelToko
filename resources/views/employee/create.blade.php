<form method="POST" class="" action="{{route('employee.store')}}">
  {{csrf_field()}}
  <input type="text" name="txt_id" id="txt_id"/><p></p>
  <input type="text" name="txt_nama" id="txt_nama"/><p></p>
  <input type="text" name="txt_alamat" id="txt_alamat"/><p></p>
  <input type="text" name="txt_telp" id="txt_telp"/><p></p>
  <input type="submit"
          id="sbm_save"
          name="sbm_save"
          value="save"/>
</form>
