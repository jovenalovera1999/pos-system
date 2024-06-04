@extends('layout.main')

@section('title', 'ADD PRODUCT')

@section('content')
    
@include('include.sidebar')

<main id="main">
    <div class="container-fluid">
        <div class="card col-sm-4 mx-auto mt-5">
            <div class="card-body">
                <h5 class="card-title">ADD PRODUCT</h5>
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="code">CODE</label>
                                <input type="text" class="form-control" name="code" id="code" value="" />
                                @error('code') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">PRODUCT NAME</label>
                                <input type="text" class="form-control" name="name" id="name" value="" />
                                @error('name') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="brand">BRAND</label>
                                <input type="text" class="form-control" name="brand" id="brand" value="" />
                                @error('brand') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">PRICE</label>
                                <input type="text" class="form-control" name="price" id="price" value="" />
                                @error('price') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="quantity">QUANTITY</label>
                                <input type="text" class="form-control" name="quantity" id="quantity" value="" />
                                @error('quantity') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="expiration_date">EXPIRATION DATE</label>
                                <input type="date" class="form-control" name="expiration_date" id="expiration_date" value="" />
                                @error('expiration_date') {{ $message }} @enderror
                            </div>
                            <div class="mb-3">
                                <label for="supplier">SUPPLIER</label>
                                <input type="text" class="form-control" name="supplier" id="supplier" value="" />
                                @error('supplier') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary col-sm-2 me-1">BACK</a>
                        <button type="submit" class="btn btn-primary col-sm-2">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection