<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIKOST | LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing.css">
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row">
            <!-- Left Page -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box">

              <h2 class="position-absolute start-0 top-0"><strong>RIKOST</strong></h2>  
              <img src="img/login.png" class="img-fluid" width="450px" style="margin-top: 200px;">
              <p class="text-title fw-semibold text-center fw-bold" style="color: #000; margin-top: 30px; font-size: 18px;">Gateway to Comfort: Step into Your RIKOST!</p>

            </div> 

            <!-- Right Page -->
            <div class="col-md-8 col-lg-6 position-absolute bottom-0 end-0 top-0" id="formlogin">

              <div class="mb-3 text-center" style="margin-top:100px;">
                <img src="/images/ideaforgeXfps.svg" alt="" width="200" class="ideaforgeXfps">
                <h5 class="login-heading mb-3 mt-4 fw-bold" style="font-size: 20px; font-weight: 600;">Login your Account</h5>
              </div>
              
              <!-- Form Login -->
              <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                      <div class="left-page col-ms-9 col-lg-8 mx-auto">
                  
                        <form>
                          <div class="mb-4">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your Email here" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                          </div>

                          <div class="mb-4">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Password here" style="border-radius: 8px; background: rgba(176, 186, 195, 0.40);">
                          </div>

                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="remember-me form-check-label second-text" for="rememberPasswordCheck">Remember me</label>
                          </div>

                          <div class="button-login d-grid mb-5">
                            <button class="btn btn-lg btn-primary text-white btn-login fw-bold" type="submit" style="background-color:#2895F7; font-size: 15px;">Login Here</button>
                          </div>
                        </form>

                        <div class="mb-4">
                          <p style="color: #B0BAC3; font-size: 18px; font-weight: 500; text-align: center;">- OR -</p>
                        </div>

                        <div>
                          <p style="color: #7C838A; font-size: 15px; font-weight: 400; text-align: center;">Create an account? <a href="" class="primary-text fw-medium">Sign-Up</a></p>
                        </div>
                        
                      </div>
                    </div>
                </div>
              </div>

            </div>

        </div>
    </div>
                  
</body>
</html>