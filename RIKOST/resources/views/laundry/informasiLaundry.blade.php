@extends('layouts.main')

@section('title', 'RIKOST | Laundry')

@push('css')
    <link rel="stylesheet" href="css/laundry.css">
@endpush

@section('content')
<div id="laundry">

    <div class="row ">

        <div class="col-md-8">
            <div class="div ps-md-5">
                <h2><strong>Laundry Information Center</strong></h2>
            </div>

            <div style="margin-top:20px; margin-left:50px;">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color: #000; font-size: 22px; font-family: Poppins;">
                        <li class="breadcrumb-item active" aria-current="page">Laundry</li>
                    </ol>
                </nav>
            </div>

            <div class="card" style="margin-left:30px; width: 60rem; border: none;">
                <div class="card-body col-sm-12 mb-3 mb-sm-0"style="border: none;">
                    <img src="img/laundry/infolaundry.png" alt="Banner" width="950px" style="position: relative; top: -20px;">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <a href="{{route('laundry.service')}}">
                <div class="card" style="width: 30rem; margin-top:15px;" id="card">
                    <div class="card-header" style="text-align: center; background: #A38859;">
                            <h3 style="color:white; font-size: 20px;"><strong>Service</strong></h3>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3><strong>L1</strong> Pakaian Satuan: {{$totalL1}} Order</h3></li>
                        <li class="list-group-item"><h3><strong>L2</strong> Pakaian Kiloan: {{$totalL2}} Order</h3></li>
                        <li class="list-group-item"><h3><strong>L3</strong> Sepatu/Tas: {{$totalL3}} Order</h3></li>
                        <li class="list-group-item"><h3><strong>L4</strong> Karpet: {{$totalL4}} Order</h3></li>
                        <li class="list-group-item"><h3><strong>L5</strong> Setrika: {{$totalL5}} Order</h3></li>
                    </ul>
                </div>
            </a>
        </div>

    </div>

    <div class="row">
            <div class="col-md-8" style="background: #F3F3F3; border-radius: 18px;">
                <div class="container">
                @if (count($laundry) >0 )
                    <div class="table-responsive" style="margin: 15px;">
                    <h3 style="color:black;"><strong>Overview Data Laundry</strong></h3>
                    <table class="table-striped table">
                        <thead>
                        <tr>
                            <th style="color:#A38859;">Customer</th>
                            <th>Service</th>
                            <th>Laundry Weight (Kg)</th>
                            <th>Bill (Rp)</th>
                            <th>Order Date</th>
                            <th>Pickup Date</th>
                            <th>Staff</th>
                            <th style="color:#A38859;">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                            @php
                                $count = 0;
                            @endphp

                            @foreach ($laundry as $order)
                                @if ($count < 5)
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
                                    @php
                                        $count++;
                                    @endphp
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h2 style="color:black; font-size:25px; margin-left:40px; margin-top:40px;">!Laundry data in the database is empty!</h2>
                @endif
                <a href="{{route('laundry.list')}}" class="btn" style="background-color:#A38859; margin-left:860px; margin-bottom:30px; color:white; font-weight: 600;">See table</a>

            </div>
        </div>

        <div class="col-md-4">
                <div class="card" style="width: 30rem;" id="card">
                    <div class="card-header" style="text-align: center; background: #A38859;">
                            <h3 style="color:white; font-size: 20px;"><strong>REPORT</strong></h3>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3 style="Font-size:25px;"><strong>Total Order: </strong>{{$total}} Order</h3></li>
                        <li class="list-group-item"><h3 style="Font-size:25px;"><strong>Received: </strong>{{$totalReceived}} Order</h3></li>
                        <li class="list-group-item"><h3 style="Font-size:25px;"><strong>On-going: </strong>{{$totalOngoing}} Order</h3></li>
                        <li class="list-group-item"><h3 style="Font-size:25px;"><strong>Completed: </strong>{{$totalCompleted}} Order</h3></li>
                    </ul>
                </div>
        </div>
    </div>

</div>

@endsection