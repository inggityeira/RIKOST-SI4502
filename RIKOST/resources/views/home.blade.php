<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIKOST | HOME</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section id="main-content">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home"><h2><strong>RIKOST</strong></h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto me-5" style="font-size: 18px;">
                    <a class="nav-link active me-4" aria-current="page" href="/penyewa">Penyewa</a>
                    <a class="nav-link active me-4" aria-current="page" href="/kamar">Kamar</a>
                    <a class="nav-link active me-4" aria-current="page" href="/pembayaran">Pembayaran</a>
                    <a class="nav-link active me-4" aria-current="page" href="/laundry">Laundry</a>
                    <a class="nav-link active me-4" aria-current="page" href="{{ url('/kebersihan-admin') }}">Kebersihan</a>
                    <a class="nav-link active me-4" aria-current="page" href="/pegawai">Pegawai</a>
                    <a class="nav-link active me-4" aria-current="page" href="/tamu">Tamu</a>
                    <a class="btn btn-dark" style="background-color:#000000;" aria-current="page" href="/logout">Logout</a>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
        <div class="row">
            <div class="col">
                <section id='home'>
                    <p>PILIHAN TERBAIK ANAK KOST!</p>
                    <h1 >Kost ini Lebih dari<br> Sekedar Tempat<br> Tinggal</h1>
                </section>
            </div>
            <div class="col">
                <img src="img/home.png" alt="home" width="550px" id="icon">
            </div>
        </div>
        </div>

        <div class="card py-5 px-5" style="background: #F6DFB5; margin-top:50px; margin-left:90px; margin-right:90px; border-radius: 20px;">
            <h4><strong>ABOUT US</strong></h4>
            <h4 style="font-size:50px; margin-top:15px;"><strong>Availability of 7 Features</strong></h4>
            
            <div class="row" style="margin:30px;">

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <a href="/penyewa" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>PENYEWA</strong></h4>
                            </div>
                            <img src="img/fitur/penyewa.png" class="card-img-bottom" alt="Penyewa">
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="/kamar" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>KAMAR</strong></h4>
                            </div>
                            <img src="img/fitur/kamar.png" class="card-img-bottom" alt="Kamar">
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="/pembayaran" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>PEMBAYARAN</strong></h4>
                            </div>
                            <img src="img/fitur/pembayaran.png" class="card-img-bottom" alt="Pembayaran">
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="/laundry" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>LAUNDRY</strong></h4>
                            </div>
                            <img src="img/fitur/laundry.png" class="card-img-bottom" alt="Laundry">
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="card py-4 px-4" style="background: #F6DFB5; margin-top:100px; margin-left:90px; margin-right:90px; border-radius: 20px;">
            <h4><strong>ABOUT US</strong></h4>
            <h4 style="font-size:50px; margin-top:15px;"><strong>Availability of 7 Features</strong></h4>
            
            <div class="row" style="margin-left:20%; margin-top:30px; margin-bottom:30px;">

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <a href="{{ url('/kebersihan-admin') }}" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>KEBERSIHAN</strong></h4>
                            </div>
                            <img src="img/fitur/kebersihan.png" class="card-img-bottom" alt="Kebersihan">
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="/pegawai" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>PEGAWAI</strong></h4>
                            </div>
                            <img src="img/fitur/pegawai.png" class="card-img-bottom" alt="Pegawai">
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="/tamu" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;"><strong>TAMU</strong></h4>
                            </div>
                            <img src="img/fitur/tamu.png" class="card-img-bottom" alt="Tamu">
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="card " style="background: #F6DFB5; margin-top:100px; margin-bottom:80px; margin-left:90px; margin-right:90px; border-radius: 120px;">            
            <div class="row d-flex align-items-center" >
                <div class="col-sm-4">
                    <img src="img/fitur/home.png" width="450px">
                </div>
                <div class="col-sm-8 card-body">
                    <h4 style="font-size:40px; margin-right:30px;"><strong>Hard time deciding<br>what’s room best for you?</strong></h4>
                    <a href="/kamar" class="btn" style="margin-left:350px; margin-top:80px; background-color:white; color:black; font-size: 20px; border-radius: 150px;"><strong>Learn more</strong></a>
                </div>
            </div>
        </div>

    </section>

    <br>

    @include('layouts.footer')
    
</body>
</html>