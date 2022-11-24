@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Content Row -->
                    <div class="container">
                        <div id="carouselExampleCaptions" class="carousel slide mx-auto" data-bs-ride="carousel" style="heigth: 800px">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner mx-auto" style="width: 400px; heigth: 200px">
                                <div class="carousel-item active" data-bs-interval="4000">
                                <h1 class="badge text-bg-primary mx-auto"><FONT SIZE=5>MODULO 1</font></h1>
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="/images/video/E1.mp4" type="video/mp4" />
                                </video>
                                    <div class="carousel-caption d-none d-md-block mx-auto" style="width: 200px; heigth: 800px">
                                        <h1 class="badge text-bg-success"><FONT SIZE=5>Martha Restrepo</font></h1><br>
                                        <span class="badge text-bg-info"><FONT SIZE=4>Tiempo Restante</font></span>
                                        <span class="badge text-bg-primary"><FONT SIZE=3>42 min</font></span><br>  
                                        <span class="badge text-bg-info"><FONT SIZE=4>Ejercicio</font></span>                                      
                                        <span class="badge text-bg-primary"><FONT SIZE=3>Abducción de Hombros</font></span>
                                        
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                <h1 class="badge text-bg-primary mx-auto"><FONT SIZE=5>MODULO 2</font></h1>
                                    <video class="img-fluid" autoplay loop muted>
                                        <source src="/images/video/E2.mp4" type="video/mp4" />
                                    </video>
                                    <div class="carousel-caption d-none d-md-block mx-auto" style="width: 200px; heigth: 800px">
                                        <h1 class="badge text-bg-warning"><FONT SIZE=5>Silvia Restrepo</font></h1><br>
                                        <span class="badge text-bg-info"><FONT SIZE=4>Tiempo Restante</font></span>
                                        <span class="badge text-bg-primary"><FONT SIZE=3>28 min</font></span><br>  
                                        <span class="badge text-bg-info"><FONT SIZE=4>Ejercicio</font></span>                                      
                                        <span class="badge text-bg-primary"><FONT SIZE=3>Abducción de Cadera</font></span>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                <h1 class="badge text-bg-primary mx-auto"><FONT SIZE=5>MODULO 3</font></h1>
                                    <img src="/images/A3.png" class="d-block w-100" alt="..." >
                                    <div class="carousel-caption d-none d-md-block mx-auto" style="width: 200px; heigth: 800px">
                                        <h1   class= "badge text-bg-danger"><FONT SIZE=5>Patricio Azlate</font></h1><br>
                                        <span class="badge text-bg-info"><FONT SIZE=4>Tiempo Restante</font></span>
                                        <span class="badge text-bg-primary"><FONT SIZE=3>15 min</font></span><br>  
                                        <span class="badge text-bg-info"><FONT SIZE=4>Ejercicio</font></span>                                      
                                        <span class="badge text-bg-primary"><FONT SIZE=3>Abducción de Cadera</font></span>
                                    </div>
                                </div>
                            </div>
                            <button style="background-color: #1D3B56" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button style="background-color: #1D3B56" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                    <!-- Content Row -->
                    <div>
                        <div>
                            <div>
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="h2 mb-0 bg-gradient-info text-dark mx-5">MI SEMANA</h6>
                                </div>
                                <!-- Card Body -->
                                <div  style= "text-align:center;">
                                <table class="table table-dark table-striped-columns" border="1" style="margin: 0 auto;">
                                <thead>
                                    <tr class="table-success" style="color:black">
                                       
                                        <th scope="col">Hora</th>
                                        <th scope="col">Lunes</th>
                                        <th scope="col">Martes</th>
                                        <th scope="col">Miercoles</th>
                                        <th scope="col">Jueves</th>
                                        <th scope="col">Viernes</th>
                                        <th scope="col">Sabado</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">7:00 am</th>
                                        <td>
                                        </td>
                                        <td>Martha Restrepo</td>
                                        <td></td>
                                        <td>Martha Restrepo</td>
                                        <td>Martha Restrepo</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">8:00 am</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">9:00 am</th>
                                        <td></td>
                                        <td>Silvia Restrepo</td>
                                        <td></td>
                                        <td></td>
                                        <td>Martha Restrepo<br>
                                        Silvana Restrepo<br>
                                        Albeiro Alzate</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">10:00 am</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">11:00 am</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">12:00 m</th>
                                        <td>Albeiro Alzate</td>
                                        <td>Albeiro Alzate</td>
                                        <td>Albeiro Alzate</td>
                                        <td>Albeiro Alzate</td>
                                        <td></td>
                                        <td>Albeiro Alzate</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">2:00 pm</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">3:00 pm</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">4:00 pm</th>
                                        <td></td>
                                        <td></td>
                                        <td>Silvana Restrepo</td>
                                        <td>Silvana Restrepo</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">5:00 pm</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                </table>
                                <p>
                                <p>
                                <p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@endsection
