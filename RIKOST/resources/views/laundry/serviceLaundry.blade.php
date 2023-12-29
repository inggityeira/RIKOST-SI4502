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
                <img src="img/laundry/L1.png" class="card-img-top" alt="L1">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L1</strong> PAKAIAN SATUAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received: {{$L1Received}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going: {{$L1Ongoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed: {{$L1Completed}} Order</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L2.png" class="card-img-top" alt="L2">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L2</strong> PAKAIAN KILOAN</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received: {{$L2Received}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going: {{$L2Ongoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed: {{$L2Completed}} Order</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L3.png" class="card-img-top" alt="L3">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L3</strong> SEPATU/TAS</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received: {{$L3Received}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going: {{$L3Ongoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed: {{$L3Completed}} Order</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L4.png" class="card-img-top" alt="L4">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L4</strong> KARPET</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received: {{$L4Received}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going: {{$L4Ongoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed: {{$L4Completed}} Order</h3></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <img src="img/laundry/L5.png" class="card-img-top" alt="L5">
                <div class="card-body">
                    <p class="card-title" style="text-align: center;"><strong>L5</strong> SETRIKA</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="color:black;">Received: {{$L5Received}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">On-going: {{$L5Ongoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="color:black;">Completed: {{$L5Completed}} Order</h3></li>
                    </ul>
                </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection