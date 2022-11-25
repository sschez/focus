@extends('layouts.app')
@section('title', 'Focus')
@section('content')
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
                                <button type="submit" class="btn-list btn-search col-md-1" style="color: white; background-color: #1D3B56">
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
                                            <th>ID</th> 
                                            <th>Nombre</th>              
                                            <th>Edad</th>                               
                                            <th>Documento</th>                                            

                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($viewData['users'] as $user)                                 
                                            <tr style="text-transform:uppercase;">
                                                <td>                                                    
                                                    {{ $user->getId() }}
                                                
                                                </td>
                                                <td>                                                    
                                                    <a href="{{ route('user.show', ['id' => $user->getId()]) }}"
                                                    class="table table-bordered">{{ $user->getName() }}</a>
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $user->getEdad() }}
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $user->getDocument() }}
                                                    
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
@endsection