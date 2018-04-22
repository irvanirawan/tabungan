@extends('layouts.master')

@section('title')
@parent
 | Beranda
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Data Nasabah 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Nasabah</a></li>
      </ol>
    </section>
@endsection

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Nasabah</h3>
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
                  <th>ID Nasabah</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Telepon</th>
                  <th>Saldo</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
@foreach($data as $key => $n)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$n->id_nasabah}}</td>
                  <td>{{$n->nama}}</td>
                  <td>{{$n->kelas}}</td>
                  <td>{{$n->telp}}</td>
                  <td>Rp. {{$n->saldo}}</td>
                  <td><a href="" title="Edit"><i class="fa fa-pencil"></i></a> | <a href="" title="Hapus"><i class="fa fa-trash"></i></a></td>
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
        <h4 class="modal-title">Form Tambah Nasabah</h4>
      </div>
      <div class="modal-body">
 <form class="form-horizontal" action="/action_page.php">

  <div class="form-group">
    <label class="control-label col-sm-4" for="ID Nasabah">ID Nasabah:</label>
    <div class="col-sm-8">
      <input type="ID Nasabah" class="form-control" id="ID Nasabah" placeholder="ID Nasabah">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Nama">Nama:</label>
    <div class="col-sm-8">
      <input type="Nama" class="form-control" id="Nama" placeholder="Nama">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Kelas">Kelas:</label>
    <div class="col-sm-8">
      <input type="Kelas" class="form-control" id="Kelas" placeholder="Kelas">
    </div>
  </div>

  

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Orang Tua:</label>
    <div class="col-sm-8">
      <input type="Orang Tua" class="form-control" id="Orang Tua" placeholder="Orang Tua">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Tempat Lahir">Tempat Lahir:</label>
    <div class="col-sm-8">
      <input type="Tempat Lahir" class="form-control" id="Tempat Lahir" placeholder="Tempat Lahir">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Tgl Lahir">Tgl Lahir:</label>
    <div class="col-sm-8">
      <input type="Tgl Lahir" class="form-control" id="Tgl Lahir" placeholder="Tgl Lahir">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Telepon:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" placeholder="Telepon">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Saldo">Saldo:</label>
    <div class="col-sm-8">
      <input type="Saldo" class="form-control" id="Saldo" placeholder="Saldo">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Username">Username:</label>
    <div class="col-sm-8">
      <input type="Username" class="form-control" id="Username" placeholder="Username">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Password">Password:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Password" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Status">Status:</label>
    <div class="col-sm-8">
                    <select class="form-control select2" style="width: 226px;">
                      <option>All</option>
                      <option>Aktif</option>
                      <option>Tidak Aktif</option>
                    </select>
                  </div>
                </div>

   <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
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