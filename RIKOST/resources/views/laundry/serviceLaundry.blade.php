@extends('layouts.main')

@section('title', 'RIKOST | Laundry')

@push('css')
    <link rel="stylesheet" href="css/laundry.css">
@endpush

@section('content')
<div id="laundry">

    <div class="div ps-md-5">
        <h2><strong>Laundry Information Center</strong></h2>
    </div>
    
    <div style="margin-top:20px;">
        <p class="div ps-md-5">
            <a href="/laundry" style="color:black;">Laundry</a>
            >
            <a href="/servicelaundry" style="color:black;">Service Laundry</a>
        </p>
    </div>

    <div class="d-flex align-items-center py-5 position-absolute start-50 translate-middle-x" style="width:1200px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L1</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L2</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L3</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L1</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L1</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed</h3></li>
                    </ul>
                </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection