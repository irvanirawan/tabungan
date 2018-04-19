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
                <tr>
                  <td>1</td>
                  <td>1001</td>
                  <td>Agung</td>
                  <td>Paud 2018</td>
                  <td>08912345</td>
                  <td>Rp. 1.200.000</td>
                  <td><a href="" title="Edit"><i class="fa fa-pencil"></i></a> | <a href="" title="Hapus"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>1002</td>
                  <td>Indah</td>
                  <td>Paud 2018</td>
                  <td>08912345</td>
                  <td>Rp. 900.000</td>
                  <td><a href=""><i class="fa fa-pencil"></i></a> | <a href=""><i class="fa fa-trash"></i></a></td>
                </tr>
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
    <label class="control-label col-sm-4" for="ID Petugas">ID Nasabah:</label>
    <div class="col-sm-8">
      <input type="ID Petugas" class="form-control" id="ID Petugas" placeholder="ID Petugas">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Nama">Nama:</label>
    <div class="col-sm-8">
      <input type="Nama" class="form-control" id="Nama" placeholder="Nama">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Alamat">Kelas:</label>
    <div class="col-sm-8">
      <input type="Alamat" class="form-control" id="Alamat" placeholder="Alamat">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Telepon:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" placeholder="Telepon">
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