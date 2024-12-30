@extends('Layout.app')

@section('content')
@include('Product.addproduct')
@include('Product.updateproduct')
@include('Product.addtotrash')
@include('Product.viewproduct')

<div class="product-container">
    <div class="product-topnav">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand"><strong style="color: white;">List of All Products</strong></a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Product ID</th>
                <th>Brand</th>
                <th>Stocks</th>
                <th>Dosage</th>
                <th>Category</th>
                <th>Orig. Price</th>
                <th>Selling Price</th>
                <th>Unit M.</th>
                <th>Description</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>

            <tr>
                <td>1001</td>
                <td>Biogesic</td>
                <td>500</td>
                <td>100mg</td>
                <td>Cough and Colds</td>
                <td>5.00</td>
                <td>10.00</td>
                <td>gm</td>
                <td>For People who needs.</td>
                <td>Active</td>
                <td style="text-align: center;">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#viewproductModal" class="btn btn-light"><img src="{{asset('images/view.png')}}" alt="view icon" width="30" height="30"></button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateproductModal" class="btn btn-light"><img src="{{asset('images/updateproduct.png')}}" alt="update icon" width="30" height="30"></button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addtotrashModal" class="btn btn-light"><img src="{{asset('images/addtotrash.png')}}" alt="delete icon" width="30" height="30"></button>
                </td>
            </tr>
        </table>
        <div class="Add-button" style="float: right; margin-right:2%;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproductModal">
                +Add New Product
            </button>
        </div>
    </div>
</div>
@endsection