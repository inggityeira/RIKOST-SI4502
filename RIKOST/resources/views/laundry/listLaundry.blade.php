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

            <div style="margin-top:20px; margin-left:50px;">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color: #000; font-size: 22px; font-family: Poppins;">
                        <li class="breadcrumb-item"><a href="/laundry" style="color:black; text-decoration: underline;">Laundry</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Order</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-md-4">
            <a href="{{route('laundry.new')}}" class="btn position-absolute end-0" style="background-color:#A38859; margin-top:30px; margin-right:120px; color:white; font-weight: 600;">+ Add New Order</a>
        </div>
        
    </div>

    <div class="container">
        @if (count($laundry) >0 )
            <div class="table-responsive">
            <table class="table-striped table">
                <thead>
                <tr>
                    <th style="color:#A38859;">ID Customer</th>
                    <th>Service</th>
                    <th>Laundry Weight (Kg)</th>
                    <th>Bill (Rp)</th>
                    <th>Order Date</th>
                    <th>Pickup Date</th>
                    <th>ID Staff</th>
                    <th style="color:#A38859;">Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($laundry as $order)
                    <tr>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:#A38859;"><strong>{{ $order->penyewa->nama_penyewa}}</strong></a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->jenis_laundry}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->berat_laundry}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->tagihan_laundry}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->tgl_pemesanan}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->tgl_selesai}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:black;">{{ $order->pegawai->nama_pegawai}}</a></td>
                        <td><a href="{{ route('laundry.detail', $order->id_laundry) }}" style="color:#A38859;">{{ $order->status_laundry}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        @else
        <p>Laundry data in the database is empty</p>
        @endif
    </div>
</div>

@endsection