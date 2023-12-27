<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIKOST | Pembayaran </title>
    <link href="" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-transparent" style ="margin-left: 60px; margin-top:40px; margin-right: 30px;">
        <div class="container-fluid">
        <h2><strong>RIKOST</strong></h2> 
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5" style="font-size: 18px;">
                <a class="nav-link active me-4" aria-current="page" href="/ourteam">Our Team</a>
                <a class="nav-link active me-4" style="color:#A38859;" aria-current="page" href="/login">Login</a>
                <a class="btn" style="background-color:#A38859; color:white; font-weight: 600; " aria-current="page" href="/signup">Sign Up</a>
            </div>
            </div>
        </div>
    </nav>

@extends('layouts.main')

@section('title', 'RIKOST | Pembayaran')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->

@endsection