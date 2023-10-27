<?php
session_start();
include 'php/userconfig.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">
<link rel="stylesheet" href="path/to/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts/google-api.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 <script src="path/to/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/8f7ec986ad.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

</head>
<body>

<div class="center-container">
    <img src="css/img/title.png" alt="">
</div>
<div class="container">
    <div class="wrapper ">
        <div class="title mt-2"><h2>Forgot Password</h2></div>
        <form action="php/user_signin.php" method="post">
            <div class="row d-flex justify-content-center">
                <input type="text" class="form-control" name="username" id="username" placeholder="juandelacruz@gmail.com" required>
            </div>
            
            <div class="d-flex justify-content-center">
            <label style="font-size:20px; font-weight:500;" ><span style="color: #26DB23;">Email</span>/Enter OTP/New Password</label>
                
            </div>
 
             <div class="d-flex justify-content-center">
             <button type="submit" class="btn btn-lg mt-4" style="background-color: #26DB23; color: #ffffff;" >Send OTP</button>

             </div>
             </form>
             
             <div class="d-flex justify-content-center mt-3" >
                <a style="font-size:15px;  font-weight:bold;">Click here if you didn't receive a code:</a>
                <a href="register.php" style="font-size:15px; color: #26DB23; margin-left: 10px;  font-weight:bold;">Resend</a>
            </div>
             <div class="d-flex justify-content-center mt-3">
             <a style="font-size:15px;  font-weight:bold;">You remember your account?</a>
                <a href="register.php" style="font-size:15px; color: #26DB23; margin-left: 10px;  font-weight:bold;">Log In</a>
            </div>
                
             </div>

             
        </div>

    </div>
</div>


<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "forgotpass.php";
      }
    }
    </script>
</body>
</html>
