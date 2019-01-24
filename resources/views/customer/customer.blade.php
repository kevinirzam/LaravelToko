
@extends('layouts.sbadmin');
<!--<br>
@foreach ($customer as $customerList)
  {{$customerList->customer_id}}
  {{$customerList->nama}}
  {{$customerList->address}}
  <a href="/customer/{{$customerList->customer_id}}">show</a>
  <a href="/customer/{{$customerList->customer_id}}/edit">edit</a>
  <form action="/customer/{{$customerList->customer_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button>X</button>
  </form>
  <br>
@endforeach
<br>
<a href="{{url('customer/create')}}">tambah lagi</a>-->



    @section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tables</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Customer Id</th>
                            <th>Nama</th>
                            <th>Address</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($customer as $customerList)
                        <tr class="odd gradeX">
                            <td>{{$customerList->customer_id}}</td>
                            <td>{{$customerList->nama}}</td>
                            <td>{{$customerList->address}}</td>
                            <td class="center"><a href="/customer/{{$customerList->customer_id}}">show</a></td>
                            <td class="center"><a href="/customer/{{$customerList->customer_id}}/edit">edit</a></td>
                            <td class="center">
                              <form action="/customer/{{$customerList->customer_id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button>Delete</button>
                              </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{url('customer/create')}}">tambah lagi</a>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection
