@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Relacion de personal activos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">oficinas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container-fluid">
    {{-- <div class="row justify-content-center"> --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-gray">
                <div class="card-header p-2">
                  <h3 class="card-title">Relacion de personal de la oficina</h3>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead>
                        <tr><th>N</th><th>Nombre y apellidos</th><th>Cargo</th></tr>
                        </thead>                    
                        {{-- @foreach($datos as $ofina)
                        <tr><td>{{ $ofina->id }}</td><td>{{ $ofina->name }} {{ $ofina->lastname }}</td><td>{{ $ofina->cargo }}</td></tr>                            
                        @endforeach --}}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
{{-- modal sistemas--}}

@endsection
