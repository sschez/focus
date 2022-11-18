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
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </div>                            
            </a>
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
            <div>                
                    <!-- Topbar Navbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">                              
                    <ul class="navbar-nav ml-auto">                  
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                            <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" >
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">Pacientes</h1>
                        <form action="{{ route('user.search') }}" method="GET">
                            <div class="row">
                                <div class="col-md-2 ">
                                    <input type="text" class="form-control" name="search">
                                </div>
                                <button type="submit" class="btn-list btn btn-primary btn-search col-md-1">
                                    <i class="bi-search"></i>
                                    Buscar
                                </button>
                            </div>                    
                        </form>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>                                            
                                            <th>Documento</th>
                                            <th>Nombre de Emergencia</th>
                                            <th>Numero de Emergencia</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($viewData['users'] as $user)                                 
                                            <tr style="text-transform:uppercase;">
                                                <td>                                                    
                                                    <a href="{{ route('user.show', ['id' => $user->getId()]) }}"
                                                    class="table table-bordered">{{ $user->getName() }}</a>
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $user->getDocument() }}
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $user->getNameem() }}
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $user->getNumem() }}
                                                    
                                                </td>
                                            </tr>    
                                        @endforeach                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                    <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:750px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </a>
                </footer>      
        </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/publicjs/admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
