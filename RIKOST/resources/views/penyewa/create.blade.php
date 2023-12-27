@extends('layouts.main')

@section('title', 'RIKOST | Laundry')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->
<div class = "card" style = "margin : 20px;">
    <div class = "card-header" style = "background-color: #A38859 ; color : #FFFFFF">Penyewa Baru</div>
    <div class = "card-body">
        <form>
        <label>Masukan Id</label></br>
        <input type="integer" name="id" id = "id" class="form-control"></br>

        <label>Nama</label></br>
        <input type="string" name="nama" id = "nama" class="form-control"></br>

        <label>Kontak</label></br>
        <input type="string" name="kontak" id = "kontak" class="form-control"></br>

        <label>NIK</label></br>
        <input type="string" name="nik" id = "nik" class="form-control"></br>
        
        <label>Nama Orang Tua</label></br>
        <input type="string" name="ortu" id = "ortu" class="form-control"></br>
        
        <label>Kontak</label></br>
        <input type="password" name="kontak" id = "kontak" class="form-control"></br>
        
        <label>Kontak Orang Tua</label></br>
        <input type="string" name="kontakortu" id = "kontakortu" class="form-control"></br>

        <label>Waktu Sewa</label></br>
        <input type="string" name="waktusewa" id = "waktusewa" class="form-control"></br>

        <!-- masukin FK dari Kamar -->
        
        <label>Fasilitas Umum</label></br>
        <input type="string" name="fasilitas" id = "fasilitas" class="form-control"></br>
        
        <input type="submit" value= "Submit" class="btn" style = "background-color: #A38859 ; color : #FFFFFF "></br>
        </form>
    </div>  
</div>

@endsection