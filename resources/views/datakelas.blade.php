@extends('layouts.master')

@section('title')
@parent
 | Beranda
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Data Kelas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Kelas</a></li>
      </ol>
    </section>
@endsection

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
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
                  <th>ID Kelas</th>
                  <th>Nama</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
@foreach($data as $key => $k)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$k->id_kelas}}</td>
                  <td>{{$k->nama}}</td>
                  <td><a href="{{route('kelas')}}/edit/{{$k->id}}" title="Edit"><i class="fa fa-pencil"></i></a> | <a href="{{route('kelas')}}/delete/{{$k->id}}" onclick="return confirm('Klik OK Untuk Hapus?');" title="Hapus"><i class="fa fa-trash"></i></a></td>
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
        <h4 class="modal-title">Form Tambah Kelas</h4>
      </div>
      <div class="modal-body">
 <form class="form-horizontal" method="POST" action="{{route('tambahkelas')}}">
{{csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="ID Petugas">ID Kelas:</label>
    <div class="col-sm-10">
      <input type="text" name="id_kelas" class="form-control" id="ID Petugas" placeholder="ID Kelas">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Nama">Nama:</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama">
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
@if(Session::has('deletekelas'))
window.onload = function(){alert("Data Telah Dihapus");
};
@endif
@if(Session::has('tambahkelas'))
window.onload = function(){alert("Data Telah Ditambah");
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