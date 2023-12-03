<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Senior Citizen</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="cap/dash.css">
<link rel="stylesheet" href="cap/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/f39cbeddf2.js" crossorigin="anonymous"></script>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}

html{
    scroll-behavior: smooth;
}

body{
    font-size: 100%;
    font-family: sans-serif;
}

div, section, span, ul, li, a, header{
    box-sizing: border-box;
}

/*css reset*/

header{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 20px 50px;
    align-items: center;
    position: fixed;
    z-index: 999;
}

#menu li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}

#menu li a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}

section{
    width: 100%;
    float: left;
    height: 150vh;
    position: relative;
}


#about{
    background-color:rgba(0,0,255,0.4);
}

#product{
     background-color: #B52B65;
}

#pricing{
     background-color: #3C2C3E;
}

#contact{
     background-color: #B52B65;
}

h1{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
}









</style>
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
    
  </header>  
    
    <section id="about"><h1><img src="img/senior.png"></img></h1></section>
    <section id="product"><h1></h1></section>
    <section id="pricing"><h1></h1></section>
    <section id="contact"><h1></h1></section>

</body>

</html>














