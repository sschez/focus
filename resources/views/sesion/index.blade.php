@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->                 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">Sesiones</h1>                          
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th> 
                                            <th>Sesion</th>                                            
                                            <th>Repeticiones Realizadas</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($viewData['sesion'] as $sesion)                                 
                                            <tr style="text-transform:uppercase;">
                                                <td>                                                    
                                                    {{ $sesion->getId() }}
                                                    
                                                </td>
                                                <td>                                                    
                                                    <a href="{{ route('sesion.show', ['id' => $sesion->getId()]) }}"
                                                    class="table table-bordered">{{ $sesion->getNumSesion() }}</a>
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $sesion->getRepRealizadas() }}
                                                    
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