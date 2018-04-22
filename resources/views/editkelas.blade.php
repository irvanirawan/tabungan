@extends('layouts.master')

@section('title')
@parent
 | Beranda
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Data Kelas <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('kelas')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="">Edit</a></li>
      </ol>
    </section>
@endsection

@section('content')
<!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              Form Edit Data Kelas
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
<form class="form-horizontal" method="POST" action="{{route('simpankelas')}}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="ID Petugas">ID Kelas:</label>
    <div class="col-sm-6 col-offset-4">
      <input type="ID Petugas" name="id_kelas" class="form-control" id="ID Petugas" placeholder="ID Petugas" value="{{$data->id_kelas}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Nama">Nama:</label>
    <div class="col-sm-6 col-offset-4">
      <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama" value="{{$data->nama}}">
    </div>
  </div>

   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div> -->
          </div>
          <!-- /.box -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('script')
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.4.2/dist/js/demo.js')}}"></script>
<!-- CK Editor -->
<script src="{{asset('AdminLTE-2.4.2/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
@if(Session::has('simpankelas'))
window.onload = function(){alert("Data Telah Diedit");
};
@endif
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endsection