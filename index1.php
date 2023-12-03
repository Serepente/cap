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

    <title>Beneficiaries</title>
</head>
<body>
  
    <div class="container mt-4">
		
       

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>SeniorForm Details
							<div class="float-end">
                            <a href="form_senior.php" class="btn btn-primary btn-sm">Add</a>
							<a href="dashboard.php" class="btn btn-danger btn-sm">BACK</a>
							</div>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Last Name</th>
									<th>First Name</th>
                                    <th>Birthday</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Blood Type</th>
									<th>Place of Birth</th>
									<th>Civil Status</th>
									<th>Address</th>
									<th>Education</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM seniorform";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $senior_form)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $senior_form['id']; ?></td>
												<td><?= $senior_form['lastname']; ?></td>
												<td><?= $senior_form['firstname']; ?></td>
                                                <td><?= $senior_form['birthday']; ?></td>
                                                <td><?= $senior_form['age']; ?></td>
                                                <td><?= $senior_form['sex']; ?></td>
                                                <td><?= $senior_form['blood']; ?></td>
												<td><?= $senior_form['place']; ?></td>
												<td><?= $senior_form['status']; ?></td>
												<td><?= $senior_form['address']; ?></td>
												<td><?= $senior_form['educ']; ?></td>
                                                <td>
    <div class="btn-group">
        <a href="senior_view.php?id=<?= $senior_form['id']; ?>" class="btn btn-info btn-sm">View</a>
        <a href="senior_edit.php?id=<?= $senior_form['id']; ?>" class="btn btn-success btn-sm">Edit</a>
        <form action="code.php" method="POST">
            <button type="submit" name="delete_senior" value="<?= $senior_form['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
</td>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
				
				<br><br>
				<!-- Solo Parents -->
				<div class="card">
    <div class="card-header">
        <h4>Solo Parent Details 
            <div class="float-end">
                <a href="form_soloparents.php" class="btn btn-primary btn-sm">Add</a>
            </div>
        </h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Monthly Income</th>
                    <th>Place of Birth</th>
                    <th>Total Monthly Income</th>
                    <th>Address</th>
                    <th>Education</th>
                    <!-- Removed the extra column "Occupation" from the header -->
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM soloform";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $solo_form)
                        {
                            ?>
                            <tr>
                                <td><?= $solo_form['id']; ?></td>
                                <td><?= $solo_form['lastname']; ?></td>
                                <td><?= $solo_form['firstname']; ?></td>
                                <td><?= $solo_form['birthday']; ?></td>
                                <td><?= $solo_form['age']; ?></td>
                                <td><?= $solo_form['sex']; ?></td>
                                <td><?= $solo_form['month']; ?></td>
                                <td><?= $solo_form['place']; ?></td>
                                <td><?= $solo_form['totalmonth']; ?></td>
                                <td><?= $solo_form['address']; ?></td>
                                <td><?= $solo_form['educ']; ?></td>
                                <!-- Removed the extra column "Occupation" from the table body -->
                                <td>
                                    <div class="btn-group">
                                        <a href="solo_view.php?id=<?= $solo_form['id']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="solo_edit.php?id=<?= $solo_form['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <form action="codesolo.php" method="POST">
                                            <button type="submit" name="delete_solo" value="<?= $solo_form['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "<h5> No Record Found </h5>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>