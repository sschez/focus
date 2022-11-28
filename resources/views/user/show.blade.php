@extends('layouts.app')
@section('title', 'Focus')
@section('content')
<!-- Begin Page Content -->
<div class="container">   
    <div class ="row">             

                    <div class ="row">
                        <div class="col-xl-4 col-lg-7">    
                            <div class="card shadow mb-2">                    
                                <img class="card-img-top" src="{{ asset ('images/usuario.png') }}" alt="Card image cap">
                                    <div class="card-body" style="text-transform:uppercase; ">
                                        <h5 class="card-title"><b>{{ $viewData["user"]["name"] }}</b></h5>
                                    </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                    <b>Edad:</b> {{ $viewData["user"]["edad"] }}</li>
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                    <b>Tipo de Documento:</b> {{ $viewData["user"]["typedoc"] }}</li>
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                    <b>Documento:</b> {{ $viewData["user"]["document"] }}</li>
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                    <b>Recomendaciones:</b> {{ $viewData["user"]["recomend"] }}</li>
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                    <b>Antecedentes:</b> {{ $viewData["user"]["antec"] }}</li>
                                    
                                    
                                </ul>
                                <div class="card-body">                                    
                                    <form action="{{ route('user.destroy', $viewData['user']->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <center>
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button></center>
                                    </form>                        
                                </div>
                            </div>
                        </div>   
                        <div class="col-xl-8 col-lg-7">    
                            <div class="card shadow mb-2">                    
                                <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Sesion VS Promedio de rep VS Ángulo máximo x Sesión</h6>
                                </div>
                                <div class="card-body w-100 mw-100">
                                    <canvas id="mixChart"></canvas>
                                </div>
                            </div>
                            <div class="card shadow mb-2">                    
                                <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Progreso de Extensión Máxima</h6>
                                </div>
                                <div class="card-body w-100 mw-100">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>       
                        <div class="card shadow mb-2">                    
                                <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Diagrama de Movimiento</h6>
                                </div>
                                <div class="card-body w-100 mw-100">
                                    <canvas id="myChart2"></canvas>
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

@section('scripts')
<script defer>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($viewData['plotLabels']) !!},
            datasets: [{
            label: 'Progreso',
            data: {!! json_encode($viewData['plotValues']) !!},
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });        
</script>
<script defer>

    const data = {
      labels: {!! json_encode($viewData['plotLabels']) !!},
      datasets: [{
        type:'bar',
        label: 'Promedio de Repeticiones x Sesión',
        data: {!! json_encode($viewData['plotPromrep']) !!},
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
        ],
        borderWidth: 1
      },{
        type: 'line',
        label: 'Ángulo Máximo por Sesión',
        data: {!! json_encode($viewData['plotValues']) !!},
        fill: false,
        borderColor: 'rgb(54, 162, 235)'
      }]
    };

    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };
    
    
    const myChart = new Chart(
      document.getElementById('mixChart'),
      config
    );

</script>
<script defer>
        const ctx = document.getElementById('myChart2');

        new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($viewData['plotLabels']) !!},
            datasets: [{
            label: 'Progreso',
            data: {!! json_encode($viewData['plotValues']) !!},
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });        
</script>
@endsection