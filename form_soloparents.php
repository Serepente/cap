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

    <title>Solo Parent Registration Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Application for Solo Parents
                            <h5>Registration Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codesolo.php" method="POST">
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
                                   <label>Occupation</label>
                                        <input type="text" name="occ" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="form-group">
                                        <label>Monthly Income</label>
                                        <select class="form-control" name="month" required>
                                            <option></option>
                                            <option>1,000-5,000</option>
                                            <option>6,000-10,000</option>
                                            <option>11,000-15,000</option>
                                            <option>More Than 16,000</option>
                                        </select>
                                    </div> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Total Family Monthly Income</label>
                                        <select name="totalmonth" class="form-control" required>
                                            <option></option>
                                            <option value="5,000-10,000">5,000-10,000</option>
                                            <option value="11,000-20,000">11,000-20,000</option>
                                            <option value="More Than 20,000">More Than 20,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <h5>RESIDENCE ADDRESS:</h5>
                            <div class="row">
								<div class="col">
                                    <div class="mb-3">
                                        <label>House No. Street</label>
                                        <input type="text" name="house" class="form-control" required>
                                    </div>
								</div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Barangay</label>
                                          <select class="form-control" name="barangay" required>
                                    <option></option>
                                    <option>None</option>
                                    <option>Banaybanay</option>
                                    <option>Bucal</option>
                                    <option>Dagatan</option>
                                    <option>Halang</option>
									<option>Loma</option>
                                    <option>Maitim I</option>
                                    <option>Maymangga</option>
                                    <option>Minantok Kanluran</option>
                                    <option>Pangil</option>
									<option>Balubo (Pob.)</option>
                                    <option>Barangay II (Pob.)</option>
                                    <option>Barangay III (Pob.)</option>
                                    <option>Barangay IV (Pob.)</option>
                                    <option>Barangay VI (Pob.)</option>
									<option>Barangay VII (Pob.)</option>
                                    <option>Barangay VIII (Pob.)</option>
                                    <option>Barangay IX (Pob.)</option>
                                    <option>Barangay X (Pob.)</option>
                                    <option>Barangay XI (Pob.)</option>
									<option>Baruso Barangay XII(Pob.)</option>
                                    <option>Barangay Pogi(Pob.)</option>
                                    <option>Bantayan (Pob.)</option>
                                    <option>Salaban</option>
                                    <option>Talon</option>
									<option>Barangay Lundag</option>
                                    <option>Tamacan</option>
                                    <option>Buho</option>
                                    <option>Minantok Silangan</option>
                                   
                                   
                                </select>
									</div>
                                </div>
                               
                              
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Highest Educational Attainment</label>      
                                        <select class="form-control" name="educ" required>
											<option></option>  
											<option>Primary Level (Grade 1 - 6) </option> 
											<option>Secondary Level (Grade 7 - 12) </option> 
											<option>Tertiary Level (Undergraduate Level) </option> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Occupation</label>
                                        <select class="form-control" name="educ" required>
											
                                    </div>
                                </div>
                          
                            <div class="mb-3">
                                <button type="submit" name="save_solo" class="btn btn-primary">Submit</button>
                            </div> 
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
