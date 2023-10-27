<?php
session_start();
include 'php/userconfig.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
// Check if the session variables are set
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

// Clear the session variables
unset($_SESSION['username']);
unset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
</head>

<body>

<div class="center-container">
    <img src="css/img/title.png" alt="">
</div>
<div class="container">
    <div class="wrapper">
        <div class="title mt-2"><h2>Register Account</h2></div>
        <form action="" method="post">
            <div class="row d-flex justify-content-center">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="text" class="form-control" name="email" id="email" placeholder="Username" required>
            </div>
            <div class="row d-flex justify-content-center">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="showPassword" id="remember"> Show Password
                </label>
            </div>
            <div class="row d-flex justify-content-center">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="showPassword" id="remember"> Show Password
                </label>
            </div>
        <!-- Sign In End -->
        
             <div class="d-flex justify-content-center">
             <div class="d-flex justify-content-center">
             <button type="submit" class="btn btn-lg mt-1" style="background-color: #26DB23; color: #ffffff;" >Create Account</button>
             </div>

             </div>
             </form>
             
             <div class="d-flex justify-content-center">
             <button type="button" class="btn btn-lg" style="background-color: #E5E4E2; color: black;">
               <img src="css/img/google.png" alt="Google Logo" style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
             </button>
             </div>
             
             <div class="d-flex justify-content-center mt-1 text-muted mt-3">
                <a style="font-size:18px;">Already have a Account?</a>
                <a href="index.php" style="font-size:18px; color: #26DB23; margin-left: 10px;">Login</a>
            </div>
                
             </div>

             
        </div>

    </div>
</div>
<script>
  const fullNameInput = document.querySelector('input[name="fullname"]');
      fullNameInput.addEventListener('keypress', function(event) {
          const key = event.key;
          const regex = /[a-z A-Z]/;
      if (!regex.test(key)) {
            event.preventDefault();
        }
  });
</script>
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "register.php";
      }
    }
    </script>
    <script>
        document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
    } else {
       document.getElementById('password').type = "password";
    }
};
    </script>
</body>
</html>
