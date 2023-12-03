<?php
session_start();
if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
  
  } else {
  
    header("Location: index.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Burial Assistance Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Office of the Burial Assistance
                             <h5>Registration Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="burial_code.php" method="POST" enctype="multipart/form-data">
						
                             <!-- ... (Existing form fields) ... -->
							 <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
							<div class="mb-3">
														 
								<label>Date of Birth</label>
								<input type="date" id="birthday" name="birthday" class="form-control" required min="1903-01-01" max="<?php echo date('Y-m-d'); ?>" value="2023-01-01">
							</div>
						</div>
						<div class="col">
							<div class="mb-3">
								<label>Age</label>
								<input type="text" id="age" name="age" class="form-control" required>
							</div>
						</div>
                            </div>
                               <div class="row">
                                <div class="col">
							<div class="mb-3">
								<label>Date of Death</label>
								<input type="date" id="dateOfDeath" name="dateOfDeath" class="form-control" required min="1903-01-01" max="<?php echo date('Y-m-d'); ?>" value="2023-01-01">
							</div>
								</div>
							<div class="col">
								<div class="mb-3">
							 <label>Sex</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Female" required>
                                            <label class="form-check-label" for="inlineRadio1">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Male" required>
                                            <label class="form-check-label" for="inlineRadio2">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="Prefer not to say" required>
                                            <label class="form-check-label" for="inlineRadio3">Prefer not to say</label>
                                        </div>
								</div>
							</div>
                            </div>
                             <div class="mb-3">
                                <label>Personal Letter to Mayor</label>
                                <input type="file" name="letter_mayor" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Indigency of Claimant</label>
                                <input type="file" name="indigency" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Photocopy of Valid ID with 3 Signatures</label>
                                <input type="file" name="id_copy" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Funeral Contract</label>
                                <input type="file" name="funeral_contract" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Certified True Copy of Death</label>
                                <input type="file" name="certified_copy" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="apply_burial" class="btn btn-primary">Submit Burial Assistance Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
document.getElementById('birthday').addEventListener('change', function() {
    // Get the selected date of birth
    var birthDate = new Date(this.value);

    // Calculate the age
    var today = new Date();
    var age = today.getFullYear() - birthDate.getFullYear();

    // Check if the birthday for this year has already occurred
    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
        age--;
    }

    // Update the age input field
    document.getElementById('age').value = age;
});
</script>
</body>
</html>
