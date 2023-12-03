<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
   


   
<!DOCTYPE html>

<html>
<head>


	<title>project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="dashboard.css">
</head>
<body style="background-image: url(img/bgdash.jpg); background-repeat: no-repeat;background-position: center; background-size: cover; ">

    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
	  
		<div style="background-color: rgba(119, 139, 165, .7); border-radius: 30px;"> 
		
      	<form class=" shadow p-3 rounded"
      	      action="check-login.php" 
      	      method="post" 
      	      style="width: 450px;">
			  <center><img src="img/amadeo.png" style="height:200px;width:200px;"></img></center>
      	      <h1 class="text-center p-2" style="font-size:30px;"><b>Department of Social Welfare and Development Office</b></h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>	
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		  
		    <label for="username" 
		           class="form-label" style="font-size: 20px;"><b>Username</b></label>
		    <input type="text" 
		           name="username" 
		           class="form-control" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label" style="font-size: 20px;"><b>Password</b></label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  
			<div style="text-align: center;">
			
		  <button type="submit" 
		          class="btn btn-primary"> <center>LOGIN</button>
				  </div>
		</form>
		</div>
      </div>
	
</body>
</html>
<?php }else{
	header("Location: dashboard.php");
} ?>