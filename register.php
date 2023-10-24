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
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
</head>
<body>
<div class="container mt-5  ">
    <div class="wrapper ">
        <div class="title mt-2"><h2>Register your Account</h2></div>
        <form action="php/sign_up.php" method="post">
            <div class="row d-flex justify-content-center">
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="<?php echo $fullname; ?>">
            </div>
            <div class="row d-flex justify-content-center">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>">
            </div>
            <div class="row d-flex justify-content-center">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div class="row d-flex justify-content-center">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="6">
            </div>
        
             <div class="d-flex justify-content-center">
             <button type="submit" name="signup" class="btn btn-lg my-1" style="background-color: #26DB23; color: #ffffff;" >Create Account</button>
             </form>
             </div>
             
             <div class="d-flex justify-content-center mt-1">
                <a style="font-size:15px;">Already have a Account?</a>
                <a href="index.php" style="font-size:15px; color: #26DB23; margin-left: 10px;">Login</a>
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
</body>
</html>
