@extends('layout.main')

@section('title', 'PRODUCTS')

@section('content')

@include('include.sidebar')

<main id="main">
    <div class="container-fluid">
        <div class="card ms-2 mt-5 me-2">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title">PRODUCTS</h5>
                    <a href="#" class="btn btn-primary">ADD PRODUCT</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NO.</th>
                                <th scope="col">CODE</th>
                                <th scope="col">NAME</th>
                                <th scope="col">BRAND</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">EXPIRATION DATE</th>
                                <th scope="col">SUPPLIER</th>
                                <th scope="col">DATE ADDED</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection