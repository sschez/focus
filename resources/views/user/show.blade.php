@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
                <div class="container">                
                    <!-- Nested Row within Card Body
                    <div class ="row">
                        <div class="col-xl-8 col-lg-7">    
                            <div class="card shadow mb-4">                    
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
                                    <a href="#" class="btn-list btn btn-outline-primary">Ver sesiones</a>
                                    <p>
                                    <form action="{{ route('user.destroy', $viewData['user']->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                    </form>                        
                                </div>
                            </div>
                        </div>        
 -->
                        <div class="col-xl-4 col-lg-7">    
                            <div class="card shadow mb-4">                    
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
                                    <a href="#" class="btn-list btn btn-outline-primary">Ver sesiones</a>
                                    <p>
                                    <form action="{{ route('user.destroy', $viewData['user']->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                    </form>                        
                                </div>
                            </div>
                        </div>   

                    </div>                   
                <footer class="sticky-footer bg-white">
                  <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:550px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </a>
                </footer>
              </div>
@endsection