<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaFlow</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dosis:wght@200..800&family=Ysabeau+SC:wght@1..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="designs">
                <img src="{{asset('images/logofarmacia-removebg-preview.png')}}" alt="logo" style="width: 40px;" height="40px;">
                PHARMAFLOW MANAGEMENT SYSTEM
            </div>
        </div>
    </nav>
    <aside>
        <div class="buttons">
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('dashboard.index') }}"><img src="{{asset('images/dashboard.png')}}" alt="Dashboard Icon" width="35" height="35">Dashboard</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('pos.index') }}"><img src="{{asset('images/pos.png')}}" alt="POS Icon" width="35" height="30">POS</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="dropdown-btn">
                    <span><img src="{{asset('images/inventory.png')}}" alt="Inventory Icon" width="35" height="30">Inventory
                        <img id="arrowdown" src="{{asset('images/smalldropdown.png')}}" alt="arrowdown" width="10" height="10">
                    </span>
                    <div class="dropdown-content">
                        <a href=""><img src="{{asset('images/purchase.png')}}" alt="POS Icon" width="28" height="28">Purchase</a>
                        <a href="#"><img src="{{asset('images/productanalytics.png')}}" alt="POS Icon" width="28" height="28">Product Analytics</a>
                        <a href="#"><img src="{{asset('images/prescriptiveanalytics.png')}}" alt="POS Icon" width="19" height="18">Prescriptive Analytics</a>
                        <a href="{{ route('product.index') }}"><img src="{{asset('images/product.png')}}" alt="POS Icon" width="26" height="26">Product</a>
                        <a href="#"><img src="{{asset('images/category.png')}}" alt="POS Icon" width="26" height="26">Category</a>
                    </div>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('supplier.index') }}"><img src="{{asset('images/suppliericon.png')}}" alt="POS Icon" width="35" height="30">Supplier</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('salesreport.index') }}"><img src="{{asset('images/salesreport.png')}}" alt="POS Icon" width="35" height="30">Sales Report</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('usermanagement.index') }}"><img src="{{asset('images/users.png')}}" alt="POS Icon" width="35" height="30">User Management</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('roleandpermission.index') }}"><img src="{{asset('images/roleandpermission.png')}}" alt="POS Icon" width="35" height="30">Role and Permission</a>
                </div>
            </div>
            <div class="sidebuttons">
                <div class="btn-side-nav">
                    <a href="{{ route('systemmanage.index') }}"><img src="{{asset('images/settings.png')}}" alt="POS Icon" width="35" height="30">System Manage</a>
                </div>
            </div>
        </div>
    </aside>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 PharmaFlow Management System. All rights reserved.</p>
    </footer>

    <script src="{{url('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>