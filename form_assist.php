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

    <title>Medical Assistance Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Office of the Medical Assistance
                            <h5>Registration Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="medical_code.php" method="POST" enctype="multipart/form-data">
						
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
                                            <label class="form-check-label" for "inlineRadio3">Prefer not to say</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Place of Birth</label>
                                        <input type="text" name="placeOfBirth" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Intent Letter Addressed to Mayor</label>
                                     <input type="file" name="letter_mayor" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Barangay Indigency of Claimant</label>
                                <input type="file" name="barangay_indigency" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Updated Prescription of Doctor/Medicines</label>
                                <input type="file" name="prescription" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Updated Lab Request</label>
                                <input type="file" name="lab_request" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Unpaid Hospital Bill</label>
                                <input type="file" name="hospital_bill" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>For Chemotherapy/Hemodialysis: Treatment Protocol</label>
                                <input type="file" name="treatment_protocol" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Authorization Letter of the Beneficiary</label>
                                    <input type="file" name="authorization_letter" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Photocopy of Valid ID of Claimant with 3 Signatures</label>
                                <input type="file" name="claimant_id" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Photocopy of Valid ID of Beneficiary with 3 Signatures</label>
                                <input type="file" name="beneficiary_id" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="apply_medical" class="btn btn-primary">Submit Medical Assistance Application</button>
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
