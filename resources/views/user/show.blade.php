<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Focus</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
        <!-- Sidebar -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                
                <div class="text-center">
                        <img class="img-fluid" style="width: 26rem;position:relative; top:50px; left:0px"
                                src="{{ asset ('images/logofocus.png')}}" alt="...">
                    </div>                            
            </a>
                    <p>
                    <p>
                    <p>
                    <p>
                    <p>
                    <p>
                    <p>
            <!-- Divider -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <!-- Heading -->
            <div class="sidebar-heading mx-5 my-1">
                Pacientes
            </div>
            <p>
            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item active">
                <a type="button" class="btn btn-outline-light mx-4" href="{{ route('user.create') }}">
                    <span>Crear Pacientes</span>
                </a>
                <p>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4" href="{{ route('user.index') }}">
                    <span>Ver Pacientes</span>
                </a>
            </li>
            <p>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mx-5 my-3">
                Terapias
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4" href="{{ route('user.index') }}">
                    <span>Crear Terapias</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4 my-3" href="{{ route('user.index') }}">
                    <span>Ver Terapias</span>
                </a>
            </li>        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">      
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alejandro</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('images/undraw_profile.svg') }}">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <center>
                <div class="container">     
           
                    <!-- Nested Row within Card Body -->
                    <div class="card" style="width: 20rem">
                    
                      <img class="card-img-top" src="{{ asset ('images/usuario.png') }}" alt="Card image cap">
                      <div class="card-body" style="text-transform:uppercase; ">
                        <h5 class="card-title"><b>{{ $viewData["user"]["name"] }}</b></h5>
                      </div>
                      <ul class="list-group list-group-flush">

                        <li class="list-group-item" style="text-transform:uppercase;">
                        <b>Tipo de documento:</b> {{ $viewData["user"]["typedoc"] }}</li>
                        <li class="list-group-item" style="text-transform:uppercase;">
                          <b>Documento:</b> {{ $viewData["user"]["document"] }}</li>
                        <li class="list-group-item" style="text-transform:uppercase;">
                          <b>Contacto de Emergencia:</b> {{ $viewData["user"]["nameem"] }}</li>
                        <li class="list-group-item" style="text-transform:uppercase;">
                          <b>Numero de Emergencia:</b> {{ $viewData["user"]["numem"] }}</li>

                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link">Ver sesiones</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>                           
                  </div>
                  </center> 
                </div>           
                <footer class="sticky-footer bg-white">
                  <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:850px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logofocus.png')}}" alt="...">
                    </a>
                </footer>
              </div>
            </div>   
          </div>
        </div>     

    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
