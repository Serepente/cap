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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Senior View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <p class="form-control">
                                            <?=$senior['lastname'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>First Name</label>
                                        <p class="form-control">
                                            <?=$senior['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Birthday</label>
                                        <p class="form-control">
                                            <?=$senior['birthday'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <p class="form-control">
                                            <?=$senior['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sex</label>
                                        <p class="form-control">
                                            <?=$senior['sex'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Blood Type</label>
                                        <p class="form-control">
                                            <?=$senior['blood'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Place of Birth</label>
                                        <p class="form-control">
                                            <?=$senior['place'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Civil Status</label>
                                        <p class="form-control">
                                            <?=$senior['status'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$senior['address'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Education</label>
                                        <p class="form-control">
                                            <?=$senior['educ'];?>
                                        </p>
                                    </div>
									<button id="print-button">Print</button>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
	</script>
	<script>
	document.getElementById("print-button").addEventListener("click", function() {
    window.print();
});
	</script>
</body>
</html>	
</html>