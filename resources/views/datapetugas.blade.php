@extends('layouts.master')

@section('title')
@parent
 | Data Petugas
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Data Petugas
        <!-- <small>Data Petugas</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Petugas</a></li>
      </ol>
    </section>
@endsection

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Petugas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

@foreach($data as $key => $p)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$p->id_petugas}}</td>
                  <td>{{$p->nama}}</td>
                  <td>{{$p->alamat}}</td>
                  <td>{{$p->telp}}</td>
                  <td><a href="{{route('datapetugas')}}/edit/{{$p->id}}" title="Edit"><i class="fa fa-pencil"></i></a> | <a href="{{route('datapetugas')}}/delete/{{$p->id}}" onclick="return confirm('Klik OK Untuk Hapus');" title="Hapus"><i class="fa fa-trash"></i></a></td>
                </tr>
@endforeach
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Opsi</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Tambah Petugas</h4>
      </div>
      <div class="modal-body">
 <form class="form-horizontal" method="POST" action="{{route('tambahdatapetugas')}}">
{{csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="ID Petugas">ID Petugas:</label>
    <div class="col-sm-10">
      <input type="ID Petugas" name="idpetugas" class="form-control" id="ID Petugas" placeholder="ID Petugas">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Nama">Nama:</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Alamat">Alamat:</label>
    <div class="col-sm-10">
      <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Alamat">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Telepon">Telepon:</label>
    <div class="col-sm-10">
      <input type="text" name="telp" class="form-control" id="Telepon" placeholder="Telepon">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="Username">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="Username" placeholder="Username">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="Password">Password:</label>
    <div class="col-sm-10">
      <input type="text" name='pass' class="form-control" id="Password" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Status">Status:</label>
    <div class="col-sm-10">
                    <select class="form-control select2">
                      <option>All</option>
                      <option>Aktif</option>
                      <option>Tidak Aktif</option>
                    </select>
                  </div>
                </div>


   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
@if(Session::has('deletepetugas'))
window.onload = function(){alert("Data Telah Dihapus");
};
@endif

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection