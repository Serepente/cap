<?php
// session_start();
require 'dbcon.php';

function generateUniqueFileNameDisad($originalFileName)
{
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $timestamp = time();
    $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 10);
    return $timestamp . "_" . $randomString . "." . $extension;
}

if(isset($_POST['apply_disadvantaged_woman']))
{
	
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
	$placeOfBirth = mysqli_real_escape_string($con, $_POST['placeOfBirth']);
	$health_condition = mysqli_real_escape_string($con, $_POST['health_condition']);
    $financial_hardship = mysqli_real_escape_string($con, $_POST['financial_hardship']);
    $skills_education = mysqli_real_escape_string($con, $_POST['skills_education']);
    $support_needed = mysqli_real_escape_string($con, $_POST['support_needed']);
    $disadvantaged_proof = generateUniqueFileNameDisad($_FILES["disadvantaged_proof"]["name"]);
    $woman_id = generateUniqueFileNameDisad($_FILES["woman_id"]["name"]);
    $contact_person_id = generateUniqueFileNameDisad($_FILES["contact_person_id"]["name"]);

    move_uploaded_file($_FILES["disadvantaged_proof"]["tmp_name"], "img/disadvantaged_proof/" . $disadvantaged_proof);
    move_uploaded_file($_FILES["woman_id"]["tmp_name"], "img/woman_id/" . $woman_id);
    move_uploaded_file($_FILES["contact_person_id"]["tmp_name"], "img/contact_person_id/" . $contact_person_id);



   $query = "INSERT INTO `disadvantagedwoman`(`lastname`, `firstname`, `birthday`, `age`, `sex`, `placeOfBirth`, `health_condition`, `disadvantaged_proof`, `financial_hardship`, `skills_education`, `support_needed`, `woman_id`, `contact_person_id`) VALUES ('$lastname','$firstname','$birthday','$age','$sex','$placeOfBirth','$health_condition','$disadvantaged_proof','$financial_hardship','$skills_education','$support_needed','$woman_id','$contact_person_id')";

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


$sql = "SELECT COUNT(*) as row_count FROM disadvantagedwoman";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['disadRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}

?>