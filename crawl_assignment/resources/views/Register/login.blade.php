<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

    <title>Login #2</title>
  </head>
  <style>
    .formbg{
      background-image: url(images/bgimg2.png);
    background-repeat: no-repeat;
}
.rotatex1{
  transform: rotateY(180deg);
}
.tick{
  height: 65px;
  width: 65px;
  border-radius: 50%;
  display: flex;
  background:rgb(255, 102, 0);
  justify-content: center;
  align-items: center;
}

.button {
  background-color: #fd7e14;
  border: none;
  color: white;
  padding: 10px 184px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:10px;
}
label{
  font-weight: bold;
}
  </style>
  <body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-center" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="font-weight: bold;">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Book Puja</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Astrology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="#" style="color:#fb771a;border: 1px solid #fb771a;border-radius: 8px;padding: 5px;">Live Darshan</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
      
      </header>

  <div class="d-lg-flex half" style="flex-direction: row-reverse; padding-top: 54px;">
    <div class="bg order-1 order-md-2" style="background:rgb(255, 102, 0)">
      <div class="d-flex justify-content-center align-items-center" style="height:100%;">
        <img src="{{ asset('Images/img1.png')}}" style="padding-bottom: 120px;    " alt="">
      </div>
      <div>
        <h2 style="display: flex; justify-content: center; margin-top: -200px; color:white;">Lorem ipsum dolor sit <br> amet, consectetur </h2>
        <p style=" color:white; text-align: center; font-weight:bold;">Lorem ipsum dolor sit amet, consectetur</p>
      </div>
    </div>
    <div class="contents order-2 order-md-1"style=" background: seashell;">
      <div class="container formbg rotatex1">
        <div class="row rotatex1 align-items-center justify-content-center">
          <div class="col-md-7">
            <h5 style="color:orange">Your logo</h5>
            <h3 id='headers'>Login</h3>
            <p id="chg" style="color:black"></p>
            <div class="myLogin">
            <form action=""  id="myForm" name="myForm" method="post">
              
              <div class="form-group last mb-3">
                <label for="mobile">Mobile number</label>
                <input required type="number" class="form-control" name='mobile' maxlength="10" placeholder="Enter mobile number " id="mobile" required>
                <p id='alert' style="display:none; color:red;"  >For reset mobile no. is required</p>
                <p id='mob' style="display:none; color:red;"  >Mobile is required</p>

              </div>

              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input required type="password" class="form-control" maxlength="8" name="password" value="" placeholder="Enter your Password" id="password">
                <p id='pass' style="display:none; color:red;"  >Password is required</p>

              </div>

             
              
               <div class="d-flex mb-3 align-items-center">
                {{-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label> --}}
                <span class="ml-auto"><a href="#" id="reset" class="forgot-pass" style="color:aquamarine">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log in" id="btn-login"  class="button">
              
              <p class="bottomtext mt-2" style="font-weight:bold">or continue with </p>
              <div class="row">
                <div class="col d-flex justify-content-center">Google</div>
                <div class="col d-flex justify-content-center">Facebook</div>
              </div>
              <p class="bottomtext mt-2" style="font-weight:bold">Don't have an account yet? <a href="/" class="loginlink" style="font-weight:bold">Sign in</a></p>
            </form>
          </div>
            <form class="change_pass" id="change_pass" name="change_pass" method="post" style="display:  none">
              <div class="form-group last mb-3">
                <label for="password">New Password</label>
                <input required type="password" class="form-control" maxlength="8" name="password_reset" value="" placeholder="Enter your Password" id="password_reset">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Confirm Password</label>
                <input required type="password" class="form-control" maxlength="8" name="confirm_password" value="" placeholder="Enter your Password" id="confirm_password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                
                <input type="submit" value="Reset Password" id="btn-reset" class="button"style="
                width: -webkit-fill-available;
            "  >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>


  
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body" >
        <div class="row justify-content-center" style="margin-top: 175px; ">
          <div class="tick">
            <i class="fa fa-check" style="font-size:48px;color:#fff"></i>
          </div>
          
        </div>
        <h5 style="font-weight:bold; text-align: center ; margin-top: 40px; ">Password had been change successfully</h5>
          You have just reset your password click on button below to log in
      </div>
      <div class="modal-footer" style="
      align-self: center;">
        <a href="welcome" class="button">Login  </a>
      </div>
    </div>
  </div>
</div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>