<?php
// session_start();
require 'dbcon.php';

if(isset($_POST['delete_senior']))
{
    $senior_id = mysqli_real_escape_string($con, $_POST['delete_senior']);

    $query = "DELETE FROM seniorform WHERE id='$senior_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: ad_beneficiaries.php");
		$_SESSION['message'] = "Welcome";
	

    }
    else
    {
       
        header("Location: index1.php");
		 $_SESSION['message'] = "Welcome";
     
    }
}

if(isset($_POST['update_senior']))
{
    $senior_id = mysqli_real_escape_string($con, $_POST['senior_id']);

    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
	$blood = mysqli_real_escape_string($con, $_POST['blood']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);

    $query = "UPDATE seniorform SET lastname='$lastname', firstname='$firstname', birthday='$birthday', age='$age', sex='$sex', 
	blood='$blood', place='$place', status='$status', address='$address', educ='$educ' WHERE id='$senior_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Welcome";
        header("Location: ad_beneficiaries.php");
     
    }
    else
    {
        $_SESSION['message'] = "Welcome";
        header("Location: index1.php");
       
    }

}

if(isset($_POST['save_senior']))
{
	
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
	$blood = mysqli_real_escape_string($con, $_POST['blood']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);
	

    $query = "INSERT INTO seniorform (lastname,firstname,birthday,age,sex,blood,place,status,address,educ) 
	VALUES ('$lastname','$firstname','$birthday','$age','$sex','$blood','$place','$status','$address','$educ')";

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

$sql = "SELECT COUNT(*) as row_count FROM seniorform";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['seniorRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}

?>