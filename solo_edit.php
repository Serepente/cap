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
                        <h4>SoloParents Form Edit 
                            <a href="ad_beneficiaries.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $solo_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM soloform WHERE id='$solo_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $solo = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codesolo.php" method="POST">
                                    <input type="hidden" name="solo_id" value="<?= $solo['id']; ?>">

                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" value="<?=$solo['lastname'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" value="<?=$solo['firstname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Birthday</label>
                                        <input type="text" name="birthday" value="<?=$solo['birthday'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="age" value="<?=$solo['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sex</label>
                                        <input type="text" name="sex" value="<?=$solo['sex'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Monthly Income</label>
                                        <input type="text" name="month" value="<?=$solo['month'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Place of Birth</label>
                                        <input type="text" name="place" value="<?=$solo['place'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Total Monthy Income</label>
                                        <input type="text" name="totalmonth" value="<?=$solo['totalmonth'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$solo['address'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Education</label>
                                        <input type="text" name="educ" value="<?=$solo['educ'];?>" class="form-control">
                                    </div>
									<div class="mb-3">
                                        <label>Occupation</label>
                                        <input type="text" name="occ" value="<?=$solo['occ'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_solo"class="btn btn-primary">								 
										
                                          <span style="color:black;">  Update</span>
													 
									
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