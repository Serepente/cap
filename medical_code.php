<?php
// session_start();
require 'dbcon.php';

function generateUniqueFileNameMedical($originalFileName)
{
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $timestamp = time();
    $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 10);
    return $timestamp . "_" . $randomString . "." . $extension;
}

if(isset($_POST['apply_medical']))
{
	
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
	$placeOfBirth = mysqli_real_escape_string($con, $_POST['placeOfBirth']);
    $letter_mayor = generateUniqueFileNameMedical($_FILES["letter_mayor"]["name"]);
    $barangay_indigency = generateUniqueFileNameMedical($_FILES["barangay_indigency"]["name"]);
    $prescription = generateUniqueFileNameMedical($_FILES["prescription"]["name"]);
    $lab_request = generateUniqueFileNameMedical($_FILES["lab_request"]["name"]);
    $hospital_bill = generateUniqueFileNameMedical($_FILES["hospital_bill"]["name"]);
    $treatment_protocol = generateUniqueFileNameMedical($_FILES["treatment_protocol"]["name"]);
    $authorization_letter = generateUniqueFileNameMedical($_FILES["authorization_letter"]["name"]);
    $claimant_id = generateUniqueFileNameMedical($_FILES["claimant_id"]["name"]);
    $beneficiary_id = generateUniqueFileNameMedical($_FILES["beneficiary_id"]["name"]);
	



    move_uploaded_file($_FILES["letter_mayor"]["tmp_name"], "img/letter_mayor/" . $letter_mayor);
    move_uploaded_file($_FILES["barangay_indigency"]["tmp_name"], "img/barangay_indigency/" . $barangay_indigency);
    move_uploaded_file($_FILES["prescription"]["tmp_name"], "img/prescription/" . $prescription);
    move_uploaded_file($_FILES["lab_request"]["tmp_name"], "img/lab_request/" . $lab_request);
    move_uploaded_file($_FILES["hospital_bill"]["tmp_name"], "img/hospital_bill/" . $hospital_bill);
    move_uploaded_file($_FILES["treatment_protocol"]["tmp_name"], "img/treatment_protocol/" . $treatment_protocol);
    move_uploaded_file($_FILES["authorization_letter"]["tmp_name"], "img/authorization_letter/" . $authorization_letter);
    move_uploaded_file($_FILES["claimant_id"]["tmp_name"], "img/claimant_id/" . $claimant_id);
    move_uploaded_file($_FILES["beneficiary_id"]["tmp_name"], "img/beneficiary_id/" . $beneficiary_id);



	

   $query = "INSERT INTO `medicalassistanceform`(`lastname`, `firstname`, `birthday`, `age`, `sex`, `placeOfBirth`, `letter_mayor`, `barangay_indigency`, `prescription`, `lab_request`, `hospital_bill`, `treatment_protocol`, `authorization_letter`, `claimant_id`, `beneficiary_id`) VALUES ('$lastname','$firstname','$birthday','$age','$sex','$placeOfBirth','$letter_mayor','$barangay_indigency','$prescription','$lab_request','$hospital_bill','$treatment_protocol','$authorization_letter','$claimant_id','$beneficiary_id')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Inserted Successfully";
        header("Location: dashboard.php");
        
    }
    else
    {
        $_SESSION['message'] = "Information Not Inserted";
        header("Location: dashboard.php");
        
    }
}

$sql = "SELECT COUNT(*) as row_count FROM medicalassistanceform";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['medicalRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}


?>