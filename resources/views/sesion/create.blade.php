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
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <select name ="terapia_id">
                                                            <option selected = "" disabled=""> Usuario </option>
                                                            @foreach ($viewData['users'] as $user)
                                                            <option value= "{{$user->getId()}}" > {{$user->getName()}} </option>
                                                            @endforeach
                                        </select> 
                                        </div>                                    
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-1">
                                            <select name ="numSesion">
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
    
                                        <div class="col-sm-4 mb-3 mb-sm-0 my-2" >
                                                <select name ="series">
                                                                        <option selected = "" disabled=""> Series </option>
                                                                        <option value= "5" > 5 </option>
                                                                        <option value= "10" > 10 </option>
                                                                        <option value= "12" > 12 </option>
                                                                        <option value= "15" > 15 </option>

                                                </select> 
                                        </div>
                                    </div>                                
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <select name ="caida">
                                                <option selected = "" disabled=""> ¿Ha tenido caidas? </option>
                                                <option value= "1" > Si </option>
                                                <option value= "0" > No </option>
                                            </select> 
                                        </div>  
                                        <div class="col-sm-4 mb-3 mb-sm-0 my-2" >
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
                                <input type="submit" class="btn-user btn-block" style="color: white; background-color: #1D3B56" value="Crear Sesión" />
                                </form>       
                            </form>                              
                        </div>
                 </div>
    <!-- End of Page Wrapper -->
                <footer class="sticky-footer bg-white">
                <a class="text-center" href="{{ route('home.index') }}" style="width: 26rem;position:relative; top:0px; left:550px" >
                        <img class="img-fluid " style="width: 15rem;"
                                src="{{ asset ('images/logo.png')}}" alt="...">
                    </a>
                </footer>
</div>
@endsection