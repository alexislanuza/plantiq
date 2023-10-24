<!DOCTYPE html>
<html>
<head>
<title>Add Device</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="dropdown d-flex float-right mt-2">
    <button class="btn" type="button" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-sign-out fa-2x"></i>
    </button>
</div>

<div class="dropdown float-right mt-2">
    <button class="btn dropdown-toggle" type="button" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-bell fa-2x"></i>
        <span  class="position-absolute translate-middle badge rounded-pill bg-danger "> 99+</span>
    </button>
</div>


 <button class="btn btn-default dropdown-toggle custom-button mt-2 mx-2 " type="button" data-toggle="dropdown">
    <i class="fa fa-retweet"></i> Device 
</button>

<!-- Start -->
<br><br>
<div class="card shadow mx-5">
  <div class="card-body">
    <center><h1 class="card-title">Scan QR or Connect</h1></center>
        <div>
            <div class="input">
                <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="seeButton" required>
            </div>
        </div>
        <div>
            <a href="adevice1.php">
                <center><button class="btn btn-success btn-lg mt-3">Connect</button></center>
            </a>
        </div>
  </div>
</div>

<div class="navbar">
  <a href="home.php">
    <i class="fa fa-home" style="font-size: 24px;"></i><br> Home
  </a>
  <a href="findplant.php" >
    <i class="fa fa-leaf" style="font-size: 24px;"></i><br> Find Plants
  </a>
  <a href="adddevice.php" class="active">
    <i class="fa fa-plus" style="font-size: 24px;"></i><br> Add Device
  </a>
  <a href="#contact">
    <i class="fa fa-user" style="font-size: 24px;"></i><br> Profile
  </a>
  <a href="#contact">
    <i class="fa fa-cog" style="font-size: 24px;"></i><br> Settings
  </a>
</div>

<script>
    document.getElementById('seeButton').addEventListener('click', function() {
        var passwordInput = document.getElementById('passwordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>

</body>
</html>
