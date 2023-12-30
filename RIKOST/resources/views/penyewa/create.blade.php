@extends('layouts.main')

@section('title', 'RIKOST | Penyewa')

@section('content')
<div class = "card" style = "margin : 20px;">
    <div class = "card-header" style = "background-color: #A38859 ; color : #FFFFFF">Penyewa Baru</div>
    <div class = "card-body">
        <form action="{{route('penyewa.submit')}}" method='POST'>
            @csrf

        <label>Masukan Id</label></br>
        <input type="integer" name="id_penyewa" id = "id_penyewa" class="form-control"></br>

        <label>Nama Penyewa</label></br>
        <input type="string" name="nama_penyewa" id = "nama_penyewa" class="form-control"></br>

        <label>Kontak Penyewa</label></br>
        <input type="string" name="kontak_penyewa" id = "kontak_penyewa" class="form-control"></br>

        <label>NIK Penyewa</label></br>
        <input type="string" name="NIK_penyewa" id = "NIK_penyewa" class="form-control"></br>
        
        <label>Nama Orang Tua</label></br>
        <input type="string" name="nama_ortu" id = "nama_ortu" class="form-control"></br>
        
        <label>Kontak Orang Tua</label></br>
        <input type="string" name="kontak_ortu" id = "kontak_ortu" class="form-control"></br>

        <label>Waktu Sewa</label></br>
        <input type="string" name="waktu_sewa" id = "waktu_sewa" class="form-control"></br>

        <label>ID Kamar</label></br>
        <input type="string" name="id_kamar" id = "id_kamar" class="form-control"></br>
        
        <label>Fasilitas Umum</label></br>
        <input type="string" name="fasilitas_umum" id = "fasilitas_umum" class="form-control"></br>
        
        <input type="submit" value= "Submit" class="btn" style = "background-color: #A38859 ; color : #FFFFFF "></br>
        </form>
    </div>  
</div>

@endsection