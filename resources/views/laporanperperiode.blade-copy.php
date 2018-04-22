@extends('layouts.master')

@section('title')
@parent
 | Beranda
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Transaksi 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Transaksi</a></li>
      </ol>
    </section>
@endsection

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Transaksi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Setor Tunai</button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModaldua"><i class="fa fa-minus"></i> Tarik Tunai</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Transaksi</th>
                  <th>Transaksi</th>
                  <th>Tanggal</th>
                  <th>Nasabah</th>
                  <th>Debet</th>
                  <th>Kredit</th>
                  <th>Petugas</th>
                  <th>Keterangan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>1001</td>
                  <td>Setor</td>
                  <td>01 jan 2018</td>
                  <td>Agung</td>
                  <td>20.000</td>
                  <td>0</td>
                  <td>Setor </td>
                  <td>Petugas </td>
                  <td><a href="" title="Edit"><i class="fa fa-pencil"></i></a> | <a href="" title="Hapus"><i class="fa fa-trash"></i></a> | <a href="" title="Print"><i class="fa fa-print"></i></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>1001</td>
                  <td>Debit</td>
                  <td>01 jan 2018</td>
                  <td>Agung</td>
                  <td>0</td>
                  <td>20.000</td>
                  <td>Tarik </td>
                  <td>Petugas </td>
                  <td><a href=""><i class="fa fa-pencil"></i></a> | <a href=""><i class="fa fa-trash"></i></a> | <a href=""><i class="fa fa-print"></i></a></td>
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
    <label class="control-label col-sm-4" for="Nama">ID Nasabah:</label>
    <div class="col-sm-8">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">001</option>
                  <option>002</option>
                  <option disabled="disabled">003</option>
                  <option>004</option>
                  <option>005</option>
                  <option>006</option>
                  <option>007</option>
                </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Alamat">Nama Nasabah:</label>
    <div class="col-sm-8">
      <input type="Alamat" class="form-control" id="Alamat" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Kelas:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Telp:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Saldo:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Jumlah Setor:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Keterangan:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
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
<!-- Modal -->
<div id="myModaldua" class="modal fade" role="dialog">
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
    <label class="control-label col-sm-4" for="Nama">ID Nasabah:</label>
    <div class="col-sm-8">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">001</option>
                  <option>002</option>
                  <option disabled="disabled">003</option>
                  <option>004</option>
                  <option>005</option>
                  <option>006</option>
                  <option>007</option>
                </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Alamat">Nama Nasabah:</label>
    <div class="col-sm-8">
      <input type="Alamat" class="form-control" id="Alamat" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Kelas:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Telp:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Saldo:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Jumlah Tarik:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Telepon">Keterangan:</label>
    <div class="col-sm-8">
      <input type="Telepon" class="form-control" id="Telepon" >
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
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('AdminLTE-2.4.2/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('.select2').select2()
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