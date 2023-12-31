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

    <div style="margin-top:20px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" style="color: #000; font-size: 22px; font-family: Poppins;">
                <li class="breadcrumb-item"><a href="/laundry" style="color:black; text-decoration: underline;">Laundry</a></li>
                <li class="breadcrumb-item"><a href="/listlaundry" style="color:black; text-decoration: underline;">List Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Order</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex align-items-center py-5" style="width:700px; background: #F3F3F3; border-radius: 22px; margin-left:30%;">
        <div class="container">
            <div class="row">
                <div class="col-ms-9 col-lg-10 mx-auto">

                <p style="color: #A38859;"><strong>Create Order</strong></p>

                <form action="{{route('laundry.store')}}" method="POST">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label"><h3 style="color:black; font-size:18px;">Customer Name</h3></label>
                        @if (count($penyewa) > 0)
                            <select class="form-select" aria-label="Default select example" name="nameLaundry" style="background-color: #E4E4E4; font-size:18px; font-family: Poppins;">
                                <option selected value="0">Select the customer</option>
                                
                                @foreach ($penyewa as $customer)
                                    <option value="{{ $customer->id_penyewa }}">{{ $customer->nama_penyewa }}</option>
                                @endforeach
                            </select>
                        @else
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Customer data in the database is empty" disabled>
                        @endif
                        <span class="text-danger">@error('nameLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputService" class="form-label"><h3 style="color:black; font-size:18px; ">Service</h3></label>
                        <select class="form-select" aria-label="Default select example" name="serviceLaundry" style="background-color: #E4E4E4; font-size:18px; font-family: Poppins;">
                            <option selected value="0">Select the service</option>
                            <option value="L1 Pakaian Satuan">L1 Pakaian Satuan</option>
                            <option value="L2 Pakaian Kiloan">L2 Pakaian Kiloan</option>
                            <option value="L3 Sepatu/Tas">L3 Sepatu/Tas</option>
                            <option value="L4 Karpet">L4 Karpet</option>
                            <option value="L5 Setrika">L5 Setrika</option>
                        </select>
                        <span class="text-danger">@error('serviceLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputWeight" class="form-label"><h3 style="color:black; font-size:18px;">Laundry Weight (Kg)</h3></label>
                        <input type="number" class="form-control"  name="weightLaundry" style="border-radius: 7px; background: #E4E4E4;">
                        <span class="text-danger">@error('weightLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputBill" class="form-label"><h3 style="color:black; font-size:18px;">Bill (Rp)</h3></label>
                        <input type="number" class="form-control"  name="laundrybill" style="border-radius: 7px; background: #E4E4E4;">
                        <span class="text-danger">@error('laundrybill') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputOrder" class="form-label"><h3 style="color:black; font-size:18px;">Order Date</h3></label>
                        <input type="date" class="form-control"  name="odLaundry" style="border-radius: 7px; background: #E4E4E4;">
                        <span class="text-danger">@error('odLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputPickup" class="form-label"><h3 style="color:black; font-size:18px;">Pickup Date</h3></label>
                        <input type="date" class="form-control"  name="pdLaundry" style="border-radius: 7px; background: #E4E4E4;">
                        <span class="text-danger">@error('pdLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputStaff" class="form-label"><h3 style="color:black; font-size:18px;">Staff</h3></label>
                        @if (count($pegawai) > 0)
                            <select class="form-select" aria-label="Default select example" name="staffLaundry" style="background-color: #E4E4E4; font-size:18px; font-family: Poppins;">
                                <option selected value="0">Select the staff</option>
                                
                                @foreach ($pegawai->where('jabatan_pegawai', 'Laundry')->where('status_pegawai', 'Bekerja') as $staff)
                                    <option value="{{ $staff->id_pegawai }}">{{ $staff->nama_pegawai }}</option>
                                @endforeach
                            </select>
                        @else
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Staff data in the database is empty" disabled>

                        @endif
                        <span class="text-danger">@error('staffLaundry') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="inputPickup" class="form-label"><h3 style="color:black; font-size:18px;">Status</h3></label>
                        <select class="form-select" aria-label="Default select example" name="statusLaundry" style="background-color: #E4E4E4; font-size:18px; font-family: Poppins;">
                            <option selected value="0">Select the status</option>
                            <option value="Received">Received</option>
                            <option value="On-going">On-going</option>
                            <option value="Completed">Completed</option>
                        </select>
                        <span class="text-danger">@error('statusLaundry') {{$message}} @enderror</span>
                    </div>

                    <button type="submit" class="btn position-absolute end-0" style="background-color:#A38859; margin-right:430px; color:white; font-weight: 600;">Add to Cart</button>
                </form>

                </div>
            </div>
        </div>


    </div>

@endsection