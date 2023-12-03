<?php
// session_start();
require 'dbcon.php';

if(isset($_POST['delete_solo']))
{
    $solo_id = mysqli_real_escape_string($con, $_POST['delete_solo']);

    $query = "DELETE FROM soloform WHERE id='$solo_id' ";
    $query_run = mysqli_query($con, $query);
        
    if($query_run)
    {
        $_SESSION['message'] = "welcome";
        header("Location: index1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "welcome";
        header("Location: index1.php");
        exit(0);
    }
}

if(isset($_POST['update_solo']))
{
    $solo_id = mysqli_real_escape_string($con, $_POST['solo_id']);

    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
	$month = mysqli_real_escape_string($con, $_POST['month']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
    $totalmonth = mysqli_real_escape_string($con, $_POST['totalmonth']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);
	$occ = mysqli_real_escape_string($con, $_POST['occ']);

    $query = "UPDATE soloform SET lastname='$lastname', firstname='$firstname', birthday='$birthday', age='$age', sex='$sex', 
	month='$month', place='$place', totalmonth='$totalmonth', address='$address', educ='$educ', occ='$occ' WHERE id='$solo_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "welcome";
        header("Location: dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "welcome";
        header("Location: index1.php");
        exit(0);
    }

}

if(isset($_POST['save_solo']))
{
	
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
	$month = mysqli_real_escape_string($con, $_POST['month']);
	$place = mysqli_real_escape_string($con, $_POST['place']);
    $totalmonth = mysqli_real_escape_string($con, $_POST['totalmonth']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);
	$occ = mysqli_real_escape_string($con, $_POST['occ']);
	

    $query = "INSERT INTO soloform (lastname,firstname,birthday,age,sex,month,place,totalmonth,address,educ,occ) 
	VALUES ('$lastname','$firstname','$birthday','$age','$sex','$month','$place','$totalmonth','$address','$educ','$occ')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Inserted Successfully";
        header("Location: form_soloparents.php");
        
    }
    else
    {
        $_SESSION['message'] = "Information Not Inserted";
        header("Location: form_soloparents.php");
        
    }
}

$sql = "SELECT COUNT(*) as row_count FROM soloform";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['soloRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}

?>