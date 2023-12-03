<?php
session_start();
include 'code.php';
include 'codesolo.php';
include 'codepwd.php';
include 'burial_code.php';
include 'medical_code.php';
include 'disadvantaged_woman_code.php';


if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];

} else {

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Beneficiaries</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	<script src="https://kit.fontawesome.com/e3bf3b4374.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

body{
background: black;  
}
.card-box {
    position: relative;
    color: #fff;
    padding: 70px 10px 100px;
    margin:20px;
	border-radius: 8px;
    width: 300px;
	
	
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 0.5s;
    -webkit-transition: 0.5s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}

    </style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="cap/dash.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/f39cbeddf2.js" crossorigin="anonymous"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Municipality of Amadeo, Cavite</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/logopng.png" class="w3-circle w3-margin-right" style="width:105px">
    </div>
    <div class="w3-col s8 w3-bar">
      <h4><center><span>Welcome, <strong>Admin</strong></span></center><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a></h4>
    </div>
  </div>
  <hr>
 
  <div class="w3-bar-block"><h4>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Dashboard</a>
    <a href="ad_programs.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-hand-holding-heart"></i> Programs</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-landmark-flag"></i> Barangay</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-print"></i> Report</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-database"></i> Backup</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-clock-rotate-left"></i> Logs</a>
    <a href="adminset.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Admin Settings</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a><br></h4>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Application Form</b></h5>
  </header>  

  
  <div class="container">
    <div class="row justify-content-center"> <!-- Added justify-content-center class -->
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue" >
                <div class="inner">
                    <h3><?php echo $_SESSION['seniorRowCount'] ?></h3>
                    <h4>Senior Citizen 
					<br>Form</h4>
                </div>
                <div class="icon">
                   <i class="fa fa-clipboard" aria-hidden="true"></i>
                </div>
                <a href="form_senior.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3><?php echo $_SESSION['soloRowCount'] ?></h3>
                    <h4>Solo Parent <br>Form</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="form_soloparents.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3><?php echo $_SESSION['PWDRowCount'] ?></h3>
                    <h4>Person with Disabilities<br>Form</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <a href="form_pwd.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
     
    </div>
	<div class="row justify-content-center"> <!-- Added justify-content-center class -->
	
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3><?php echo $_SESSION['burialRowCount'] ?></h3>
                    <h4>Burial Assistance<br>Form</h4>
                </div>
                <div class="icon">
                   <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <a href="form_burial.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
			
			
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-warning ">
                <div class="inner">
                    <h3><?php echo $_SESSION['medicalRowCount'] ?></h3>
                    <h4>Medical Assistance<br>Form</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="form_assist.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
      
        
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-primary  ">
                <div class="inner">
                    <h3><?php echo $_SESSION['disadRowCount'] ?></h3>
                    <h4>Disadvantaged Women<br>Form</h4>
                </div>
                <div class="icon">
                   <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <a href="form_women.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
			
			
        </div>
    </div>
</div>




    
    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>