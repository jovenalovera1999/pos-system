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
            <canvas id="chartjs-pie" width="592" height="600" style="display: block; height: 300px; width: 296px;" class="chartjs-render-monitor"></canvas>
        </div>
    </div>
</main>

@endsection