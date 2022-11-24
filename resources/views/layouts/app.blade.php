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
        <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

     <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('public/js/demo/chart-pie-demo.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                
                <div class="text-center">
                        <img class="img-fluid" style="width: 26rem;position:relative; top:50px; left:0px"
                                src="{{ asset ('images/logoblanco.png')}}" alt="...">
                    </div>                            
            </a>
                    <p>
                    <p>
                    <p>

            </a>
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
            <a type="button" class="btn btn-outline-light mx-4" href="{{ route('terapia.create') }}">
                    <span>Crear Terapias</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4 my-3" href="{{ route('terapia.index') }}">
                    <span>Ver Terapias</span>
                </a>
            </li>        

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mx-5 my-3">
                Sesiones
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4" href="{{ route('sesion.create') }}">
                    <span>Crear Sesion</span>
                </a>
            </li>

            <!-- Nav Item - Charts --
            <li class="nav-item active">
            <a type="button" class="btn btn-outline-light mx-4 my-3" href="{{ route('sesion.index') }}">
                    <span>Ver Sesion</span>
                </a>
            </li>     -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div>
                <!-- Topbar -->
                <nav class="navbar">                              
                    <!-- Topbar Navbar -->
                    <ul class = "ml-auto">                  
                        <!-- Nav Item - User Information -->
                            <a>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 large" style="position:relative; top:50px; right:70px">Alejandro</span>
                                <img class="img-profile rounded-circle" style="position:relative; top:50px; right:70px" src="{{ asset('images/undraw_profile.svg') }}">
                            </a>  
                        </div>                          
                    </ul>
                </nav>
                <p>
                <p>
                <p>
                <p>
                @yield('content')
                <!-- End of Topbar -->
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->


</body> 
</html>