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

    <title>PWD Registration Form</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center>Office of the Person with Disabilities
                            <h5>Registration Form</h5></center>
                            <a href="appform.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codepwd.php" method="POST">
							<div class="col">
                                    <div class="mb-3">
                                       
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pwd" id="inlineRadio1" value="New Applicant" required>
                                            <label class="form-check-label" for="inlineRadio1">New Applicant</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pwd" id="inlineRadio2" value="Renewal" required>
                                            <label class="form-check-label" for="inlineRadio2">Renewal</label>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
								<div class="col">
                                    <div class="mb-3">
                                        <label>Person with Disabilities Number</label>
                                        <input type="text" name="pwdnum" id="pwdnum" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Date Applied</label>
                                        <input type="date" id="apply" name="apply" class="form-control" required
                                           min="1903-01-01" max="<?php echo date('Y-m-d'); ?>"
                                           value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                            </div>
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
                                           value="2023-01-01">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="age" id="age" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
								<div class="form-group">
                                        <label for="exampleFormControlSelect1">Type of Disability</label>
                                        <select class="form-control" name="typeof" required>
                                            <option></option>
                                            <option>Deaf or Hard of Hearing</option>
                                            <option>Intellectual Disability</option>
                                            <option>Learning Disability</option>
                                            <option>Mental Disability</option>
                                            <option>Physical Disability(Orthopedic)</option>
                                            <option>Psychosocial Disability</option>
                                            <option>Speech and Language impairment</option>
                                            <option>Visual Disability</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col">
								<div class="mb-3">
                                        <label>Cause of Disability</label>
                                        <select name="cause" placeholder="none" id="cause" class="form-control" required>
                                            <option></option>
                                            <option value="Autism">Autism</option>
                                            <option value="ADHD">ADHD</option>
                                            <option value="Cerebral Palsy">Cerebral Palsy</option>
                                            <option value="Down Syndrome">Down Syndrome</option>
                                            <option value="Chronic Illness">Chronic Illness</option>
                                            <option value="Injury">Injury</option>
                                        </select>         
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
									
                                    <div class="mb-3">
                                        <div class="mb-3">
                                        <label for="exampleFormControlSelect1">Civil Status</label>
                                        <select class="form-control" name="civil" required>
                                            <option></option>
                                            <option>Single</option>
                                            <option>Separated</option>
                                            <option>Widow/er</option>
											<option>Cohabitation</option>
											<option>Married</option>
                                        </select>
                                    </div>         
                                    </div>
                                </div>
                            </div>
							<h5>RESIDENCE ADDRESS:</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>House No. Street</label>
                                        <input type="text" name="house" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label>Barangay</label>
                                        <input type="text" name="barangay" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label>Municipality</label>
                                        <input type="text" name="municipality" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <input type="text" name="province" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Region</label>
                                        <input type="text" name="region" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h5>CONTACT DETAILS:</h5>
							<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Landline No.</label>
                                         <input type="text" name="landline" class="form-control" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Mobile No.</label>
                                         <input type="text" name="mobile" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                         <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <h5>_______________________________________________________________________________________________________________________________________________________</h5>
                            </div><br>
                           <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Highest Educational Attainment:</label>
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
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Status of Employment:</label>
                                        <select class="form-control" name="status" required>
                                    <option></option>
                                    <option>Employed</option>
                                    <option>Unemployed</option>
                                    <option>Self-Employed</option>
                                </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Category of Employment:</label>
                                        <select class="form-control" name="category" required>
                                    <option></option>
                                    <option>None</option>
                                    <option>Government</option>
                                    <option>Private</option>
                                </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Types of Employment:</label>
                                        <select class="form-control" name="employ" required>
                                    <option></option>
                                    <option>None</option>
                                    <option>Permanent/Regular</option>
                                    <option>Seasonal</option>
                                    <option>Casual</option>
                                    <option>Emergency</option>
                                   
                                </select>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Occupation:</label>
                                        <select class="form-control" name="occ" required>
                                    <option></option>
                                    <option>Managers</option>
                                    <option>Professional</option>
                                    <option>Technicians and Associate Professionals</option>
                                    <option>Clerical Support Workers</option>
									<option>Service and Sales Workers</option>
									<option>Skilled Agricultural, Forestry and Fishery Worker</option>
									<option>Craft and Related Trade Workers</option>
									<option>Plant and Machine Operators and Assemblers</option>
									<option>Elementary Occupations</option>
									<option>Armed Forces Occupations</option>
									<option>Others</option>
                                </select>
                                    </div>
                                </div>
                            </div><br>
							
                            <h5>ORGANIZATION INFORMATION:</h5>
							 <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                         <label>Organization Affiliated:</label>
                                        <input type="text" name="org" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>Contact Person:</label>
                                        <input type="text" name="contact" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>Office Address:</label>
                                        <input type="text" name="office" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>Tel. Nos.:</label>
                                        <input type="text" name="tel" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							
							<h5>ID REFERENCE NO.:</h5>
							 <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                         <label>SSS No.:</label>
                                        <input type="text" name="sss" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>GSIS No.:</label>
                                        <input type="text" name="gsis" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>PAG-IBIG No.:</label>
                                        <input type="text" name="pagibig" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                         <label>PSN No.:</label>
                                        <input type="text" name="psn" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                         <label>PhilHealth No.:</label>
                                        <input type="text" name="phil" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							
							<h5>FAMILY BACKGROUND:</h5>
								<h6>Father's Name</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="fatherlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fatherfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="fathermidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h6>Mother's Name</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="motherlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="motherfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="mothermidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h6>Guardian/'s Name</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="guardianlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="guardianfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="guardianmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							
							<h5>ACCOMPLISHED BY:</h5>
								<h6>Applicant</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="applastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="appfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="appmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h6>Guardian</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="guardlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="guardfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="guardmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h6>Representative</h6>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="replastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="repfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="repmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							
							<h5>NAME OF CERTIFYING PHYSICIAN:</h5>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="physlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="physfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="physmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h5>PROCESSING OFFICER:</h5>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="officerlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="officerfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="officermidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h5>APPROVING OFFICER:</h5>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="approvinglastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="approvingfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="approvingmidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<h5>ENCODER:</h5>
								<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="encoderlastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="encoderfirstname" class="form-control" required>
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="encodermidname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>NAME OF REPORTING UNIT:(OFFICE/SECTION)</label>
                                        <input type="text" name="reportinglastname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>CONTROL NO.:</label>
                                        <input type="text" name="controlno" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_pwd" class="btn btn-primary">Submit</button>
                            </div>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
