@extends('layouts.main')

@section('title', 'RIKOST | Update Penyewa')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('content')
<!-- masukin isi content disini -->
<div class="card">
        <div class="card-body">
            <h2>Update Data Penyewa</h2>

        <form action ="{{route('penyewa.toupdate', $customer->id_penyewa)}}" method = "POST"> 
            @csrf

        <label>Masukan Id</label></br>
        <input type="integer" name="id_penyewa" id = "id_penyewa" value="{{ $customer->id_penyewa}}" class="form-control"></br>

        <label>Nama Penyewa</label></br>
        <input type="string" name="nama_penyewa" id = "nama_penyewa" value="{{ $customer->nama_penyewa}}" class="form-control"></br>

        <label>Kontak Penyewa</label></br>
        <input type="string" name="kontak_penyewa" id = "kontak_penyewa" value="{{ $customer->kontak_penyewa}}" class="form-control"></br>

        <label>NIK Penyewa</label></br>
        <input type="string" name="NIK_penyewa" id = "NIK_penyewa" value="{{ $customer->NIK_penyewa}}" class="form-control"></br>
        
        <label>Nama Orang Tua</label></br>
        <input type="string" name="nama_ortu" id = "nama_ortu" value="{{ $customer->nama_ortu}}" class="form-control"></br>
        
        <label>Kontak Orang Tua</label></br>
        <input type="string" name="kontak_ortu" id = "kontak_ortu" value="{{ $customer->kontak_ortu}}" class="form-control"></br>

        <label>Waktu Sewa</label></br>
        <input type="string" name="waktu_sewa" id = "waktu_sewa" value="{{ $customer->waktu_sewa}}" class="form-control"></br>

        <label>ID Kamar</label></br>
        <input type="string" name="id_kamar" id = "id_kamar" value="{{ $customer->id_kamar}}" class="form-control"></br>
        
        <label>Fasilitas Umum</label></br>
        <input type="string" name="fasilitas_umum" id = "fasilitas_umum" value="{{ $customer->fasilitas_umum}}" class="form-control"></br>
        
        <!-- <input type="submit" value= "Submit" class="btn" style = "background-color: #A38859 ; color : #FFFFFF "></br> -->
        <button type="submit" class="btn" style="background-color:#A38859; margin-right:55px; color:white; font-weight: 600;">Submit</button>
        </form>
        </div>
    </div>
@endsection