@extends('layouts.main')

@section('title', 'DATA STAFF')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('css')
<!-- masukin link file css disini contoh: <link rel="stylesheet" href="css/home.css"> -->

@section('content')
<!-- masukin isi content disini -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Data Pegawai</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
             
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data pegawai
            $dataPegawai = array(
                array('id' => 001, 'nama' => 'Asep', 'jabatan' => 'Penjaga Kost', 'kontak' => '08123456789', 'alamat' => 'Jl. Pahlawan No. 123', 'norek' => '1234567890', 'status' => 'Aktif'),
                array('id' => 002, 'nama' => 'Udin', 'jabatan' => 'Cleaning service', 'kontak' => '08234567890', 'alamat' => 'Jl. Merdeka No. 456', 'norek' => '0987654321', 'status' => 'Non-Aktif'),
                array('id' => 003, 'nama' => 'dudin', 'jabatan' => 'Penjaga Kost', 'kontak' => '08345678901', 'alamat' => 'Jl. Jendral Sudirman No. 789', 'norek' => '5678901234', 'status' => 'Aktif'),
            );

            // Menampilkan data pegawai
            foreach ($dataPegawai as $key => $pegawai) {
                echo "<tr>";
                echo "<td>".($key + 1)."</td>";
                echo "<td>{$pegawai['id']}</td>";
                echo "<td>{$pegawai['nama']}</td>";
                echo "<td>{$pegawai['jabatan']}</td>";
                echo "<td><button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#detailModal{$pegawai['id']}'>Detail</button></td>";
                echo "</tr>";

                // Modal untuk detail pegawai
                echo "<div class='modal fade' id='detailModal{$pegawai['id']}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                echo "<div class='modal-dialog' role='document'>";
                echo "<div class='modal-content'>";
                echo "<div class='modal-header'>";
                echo "<h5 class='modal-title' id='exampleModalLabel'>Detail Pegawai</h5>";
                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                echo "<span aria-hidden='true'>&times;</span>";
                echo "</button>";
                echo "</div>";
                echo "<div class='modal-body'>";
                echo "ID Pegawai: {$pegawai['id']}<br>";
                echo "Nama Pegawai: {$pegawai['nama']}<br>";
                echo "Jabatan Pegawai: {$pegawai['jabatan']}<br>";
                echo "Kontak Pegawai: {$pegawai['kontak']}<br>";
                echo "Alamat Pegawai: {$pegawai['alamat']}<br>";
                echo "Nomor Rekening Pegawai: {$pegawai['norek']}<br>";
                echo "Status Kerja: {$pegawai['status']}<br>";
                // Tambahkan informasi lainnya sesuai kebutuhan
                echo "</div>";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Tutup</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


@endsection