@extends('layout.main')

@section('title', 'ORDER')

@section('content')

@include('include.sidebar')

<main id="main">
    <div class="container-fluid">
        <div class="card ms-2 mt-5 me-2">
            <div class="card-body">
                <h5 class="card-title">ORDER</h5>
                <div class="row g-3">
                    <div class="col-sm-7">
                        <h6 class="card-title">PRODUCTS</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="SEARCH FOR PRODUCTS" />
                        </div>
                        <div class="row row-cols-1 row-cols-sm-4 g-3" style="overflow-x: auto; white-space: nowrap;">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <p class="card-text"><strong>CODE:</strong> 02378875</p>
                                        <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                        <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                        <p class="card-text"><strong>QUANTITY:</strong> 87</p>
                                        <button class="btn btn-primary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <h6 class="card-title">CART</h6>
                        <form action="#" method="post">
                            @csrf
                            <div class="table-responsive mb-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">QUANTITY</th>
                                            <th scope="col">SUBTOTAL</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add rows dynamically here -->
                                    </tbody>
                                </table>
                            </div>
                            <p class="mb-3"><strong>TOTAL PRICE:</strong> $0.00</p>
                            <div class="mb-3">
                                <label for="customer_name">CUSTOMER NAME</label>
                                <input type="text" class="form-control" name="customer_name" id="customer_name" value="" />
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="total_price">TOTAL PRICE</label>
                                        <input type="text" class="form-control" name="total_price" id="total_price" value="" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="discount">DISCOUNT</label>
                                        <select name="discount" id="discount" class="form-select">
                                            <option value="">N/A</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="amount">AMOUNT</label>
                                        <input type="text" class="form-control" name="amount" id="amount" value="" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="change">CHANGE</label>
                                        <input type="text" class="form-control" name="change" id="change" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-primary me-1">PRINT</a>
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection