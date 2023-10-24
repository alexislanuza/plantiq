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
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="scripts/google-api.js"></script>
</head>
<body>
<div class="center-container">
    <img src="css/img/title.png" alt="Your Image">
</div>
<div class="container">
    <div class="wrapper ">
        <div class="title mt-2"><h2>Login to your Account</h2></div>
        <form action="php/user_signin.php" method="post">
            <div class="row d-flex justify-content-center">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value = "<?php if(isset($_COOKIE['fnbkn'])) echo $_SESSION['fnbkn']; ?>" required>
            </div>
            <div class="row d-flex justify-content-center">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['qbtuyqug'])) echo $_SESSION['qbtuyqug']; ?>" required>
            </div>
            <div class="d-flex justify-content-center">
                <label>
                    <input type="checkbox" name ="remember" <?php if(isset($_COOKIE['fnbkn'])){echo "checked='checked'"; } ?> id="remember"> Remember me
                </label>
                <a href="forgotpass.php" class="forgot-password d-flex justify-content-end">Forgot password?</a>
            </div>
        <!-- Sign In End -->
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
             <div class="d-flex justify-content-center">
             <button type="submit" class="btn btn-lg" style="background-color: #26DB23; color: #ffffff;" >Log In</button>

             </div>
             </form>
             <div class="title"><h5>or</h5>
             
             <div class="d-flex justify-content-center">
             <button type="button" onclick="signIn()" class="btn btn-lg" style="background-color: #E5E4E2; color: black;">
               <img src="css/img/google.png" alt="Google Logo" style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
             </button>
             </div>
             
             <div class="d-flex justify-content-center mt-3">
                <a style="font-size:15px;">Don't have Account?</a>
                <a href="register.php" style="font-size:15px; color: #26DB23; margin-left: 10px;">Create Account</a>
            </div>
                
             </div>

             
        </div>

    </div>
</div>
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "index.php";
      }
    }
    </script>
</body>
</html>
