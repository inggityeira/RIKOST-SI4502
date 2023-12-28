@extends('layouts.main')

@section('title', 'RIKOST | Laundry')

@push('css')
    <link rel="stylesheet" href="css/laundry.css">
@endpush

@section('content')
<div id="laundry">
    <div class="row">

        <div class="col-md-8">
            <div class="div ps-md-5">
                <h2><strong>Laundry Information Center</strong></h2>
            </div>
            
            <div style="margin-top:20px;">
                <p class="div ps-md-5">
                    <a href="/laundry" style="color:black;">Laundry</a>
                    >
                    <a href="/listlaundry" style="color:black;">List Order</a>
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <a type="submit" class="btn position-absolute end-0" href="/newlaundry" style="background-color:#A38859; margin-top:30px; margin-right:120px; color:white; font-weight: 600;">+ Add New Order</a>
        </div>
    </div>

    <div class="container">
        @if (count($laundry) >0 )
            <div class="table-responsive">
            <table class="table-striped table">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Laundry Weight</th>
                    <th>Bill</th>
                    <th>Order Date</th>
                    <th>Pickup Date</th>
                    <th>Staff</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($laundry as $order)
                    <tr>
                        <td><a href="{{ route('laundry.detail', ['id_laundry' => $order->id_laundry]) }}">{{ $order->id_penyewa}}</a></td>
                        <td>{{ $order->jenis_laundry}}</td>
                        <td>{{ $order->berat_laundry}}</td>
                        <td>{{ $order->tagihan_laundry}}</td>
                        <td>{{ $order->tgl_pemesanan}}</td>
                        <td>{{ $order->tgl_selesai}}</td>
                        <td>{{ $order->id_pegawai}}</td>
                        <td>{{ $order->status_laundry}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        @else
        <p>Customer data in the database is empty</p>
        @endif
    </div>
</div>

@endsection