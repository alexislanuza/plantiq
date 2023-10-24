<!DOCTYPE html>
<html lang="en">
<head>
<!-- http://fortawesome.github.io/Font-Awesome/get-started/ -->
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="css\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<style>
body {
  margin: 0;
  padding: 0;
  overflow: auto; /* You can use 'hidden' or 'scroll' as well */
}

.nav__link {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  flex-grow: 1;
  min-width: 50px;
  overflow: hidden;
  white-space: nowrap;
  font-family: sans-serif;
  font-size: 13px;
  color: black;
  text-decoration: none;
  font-weight: bolder;
  -webkit-tap-highlight-color: transparent;
  transition: background-color 0.1s ease-in-out;
}

.nav__link:hover {
  background-color: #eeeeee;
}

.nav__link--active {
  color: #26DB23;
}

.nav__icon i {
  font-size: 100%;
}

/* Hide the scrollbar on mobile */
@media (max-width: 768px) {
  ::-webkit-scrollbar {
    width: 0;
  }
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: transparent; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: transparent; 
}

.content {
  background-color: #eeeeee;
  padding: 20px;
}

/* Make the navigation responsive */
.nav {
  position: fixed;
  width: 100%;
  height: 80px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
  background-color: #ffffff;
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  flex-direction: row;
}

.nav__link {
  flex: 1;
  min-width: 50px;
  overflow: hidden;
  white-space: nowrap;
  font-family: sans-serif;
  font-size: 13px;
  color: black;
  text-decoration: none;
  font-weight: bold;
  -webkit-tap-highlight-color: transparent;
  transition: background-color 0.1s ease-in-out;
}

/* Reduce the font size and padding for mobile */
@media (max-width: 768px) {
  .nav {
    height: 60px;
  }
  
  .nav__link {
    font-size: 10px;
    padding: 5px;
  }
}

.nav__link:hover {
  background-color: #eeeeee;
}

.nav__link--active {
  color: #26DB23;
}

.top  {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color: #eeeeee;
}

/* Style for the dropdown button and content */
.dropdown {
  display: inline-block;
  
}

.dropbtn {
  margin-top: 10px;
  color: #333;
  border: solid black 2px;
  width: 180px;
  font-size: 20px;
  border-radius: 5px;
  margin-right: 1150px; /* Remove the large margin for mobile */
}

/* Adjust the dropdown width for mobile */
@media (max-width: 768px) {
  .dropbtn {
    margin-right: 80px; /* Make it full-width on mobile */
  }
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #eeeeee;
  color: black;
  z-index: 1;
  width: 180px;
  border: 1px solid #555;
  border-radius:5px;

}

/* Adjust the dropdown content width for mobile */
@media (max-width: 768px) {
  .dropdown-content {
    width: 80%; /* Make it full-width on mobile */
    
  }
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}

.dropdown-content a:hover {
  border-radius: 5px;
  background-color: white;

}

/* Show the dropdown content when the dropdown button is clicked */
.show {
  display: block;
}

.fa {
  margin-top: 10px;
  font-size: 20px;
}

span {
  font-size: 20px;
  margin-top: 5px;
}

.i {
  font-size: 20px;
}

.icon {
  margin-top: 10px;
  font-size: 20px;
}

/* Adjust the styles for mobile screens */
@media (max-width: 768px) {
  .nav {
    height: 60px; /* Reduce the navbar height */
  }

  span {
  font-size: 10px;
  margin-top: 5px;
}

}

</style>

<body>

<div class="top fixed-top">
  <div class="dropdown ms-4">
  <button onclick="toggleDropdown()" class="dropbtn">Device 1  <i class="fa-solid fa-caret-down ms-2"></i></button>

      <div id="myDropdown" class="dropdown-content">
        <a href="#">Device 2</a>
        <a href="#">Add Device <i class="fa-solid fa-plus ms-1"></i></a>
      </div>
  </div> 
    <i class="icon fa-regular fa-bell me-3"></i>
    <i class="icon fa-solid fa-arrow-right-from-bracket "></i> 

  
</div>


 
  <!-- BOTTOM NAVBAR -->
  <nav class="nav fixed-bottom">
  <a href="home.php" class="nav__link nav__link--active">
    <i class="fa fa-fw fa-home" ></i>
    <span class="nav__text">Home</span>
  </a>
  <a href="findplant.php" class="nav__link ">
  <i class="fa fa-solid fa-book-bookmark"></i>
    <span class="nav__text">Find Plants</span>
  </a>
  <a href="adddevice.php" class="nav__link">
  <i class="fa fa-solid fa-plus"></i>
    <span class="nav__text">Add Device</span>
  </a>
  <a href="profile.php" class="nav__link">
  <i class="fa fa-regular fa-user"></i>
      <span class="nav__text">Profile</span>
  </a>
  <a href="settings.php" class="nav__link">
  <i class="fa fa-solid fa-gear"></i>
    <span class="nav__text">Settings</span>
  </a>
   </nav>

   <script>
// Close the dropdown when the page is initially loaded
document.getElementById("myDropdown").style.display = "none";

function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    }
  }
}
</script>
</body>


</html>