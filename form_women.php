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

    <title>Disadvantaged Woman Assistance Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Office of the Senior Citizens Affairs
                            <h5>Disadvantaged Woman Assistance Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="disadvantaged_woman_code.php" method="POST">
						
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
                                <label>Health Conditions</label>
								<select name="health_condition" placeholder="none" id="health_condition" class="form-control" required>
                                            <option></option>
                                            <option value="Anxiety">Anxiety</option>
                                            <option value="Asthma/Allergy">Asthma/Allergy</option>
                                            <option value="Cancer">Cancer</option>
                                            <option value="Cardio Vascular Health">Cardio Vascular Health</option>
                                            <option value="Eye Health">Eye Health</option>
                                            <option value="Injury">Injury</option>
                                        </select>   
							</div>
                            <div class="mb-3">
                                <label>Proof of Disadvantaged Status</label>
                                <input type="file" name="disadvantaged_proof" class="form-control" required>
                                <small class="form-text text-muted">Upload documents proving the disadvantaged status of the woman (e.g., certification from social services).</small>
                            </div>

                            <div class="mb-3">
                                <label>Description of Financial Hardship</label>
                                <textarea name="financial_hardship" class="form-control" required></textarea>
                                <small class="form-text text-muted">Provide a brief description of the financial challenges faced by the disadvantaged woman.</small>
                            </div>

                            <div class="mb-3">
                                <label>Skills and Education</label>
                                <textarea name="skills_education" class="form-control"></textarea>
                                <small class="form-text text-muted">Describe the woman's skills and educational background.</small>
                            </div>

                            <div class="mb-3">
                                <label>Support Needed</label>
                                <textarea name="support_needed" class="form-control" required></textarea>
                                <small class="form-text text-muted">Specify the type of support needed by the disadvantaged woman (e.g., financial assistance, job training).</small>
                            </div>


                            <div class="mb-3">
                                <label>Photocopy of Valid ID of Disadvantaged Woman with 3 Signatures</label>
                                <input type="file" name="woman_id" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Photocopy of Valid ID of Contact Person with 3 Signatures</label>
                                <input type="file" name="contact_person_id" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="apply_disadvantaged_woman" class="btn btn-primary">Submit Assistance Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add any additional scripts if needed -->
</body>
</html>
