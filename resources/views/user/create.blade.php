@extends('layouts.app')
@section('title', 'Focus')
@section('content') 
<!-- Begin Page Content -->
<div class="container">    
<!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-4 my-3 d-none d-lg-block bg-register-image"></div>
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
                                        <input type="text" class="form-control form-control-user" placeholder="Edad" name="edad" value="{{ old('edad') }}" />
                                    </div>
                                    <div class="col-sm-6">
                                    <textarea class="form-control form-control-user" name="antec" value="{{ old('antec') }}" > Antecedentes </textarea>                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-4">
                                     <textarea class="form-control form-control-user" name="recomend" value="{{ old('recomend') }}" > Recomendaciones </textarea>
                                    </div>   
                                </div>
                                <input type="submit" class="btn-user btn-block" style="color: white; background-color: #1D3B56" value="Crear Paciente" />
                            </form>       
                            </form>                 
                </div>
            </div>
         </div>
    <!-- End of Page Wrapper -->
    <footer class="sticky-footer bg-white">
                <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:550px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </a>
    </footer>
@endsection