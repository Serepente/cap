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
                        <h4>Solo View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <p class="form-control">
                                            <?=$solo['lastname'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>First Name</label>
                                        <p class="form-control">
                                            <?=$solo['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Birthday</label>
                                        <p class="form-control">
                                            <?=$solo['birthday'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <p class="form-control">
                                            <?=$solo['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sex</label>
                                        <p class="form-control">
                                            <?=$solo['sex'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Monthly Income</label>
                                        <p class="form-control">
                                            <?=$solo['month'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Place of Birth</label>
                                        <p class="form-control">
                                            <?=$solo['place'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Total Monthly Income</label>
                                        <p class="form-control">
                                            <?=$solo['totalmonth'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$solo['address'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Education</label>
                                        <p class="form-control">
                                            <?=$solo['educ'];?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Occupation</label>
                                        <p class="form-control">
                                            <?=$solo['occ'];?>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	document.getElementById("print-button").addEventListener("click", function() {
    window.print();
});
	</script>
</body>
</html>	
</html>