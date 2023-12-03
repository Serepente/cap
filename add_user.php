<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="cap/dash.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
  <script src="https://kit.fontawesome.com/f39cbeddf2.js" crossorigin="anonymous"></script>
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Raleway", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i
        class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Municipality of Amadeo, Cavite</span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="img/logopng.png" class="w3-circle w3-margin-right" style="width:105px">
      </div>
      <div class="w3-col s8 w3-bar">
        <h4>
          <center><span>Welcome, <strong>Admin</strong></span></center><br>
          <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
          <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
          <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </h4>
      </div>
    </div>
    <hr>

    <div class="w3-bar-block">
      <h4>
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
          onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Dashboard</a>
        <a href="ad_programs.php" class="w3-bar-item w3-button w3-padding"><i
            class="fa-solid fa-hand-holding-heart"></i> Programs</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-landmark-flag"></i> Barangay</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-print"></i> Report</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-database"></i> Backup</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-clock-rotate-left"></i> Logs</a>
        <a href="adminset.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Admin
          Settings</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right-from-bracket"></i>
          Logout</a><br>
      </h4>
    </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
    title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
</header>


<div class="container mt-5">

      

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1>Add User</h1>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">

                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                     <label for="exampleFormControlSelect1">Role</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Admin</option>
                            <option>User Secretary</option>
                            <option>User Official</option>
                            
                         </select>
                     </div>
                    <div class="mb-3">
                        <button type="submit" name="save_senior" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
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