@extends('Layout.app')

@section('content')
@include('Supplier.addsupplier')
@include('Supplier.addtotrashsupplier')
@include('Supplier.updatesupplier')
@include('Supplier.viewsupplier')

<div class="supplier-container">
    <div class="product-topnav">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand"><strong style="color: white;">List of All Supplier</strong></a>
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
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Contact Number</th>
                <th>Barangay</th>
                <th>Street</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>

            <tr>
                <td>1001</td>
                <td>Sample Supplier 1</td>
                <td>09123456789</td>
                <td>Balintawak</td>
                <td>Purok 7</td>
                <td>Talibon</td>
                <td>Bohol</td>
                <td>Active</td>
                <td style="text-align: center;">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#viewsupplier" class="btn btn-light"><img src="{{asset('images/view.png')}}" alt="view icon" width="30" height="30"></button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updatesupplier" class="btn btn-light"><img src="{{asset('images/updateproduct.png')}}" alt="update icon" width="30" height="30"></button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addtrash" class="btn btn-light"><img src="{{asset('images/addtotrash.png')}}" alt="delete icon" width="30" height="30"></button>
                </td>
            </tr>
        </table>
        <div class="Add-button" style="float: right; margin-right:1%;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addsupplier">
                +Add New Product
            </button>
        </div>
    </div>
</div>
@endsection