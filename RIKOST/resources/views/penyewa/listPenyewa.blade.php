@extends('layouts.main')

@section('title', 'RIKOST | PENYEWA')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@section('content')
<div class="col-md-4">
    <a href="{{route('penyewa.create')}}" class="btn position-absolute end-0" style="background-color:#A38859; margin-top:30px; margin-right:120px; color:white; font-weight: 600;">+ Menambahkan Penyewa</a>
</div>
<div class="container mt-4">
    <h2>Penyewa RIKOST</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Penyewa</th>
                <th>Nama Penyewa</th>
                <th>ID Kamar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($penyewa as $customer)
        <tr>
            <td>{{ $customer->id_penyewa }}</td>
            <td>{{ $customer->nama_penyewa }}</td>
            <td>{{ $customer->id_kamar }}</td>
            <td>
                  <a href="{{ route('penyewa.update', $customer->id_penyewa) }}">
                  <svg viewBox="0 0 24 24" fill="none" width="28" heigth="28" xmlns="http://www.w3.org/2000/svg" stroke="#"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.15" d="M8 16H12L18 10L14 6L8 12V16Z" fill="#0084ff"></path> <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14" stroke="#0084ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                  </a>
            </td>  
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection