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
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="20000" >
                                
                                    <img src="/images/green.png" class="d-block w-100" alt="..." >
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>1 slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="20000">
                                    <img src="/images/naranja.png" class="d-block w-100" alt="..." >
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>2 slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item"  data-bs-interval="20000">
                                    <img src="/images/rojo.png" class="d-block w-100" alt="..." >
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>3 slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                            </div>
                        
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a> 
                        </div>
                    </div>
                </div>
                    <!-- Content Row -->

                    <div>

                        <!-- Area Chart -->
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
