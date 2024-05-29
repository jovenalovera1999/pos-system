@extends('layout.main')

@section('title', 'DASHBOARD')

@section('content')

<main id="main">
    @include('include.sidebar')
    <div class="card m-1">
        <div class="card-body">
            <h3 class="card-title">
                DASHBOARD
            </h3>

            <div class="row">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL SALES TODAY
                            </h1>
                            <p class="float-end fs-5">0.00</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL AVAILABLE PRODUCTS
                            </h1>
                            <p class="float-end fs-5">0</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL EXPIRED PRODUCTS
                            </h1>
                            <p class="float-end fs-5">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <canvas class="h-100" id="pieChart"></canvas>
            </div>
            <div class="col-md-8">
                <canvas class="h-100" id="lineChart"></canvas>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>

<script>
  const pieChart = document.getElementById('pieChart');
  const lineChart = document.getElementById('lineChart');

  new Chart(pieChart, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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

  new Chart(lineChart, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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