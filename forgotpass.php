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
<link rel="stylesheet" href="path/to/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 <script src="path/to/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/8f7ec986ad.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" href="css/home.css">
</head>
<body>
<br><br>
<div class="container">
    <div class="card shadow">
        <h1 class="mx-auto">Forgot Password</h1>
        <div class="card-body">
            <form action="php/email_check.php" method="post">
            <input type="email" name="email" class="form-control form-control-lg my-4" placeholder="juandelacruz@gmail.com" required>
            <center><label><span style="color: green">Email</span>/Enter OTP/New Password</label></center>
            <center><button type="submit" class="btn btn-success btn-lg mt-3">Send OTP</button></center>
            </form>
            <?php
                // Display error messages if they were passed in the URL
                if (isset($_GET['errors'])) {
                    $errors = explode(',', $_GET['errors']);
                    foreach ($errors as $error) {
                        echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'ERROR',
                                text: '$error'
                            });</script>";

                }
                unset($_GET['errors']);
                }
            ?>
        </div>
        <div class="mx-auto">
            <label style="color: grey">Click here if you didn't receive a code:</label>  <a href="" style="color: green">Resend</a>
        </div><br><br><br>
        <div class="mx-auto">
            <label style="color: grey">You remember your account?</label>  <a href="login.php" style="color: green">Login</a>
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
