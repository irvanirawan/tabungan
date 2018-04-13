@extends('layouts.master')

@section('title')
@parent
 | Beranda
@stop

@section('judul')
    <section class="content-header">
      <h1>
        Beranda 
        @role('admin')
&nbsp admin
        @endrole
        @role('sister')
&nbsp sister
        @endrole
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      </ol>
    </section>
@endsection

@section('content')

@endsection

@section('script')

@endsection