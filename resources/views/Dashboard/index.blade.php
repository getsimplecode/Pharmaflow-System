@extends('Layout.app')

@section('content')

<div class="container-fluid"> <!-- Ensure proper container -->
    <div class="row">
        <div id="boxes">
            <h4><strong style="color: #00a375;">Total Sales</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/sales.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>

        <div id="boxes">
            <h4><strong style="color: #00a375;">Total Revenue</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/revenues.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
        <div id="boxes">
            <h4><strong style="color: #00a375;">Top Selling Product</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/topselling.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
        <div id="boxes">
            <h4><strong style="color: #00a375;">Nearly Expiration</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/nearlyexpired.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="boxes">
            <h4><strong style="color: #00a375;">Available Medicine</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/medicine.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>

        <div id="boxes">
            <h4><strong style="color: #00a375;">Slow Moving Products</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/slowmoving.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="60" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
        <div id="boxes">
            <h4><strong style="color: #00a375;">Total Active User</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/users.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
        <div id="boxes">
            <h4><strong style="color: #00a375;">Total Unactive User</strong></h4>
            <div class="image">
                <img id="arrowdown" src="{{asset('images/unactiveuser.png')}}" style="float: left; margin-left:2%;" alt="arrowdown" width="50" height="50">
                <h4><strong style="font-size:40px; float:right; margin-right:10%;">12,000</strong></h4>
            </div>
        </div>
    </div>
    @include('Dashboard.linechart')
</div>

    @endsection
