@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
        <div class="container">    
                <!-- Nested Row within Card Body -->
            <div class="row">
                    <div class="col-lg-4 mx-3 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Sesión</h1>
                            </div>
                            @if($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            @endif

                            <form method="POST" action="{{ route('sesion.save') }}">
                            @csrf
                            <form class="user">
                            <div class="col-sm-4 mb-3 mb-sm-4" >
                                            <select name ="dolor">
                                                            <option selected = "" disabled="">Numero de Sesion actual </option>
                                                            <option value= "1" > 1 </option>
                                                            <option value= "2" > 2 </option>
                                                            <option value= "3" > 3 </option>
                                                            <option value= "4" > 4 </option>
                                                            <option value= "5" > 5 </option>
                                                            <option value= "6" > 6 </option>
                                                            <option value= "7" > 7 </option>
                                                            <option value= "8" > 8 </option>
                                                            <option value= "9" > 9 </option>
                                                            <option value= "10" > 10 </option>
                                            </select> 
                                    </div>
                                <div class="form-group row">
                                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" name ="fechaCita" inline="true">
                                        <input placeholder="Select date" id = "example" type="text" class="form-control">
                                        <label for="example">Fecha</label>
                                        <i class="fas fa-calendar input-prefix"></i>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-4" >
                                            <select name ="dolor">
                                                            <option selected = "" disabled=""> Dolor (1-10) </option>
                                                            <option value= "1" > 1 </option>
                                                            <option value= "2" > 2 </option>
                                                            <option value= "3" > 3 </option>
                                                            <option value= "4" > 4 </option>
                                                            <option value= "5" > 5 </option>
                                                            <option value= "6" > 6 </option>
                                                            <option value= "7" > 7 </option>
                                                            <option value= "8" > 8 </option>
                                                            <option value= "9" > 9 </option>
                                                            <option value= "10" > 10 </option>
                                            </select> 
                                    </div>
                                </div>               
                                <h6>Has tenido Caidas </h6>                 
                                <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="caidas" id="si">
                                    <label class="form-check-label" for="si">
                                        Si
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="caidas" id="no" checked>
                                    <label class="form-check-label" for="no">
                                        No
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Crear Terapia" />
                            </form>       
                            </form>                 
                        </div>
                 </div>
    <!-- End of Page Wrapper -->
                <footer class="sticky-footer bg-white">
                <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:350px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </a>
                </footer>
</div>
@endsection