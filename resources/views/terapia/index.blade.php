@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">Terapias:</h1>
                        <form action="{{ route('terapia.search') }}" method="GET">
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
                                            <th>Doctor</th>
                                            <th>Condicion Médica</th>
                                            <th>Ejercicio</th>
                                            <th>Sesion</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($viewData['terapias'] as $terapia)                                 
                                            <tr style="text-transform:uppercase;">
                                                <td>                                                    
                                                    <!---<a href="{{ route('terapia.show', ['id' => $terapia->getId()]) }}"-->
                                                    <a href="{{ route('user.show',['id' => $terapia->getUser()['id']])}}"
                                                    class="table table-bordered btn btn-outline-primary">{{ $terapia->getUser()['name'] }}</a>
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $terapia->getDoctor() }}
                                                    
                                                </td>
                                                <td>                                                    
                                                    {{ $terapia->getCondicionMedica() }}
                                                    
                                                </td>                                                  
                                                <td>                                                    
                                                    {{ $terapia->getEjercicio() }}
                                                    
                                                </td>
                                                <td>                         
                                                    <!---<a href="{{ route('terapia.show', ['id' => $terapia->getId()]) }}"-->                           
                                                    <a href="{{ route('sesion.create') }}"
                                                        class="table table-bordered btn btn-outline-success">Crear Sesion</a>
                                                        <form action="{{ route('terapia.destroy', $terapia->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-outline-danger">Realizado</button>
                                                        </form>                        
                                                    
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