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
<div class="container">
  <div class="card shadow mx-2">
    <div class="card-body">
      <div class="form mb-3">
          <input type="text" class="form-control form-control-lg" placeholder="Name of Device">
      </div>
      <div class="input-group date mb-3" data-provide="datepicker">
          <input type="text" class="form-control form-control-lg" placeholder="Date Planted">
          <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
          </div>
      </div>
      <div class="mb-3 form-floating">
        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="4" placeholder="Plants in this device"></textarea>
      </div>
      <center><Button class="btn btn-success btn-lg mt-2">Add Device</Button></center>  
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

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
<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy', // You can change the date format as needed
            autoclose: true
        });
    });
</script>
</body>
</html>
