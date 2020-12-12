@extends('layouts/master',["title"=>"Rekapitulasi"])
@section('content')




<div role="main" class="main" id="home">
    <section class="page-header page-header-modern page-header-background page-header-background-lg overlay overlay-color-gradient overlay-show overlay-op-7" style="background-image: url(img/jumbotron.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1> <strong>REKAPITULASI SUARA BERDASARKAN PRODI</strong></h1>
                </div>
            
            </div>
        </div>
    </section>


<section id="smft" class="container"  style="width: 40%">
    <div class="title">
        <h2 class="text-center font-weight-bold">#SMFT</h2>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="container mb-3" id="ts" >
                <div class="title">
                    <h2 class="text-center font-weight-bold">TEKNIK SIPIL</h2>
                </div>
                <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                    <div class="p-4" >
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
        </section>
        
          </div>
          <div class="carousel-item">
            <section class="container mb-3" id="ta">
                <div class="title">
                    <h2 class="text-center font-weight-bold">TEKNIK Arsitek</h2>
                </div>
                <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                    <div class="p-4">
                        <canvas id="myChart2" width="400" height="400"></canvas>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="container mb-3" id="te">
                <div class="title">
                    <h2 class="text-center font-weight-bold">TEKNIK Elektro</h2>
                </div>
                <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                    <div class="p-4">
                        <canvas id="myChart3" width="400" height="400"></canvas>
                    </div>
                </div>
            </section>
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
    </section>


<br>
<br>
    <section id="bpmft" class="container mt-3"  style="width: 40%">
        <div class="title">
            <h2 class="text-center font-weight-bold">#BPMFT</h2>
        </div>
        <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <section class="container mb-3" id="ts" >
                    <div class="title">
                        <h2 class="text-center font-weight-bold">TEKNIK SIPIL</h2>
                    </div>
                    <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                        <div class="p-4">
                            <canvas id="myChart4" width="400" height="400"></canvas>
                        </div>
                    </div>
            </section>
            
              </div>
              <div class="carousel-item">
                <section class="container mb-3" id="ta">
                    <div class="title">
                        <h2 class="text-center font-weight-bold">TEKNIK Arsitek</h2>
                    </div>
                    <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                        <div class="p-4">
                            <canvas id="myChart2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </section>
              </div>
              <div class="carousel-item">
                <section class="container mb-3" id="te">
                    <div class="title">
                        <h2 class="text-center font-weight-bold">TEKNIK Elektro</h2>
                    </div>
                    <div class="item card" style="box-shadow: 2px 3px 20px 0px #82767667; ">
                        <div class="p-4">
                            <canvas id="myChart3" width="400" height="400"></canvas>
                        </div>
                    </div>
                </section>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>

   
    
		

	
</div>
@endsection

@section('footer')
<script>


    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var ctx3 = document.getElementById('myChart3').getContext('2d');
    var ctx4 = document.getElementById('myChart4').getContext('2d');

        $('.carousel').carousel({
  interval: 5000
})


var myChart = new Chart(ctx, {
    type: 'bar',
    responsive : true,
    data: {
        labels: ['PASLON 1', 'PASLON 2', 'PASLON 3'],
        datasets: [{
            label: '# TOTAL SUARA TEKNIK SIPIL',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['PASLON 1', 'PASLON 2', 'PASLON 3'],
        datasets: [{
            label: '# TOTAL SUARA TEKNIK ARSITEK',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['PASLON 1', 'PASLON 2', 'PASLON 3'],
        datasets: [{
            label: '# TOTAL SUARA TEKNIK ELEKTRO',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: ['PASLON 1', 'PASLON 2', 'PASLON 3'],
        datasets: [{
            label: '# TOTAL SUARA TEKNIK ELEKTRO',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
@endsection