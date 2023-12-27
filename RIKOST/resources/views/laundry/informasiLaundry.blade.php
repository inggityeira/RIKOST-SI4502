@extends('layouts.main')

@section('title', 'RIKOST | Laundry')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <link rel="stylesheet" href="css/laundry.css">
@endpush

@section('content')
<div id="laundry">

    <div class="row mb-3">

        <div class="col-md-8">
            <div class="div ps-md-5">
                <h2><strong>Laundry Information Center</strong></h2>
            </div>
            
            <div style="margin-top:20px;">
                <p class="div ps-md-5">
                    <a href="/laundry" style="color:black;">Laundry</a>
                </p>
            </div>

            <div class="card" style="margin-left:50px; width: 60rem; border: none;">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card" style="height: 150px; background: #F3F3F3;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>STEP 1</strong></h5>
                            <h5 class="card-title" style="margin-top:20px; font-size: 30px;">Pick Up</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="height: 150px; background: #F3F3F3;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>STEP 2</strong></h5>
                            <h5 class="card-title" style="margin-top:20px; font-size: 30px;">Wash</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="height: 150px; background: #F3F3F3;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>STEP 3</strong></h5>
                            <h5 class="card-title" style="margin-top:20px; font-size: 30px;">Fold</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="height: 150px; background: #F3F3F3;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>STEP 4</strong></h5>
                            <h5 class="card-title" style="margin-top:20px; font-size: 30px;">Delivery</h5>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="col-md-4">
        
        <a href="/servicelaundry">
        <div class="card" style="width: 30rem; margin-top:15px;" id="card">
            <div class="card-header" style="text-align: center; background: #A38859;">
                    <h3 style="color:white; font-size: 20px;">Service</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h3>An Item</h3></li>
                <li class="list-group-item"><h3>A second item</h3></li>
                <li class="list-group-item"><h3>A third item</h3></li>
                <li class="list-group-item"><h3>A second item</h3></li>
                <li class="list-group-item"><h3>A third item</h3></li>
            </ul>
        </div>
        </a>

        </div>

    </div>

    <div class="row">
        <div class="col-md-8" style="background: red;">
            <p>COLOM 1</p>
        </div>

        <div class="col-md-4" style="background: Blue;">
            <p>COLOM 2</p>
        </div>
    </div>

</div>

@endsection