<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIKOST | SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing.css">
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row">
            <!-- Left Page -->
            <div class="col-md-8 col-lg-6 position-absolute start-0 top-0"  id="formsignup">
                
                <div class="mb-4 text-center" style="margin-top:70px;">
                    <h5 class="login-heading mb-3 mt-4 fw-bold" style="font-size: 20px; font-weight: 600;">Create your Account</h5>
                </div>

                <!-- From SignUp -->
                <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                      <div class="left-page col-ms-9 col-lg-8 mx-auto">

                        <form action="{{route('signup-user')}}" method="POST" class="row g-3">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif

                            @csrf
                            <div class="col-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your Name here" value="{{old('name')}}" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your Email here" value="{{old('email')}}" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Passowrd here" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>

                            <div class="col-md-2" style="margin-right: 50px;">
                                <label for="inputAge" class="form-label">Age</label>
                                <input type="number" class="form-control" name="Age" placeholder="20" value="{{old('Age')}}" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                                <span class="text-danger">@error('Age') {{$message}} @enderror</span>
                            </div>

                            <div class="col-md-6" style="margin-left: 100px;">
                                <div class="col">

                                    <div class="row">
                                        <label for="inputGender" class="form-label">Gender</label>
                                    </div>

                                    <div class="row">
                                        <div class="col form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" value="male">
                                            <label class="form-check-label" for="gender1">Male</label>
                                        </div>
                                        <div class="col form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" value="female">
                                            <label class="form-check-label" for="gender2">Female</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">@error('Gender') {{$message}} @enderror</span>

                                </div>
                            </div>

                            <div class="button-login d-grid mb-5">
                                <button class="btn btn-lg btn-primary text-white btn-login fw-bold" type="submit" style="background-color:#2895F7; font-size: 15px;">Sign-Up</button>
                            </div>
                        </form>

                        <div class="mb-4">
                          <p style="color: #B0BAC3; font-size: 18px; font-weight: 500; text-align: center;">- OR -</p>
                        </div>

                        <div>
                          <p style="color: #7C838A; font-size: 15px; font-weight: 400; text-align: center;">Already have an account? <a href="/login" class="primary-text fw-medium">Login</a></p>
                        </div>

                        </div>
                    </div>
                </div>
              </div>

            </div>

            <!-- Right Page -->
            <div class="col-md-6 position-absolute bottom-0 end-0 top-0">
                
                <h2 class="position-absolute end-0 top-0" style ="margin-right: 80px; margin-top:70px;"><strong>RIKOST</strong></h2>  
                <img src="img/signup.png" class="img-fluid" width="420px" style="margin-top: 110px; margin-left:120px;">
                <p class="text-title fw-semibold text-center fw-bold" style="color: #000; margin-top: 50px; font-size: 20px;">Unlock Your Homely Heaven <br>Register for RIKOST!</p>

            </div>
            

        </div>
    </div>
                  
</body>
</html>