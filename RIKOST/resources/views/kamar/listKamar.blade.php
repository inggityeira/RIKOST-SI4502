@extends('layouts.main')

@section('title', 'RIKOST | LIST KAMAR')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('content')
<!-- masukin isi content disini -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Kamar</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Informasi Kamar</h2>

  <?php
    // Data Kamar
    $totalLantai = 5;
    $kamars = array();

    // Generate data kamar
    for ($lantai = 1; $lantai <= $totalLantai; $lantai++) {
      for ($nomorKamar = 1; $nomorKamar <= 20; $nomorKamar++) {
        $kamars[] = array(
          'nomor' => $nomorKamar,
          'lantai' => $lantai,
          'jenis' => 'Standar'
        );
      }
    }

    // Menampilkan informasi kamar
    foreach ($kamars as $kamar) {
      echo '<div class="card mt-3">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">Nomor Kamar: ' . $kamar['nomor'] . '</h5>';
      echo '<p class="card-text">Lantai: ' . $kamar['lantai'] . '</p>';
      echo '<p class="card-text">Jenis Kamar: ' . $kamar['jenis'] . '</p>';
      echo '<button class="btn btn-primary" data-toggle="modal" data-target="#detailModal' . $kamar['lantai'] . $kamar['nomor'] . '">Detail Kamar</button>';
      echo '</div>';
      echo '</div>';
      
      // Modal untuk detail kamar
      echo '<div class="modal fade" id="detailModal' . $kamar['lantai'] . $kamar['nomor'] . '" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel' . $kamar['lantai'] . $kamar['nomor'] . '" aria-hidden="true">';
      echo '<div class="modal-dialog" role="document">';
      echo '<div class="modal-content">';
      echo '<div class="modal-header">';
      echo '<h5 class="modal-title" id="detailModalLabel' . $kamar['lantai'] . $kamar['nomor'] . '">Detail Kamar ' . $kamar['nomor'] . ' Lantai ' . $kamar['lantai'] . '</h5>';
      echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
      echo '<span aria-hidden="true">&times;</span>';
      echo '</button>';
      echo '</div>';
      echo '<div class="modal-body">';
      echo '<p>Jenis Kamar: ' . $kamar['jenis'] . '</p>';
      // Tambahkan informasi detail kamar lainnya sesuai kebutuhan
      echo '</div>';
      echo '<div class="modal-footer">';
      echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
  ?>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



@endsection