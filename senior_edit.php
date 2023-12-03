<?php

require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>SeniorForm Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>SeniorForm Edit 
                            <a href="ad_beneficiaries.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $senior_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM seniorform WHERE id='$senior_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $senior = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="senior_id" value="<?= $senior['id']; ?>">

                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" value="<?=$senior['lastname'];?>" class="form-control">
                                    </div>
									 <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" value="<?=$senior['firstname'];?>" class="form-control">
                                    </div>
									
                                    <div class="mb-3">
                                        <label>Birthday</label>
                                        <input type="text" name="birthday" value="<?=$senior['birthday'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="age" value="<?=$senior['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sex</label>
                                        <input type="text" name="sex" value="<?=$senior['sex'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Blood Type</label>
                                        <input type="text" name="blood" value="<?=$senior['blood'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Place of Birth</label>
                                        <input type="text" name="place" value="<?=$senior['place'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Civil Status</label>
                                        <input type="text" name="status" value="<?=$senior['status'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$senior['address'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Education</label>
                                        <input type="text" name="educ" value="<?=$senior['educ'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_senior"class="btn btn-primary">								 
										
                                       Update
													 
									
                                        </button>
										 
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>