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

    <title>Senior Registration Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Office of the Senior Citizens Affairs
                            <h5>Registration Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
						
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
                                        <input type="date" id="birthday" name="birthday" class="form-control" required
                                           min="1903-01-01" max="<?php echo date('Y-m-d'); ?>"
                                           value="1963-01-01">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="age" id="age" class="form-control" readonly>
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
                                            <label class="form-check-label" for="inlineRadio3">Prefer not to say</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Blood Type</label>
                                        <select class="form-control" name="blood" required>
                                            <option></option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                          <label>Civil Status</label>
                                        <select name="status" placeholder="none" id="status" class="form-control" required>
                                            <option></option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
											<option value="Married">Separated</option>
											<option value="Married">Widowed</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                          <div class="form-group">
                                        <label for="exampleFormControlSelect1">Highest Educational Attainment</label>
                                        <select class="form-control" name="educ" required>
                                            <option></option>
                                            <option>None</option>
                                            <option>Kindergarten</option>
                                            <option>Elementary</option>
                                            <option>Junior Highschool</option>
                                            <option>Senior Highschool</option>
                                            <option>College</option>
                                            <option>Vocational</option>
                                            <option>Post Graduate</option>
                                        </select>
                                    </div>    
                                    </div>
                                </div>
                            </div>
								<h5>PLACE OF BIRTH:</h5>
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Country</label>
                                        <input type="text" name="barangay" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>State</label>
                                        <input type="text" name="municipality" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="province" class="form-control" required>
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
                          <br>
                            <div class="mb-3">
                                <button type="submit" name="save_senior" class="btn btn-primary">Submit</button>
								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Calculate age from date of birth
        document.getElementById('birthday').addEventListener('change', function() {
            var dob = new Date(this.value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var m = today.getMonth() - dob.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            document.getElementById('age').value = age;
        });
        // Restrict age to 60 or above
        document.getElementById('birthday').addEventListener('change', function() {
            var age = document.getElementById('age').value;
            if (age < 60) {
                alert("Age must be 60 or above.");
                this.value = '';
                document.getElementById('age').value = '';
            }
        });
		
    </script>
</body>
</html>
