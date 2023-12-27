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
            <a href="/listlaundry" style="color:black;">List Order</a>
            >
            <a href="/newlaundry" style="color:black;">New Order</a>
        </p>
    </div>

    <div class="d-flex align-items-center py-5 position-absolute start-50 translate-middle-x" style="width:550px; background: #F3F3F3; border-radius: 22px;">
        <div class="container">
            <div class="row">
                <div class="col-ms-9 col-lg-10 mx-auto">

                <p style="color: #A38859;"><strong>Create Order</strong></p>

                <form>
                    <div class="mb-3">
                        <label for="inputName" class="form-label"><h3 style="color:black; font-size:18px;">Customer Name</h3></label>
                        <input type="text" class="form-control"  name="nameLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <div class="mb-3">
                        <label for="inputService" class="form-label"><h3 style="color:black; font-size:18px;">Service</h3></label>
                        <input type="text" class="form-control"  name="serviceLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <div class="mb-3">
                        <label for="inputWeight" class="form-label"><h3 style="color:black; font-size:18px;">Laundry Weight</h3></label>
                        <input type="text" class="form-control"  name="weightLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <div class="mb-3">
                        <label for="inputOrder" class="form-label"><h3 style="color:black; font-size:18px;">Order Date</h3></label>
                        <input type="date" class="form-control"  name="odLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <div class="mb-3">
                        <label for="inputPickup" class="form-label"><h3 style="color:black; font-size:18px;">Pickup Date</h3></label>
                        <input type="date" class="form-control"  name="pdLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <div class="mb-3">
                        <label for="inputStaff" class="form-label"><h3 style="color:black; font-size:18px;">Staff</h3></label>
                        <input type="text" class="form-control"  name="staffLaundry" style="border-radius: 7px; background: #E4E4E4;">
                    </div>

                    <button type="submit" class="btn position-absolute end-0" style="background-color:#A38859; margin-right:55px; color:white; font-weight: 600;">Add to Cart</button>
                </form>

                </div>
            </div>
        </div>


    </div>

@endsection