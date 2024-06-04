@extends('layout.main')

@section('title', 'DASHBOARD')

@section('content')

@include('include.sidebar')

<main id="main">
    <div class="card m-3">
        <div class="card-body">
            <h3 class="card-title">
                DASHBOARD
            </h3>
            <div class="row g-3">
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL SALES TODAY
                            </h1>
                            <p class="float-end fs-5">0.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL SALES TODAY
                            </h1>
                            <p class="float-end fs-5">0.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL AVAILABLE PRODUCTS
                            </h1>
                            <p class="float-end fs-5">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL EXPIRED PRODUCTS
                            </h1>
                            <p class="float-end fs-5">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL SALES RETURNED
                            </h1>
                            <p class="float-end fs-5">0.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h1 class="card-title fs-5">
                                TOTAL PRODUCTS RETURNED
                            </h1>
                            <p class="float-end fs-5">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-4">
                <canvas id="pieChart"></canvas>
            </div>
            <div class="col-sm-8">
                <canvas id="lineChart"></canvas>
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
                label: 'SALES',
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
