@extends('layouts.inicio')

@section('clasebody')
layout-top-nav
@endsection

@section('content')
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8"> --}}
        <img src="https://www.regionhuanuco.gob.pe/img/logosgrh/Logo-Oficial-2-300x98.png" alt="AdminLTE Logo" height="50">
        {{-- <span class="brand-text font-weight-light">Convocatorias</span> --}}
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        
        

        @if (Route::has('login'))
                {{-- <div class="top-right links"> --}}
                    @auth
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                        <li class="nav-item"><a class="btn btn-primary btn-sm"  href="{{ url('home') }}"><i class="fas fa-user-cog"></i> Mi cuenta</a></li>
                    @else
                        {{-- <a href="{{ route('login') }}">Login</a> --}}
                        <li class="nav-item"><a class="btn btn-primary btn-sm"  href="{{ route('login') }}"><i class="fas fa-user"></i> Ingresar</a></li>

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                            {{-- <li class="nav-item" style="padding-left:10px"><a class="btn btn-warning"  href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registrar</a></li> --}}
                        @endif
                    @endauth
                {{-- </div> --}}
            @endif
        
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper fondo3" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark py-2"> Cursos y capacitaciones | <small>Gobierno Regional Huánuco</small></h1>
            {{-- <p>Instructivo para postulación en linea</p> --}}
          </div>
          
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              
              <img src="../../dist/img/photo1.png" alt="Photo 1" class="img-fluid">
  
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              
              <img src="../../dist/img/photo2.png" alt="Photo 1" class="img-fluid">
  
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              
              <img src="../../dist/img/photo3.jpg" alt="Photo 1" class="img-fluid">
  
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              
              <img src="../../dist/img/photo3.jpg" alt="Photo 1" class="img-fluid">
  
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
  
 
        </div>
        

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="container">
      <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
       <b>Version</b> 1.0.0
    </div>

    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">GOBIERNO REGIONAL HUANUCO</a>.</strong> Todo los derechos reservados
    </div>
  </footer>
</div>
@endsection

@section('script')

<script>
  $(function () {
    $("#listConvocatorias").DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
        processing:     "Traitement en cours...",
        search:         "Buscar&nbsp;:",
        lengthMenu:    "Cantidad por página _MENU_ ",
        info:           "Mostrando del _START_ al _END_ del(_TOTAL_) documentos",
        infoEmpty:      "No hay elementos para mostrar",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "No hay documentos con los parametros seleccionados",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Ultimo"
          }
        } 
    });

  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    //location.reload();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});
</script>
@endsection
