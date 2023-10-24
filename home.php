<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
<br>

<div class="container mt-5">
        <div class="calendar">
            <div class="calendar-header d-flex">
                <h2>October 2023 <button class="btn btn-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button></h2>
            </div>
            <div class="row">
                <div class="col day">1</div>
                <div class="col day">2</div>
                <div class="col day btn-success">3</div>
                <div class="col day btn-success">4</div>
                <div class="col day btn-success">5</div>
                <div class="col day">6</div>
                <div class="col day">7</div>
            </div>
            <div class="row">
                <!-- Add more days here -->
            </div>
        </div>
    </div>

<br>
    <ul class="dropdown-menu">
        <li><a href="#"><span class="status-indicator status-green"></span> Device 1</a></li>
        <li><a href="#"><span class="status-indicator status-red"></span> Device 2</a></li>
    </ul>
</div>

<div class="card mx-5 my-5">
  <h2 class="text-success mx-auto">Transfer Plant in</h2>
  <h2 class="display-1 mx-auto"> 3 Days</h2>
  <div class="circular-progress float-end mx-auto " data-inner-circle-color="lightgrey" data-percentage="80" data-progress-color="green" data-bg-color="lightgrey">
    <div class="inner-circle"></div>
      <p class="percentage fw-bold">0%</p>
  </div>
  <h2 class="text-secondary mx-auto">3 days span to transfer your plant</h2>
</div>

<div class="container">
  <div class="card">
    <h2>Device 1 <span class="see-more-icon"><i class="fa fa-ellipsis-h"></i></span></h2>
    <br>
<div class="container1">
  <div class="light">
    <h4>Date Planted:</h4>
    <h4>October 3, 2023</h4>
    <h4>Date of Transfer: </h4>
   <h4>October 24, 2023</h4>
    <br>
    <h4> Today's Schedule</h4>
    <br>
    <h4> 9:30am October 22, 2023</h4>
     <br>
    <ul class="bullet-list">
      <li>Pechay</li>
      <li>Tomato</li>
      <li>Chili</li>
      <li>Onions</li>
      <li>Carrots</li>
    </ul>
  </div>

</div>

</div>

    

<div class="navbar">
  <a href="home.php"  class="active">
    <i class="fa fa-home" style="font-size: 24px;"></i><br> Home
  </a>
  <a href="findplant.php">
    <i class="fa fa-leaf" style="font-size: 24px;"></i><br> Find Plants
  </a>
  <a href="adddevice.php">
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
  const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});
</script>
</body>
</html>
