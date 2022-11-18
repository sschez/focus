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
                    
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">

      
           
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-4 mx-3 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Paciente</h1>
                            </div>
                            @if($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            @endif

                            <form method="POST" action="{{ route('user.save') }}">
                            @csrf
                            <form class="user">
                              <div class="form-group row">
                                 <div class="col-sm-12 mb-3 mb-sm-0">
                                      <input type="text" class="form-control form-control-user" placeholder="Nombre Completo" name="name" value="{{ old('name') }}" />
                                     </div>                                    
                                 </div>
                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-1">
                                     <input type="text" class="form-control form-control-user" placeholder="Numero Identificacion" name="document" value="{{ old('document') }}" />
                                    </div>
                                <div class="col-sm-4 mb-3 mb-sm-0 my-2" >
                                            <select name ="typedoc">
                                                            <option selected = "" disabled=""> Tipo de Documento </option>
                                                            <option value= "cc" > Cédula de Ciudadania </option>
                                                            <option value= "ce" > Cédula de Extranjero </option>
                                                            <option value= "ti" > Tarejta de Identidad </option>
                                            </select> 
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" placeholder="Nombre Emergencia" name="nameem" value="{{ old('nameem') }}" />
                                    </div>
                                    <div class="col-sm-6">
                                         <input type="text" class="form-control form-control-user" placeholder="Contacto Emergencia" name="numem" value="{{ old('numem') }}" />                                        
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Crear Paciente" />
                            </form>       
                            </form>                 
                </div>
            </div>
         </div>
    <!-- End of Page Wrapper -->
    <footer class="sticky-footer bg-white">
                <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:350px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logofocus.png')}}" alt="...">
                    </a>
                </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>