@extends('layouts.app')
@section('title', 'Focus')
@section('content')
                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">PANTALLA PRINCIPAL</h1>
                    </div>
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
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="/images/video/E1.mp4" type="video/mp4" />
                                </video>
                                    <div class="carousel-caption d-none d-md-block mx-auto" style="width: 200px; heigth: 800px">
                                        <h1 class="badge text-bg-success"><FONT SIZE=5>Martha Restrepo</font></h1><br>
                                        <span class="badge text-bg-info"><FONT SIZE=4>Tiempo Restante</font></span>
                                        <span class="badge text-bg-primary"><FONT SIZE=3>42 min</font></span><br>  
                                        <span class="badge text-bg-info"><FONT SIZE=4>Ejercicio</font></span>                                      
                                        <span class="badge text-bg-primary"><FONT SIZE=3>Abducción de Cadera</font></span>
                                        
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
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
                                    <h6 class="h3 mb-0 text-grey-800">MI SEMANA</h6>
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
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">8:00 am</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">9:00 am</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">10:00 am</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">11:00 am</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">12:00 m</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">2:00 pm</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">3:00 pm</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">4:00 pm</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th class="table-success" style="color:black" scope="row">5:00 pm</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@fat</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
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
