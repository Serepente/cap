<?php 
// session_start();
require 'dbcon.php';

function generateUniqueFileNameBurial($originalFileName)
{
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $timestamp = time();
    $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 10);
    return $timestamp . "_" . $randomString . "." . $extension;
}

if(isset($_POST['apply_burial']))
{
	
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$dateOfDeath = mysqli_real_escape_string($con, $_POST['dateOfDeath']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
    $letter_mayor = generateUniqueFileNameBurial($_FILES["letter_mayor"]["name"]);
    $indigency = generateUniqueFileNameBurial($_FILES["indigency"]["name"]);
    $id_copy = generateUniqueFileNameBurial($_FILES["id_copy"]["name"]);
    $funeral_contract = generateUniqueFileNameBurial($_FILES["funeral_contract"]["name"]);
    $certified_copy = generateUniqueFileNameBurial($_FILES["certified_copy"]["name"]);



    move_uploaded_file($_FILES["letter_mayor"]["tmp_name"], "img/letter_mayor/" . $letter_mayor);
    move_uploaded_file($_FILES["indigency"]["tmp_name"], "img/indigency/" . $indigency);
    move_uploaded_file($_FILES["id_copy"]["tmp_name"], "img/id_copy/" . $id_copy);
    move_uploaded_file($_FILES["funeral_contract"]["tmp_name"], "img/funeral_contract/" . $funeral_contract);
    move_uploaded_file($_FILES["certified_copy"]["tmp_name"], "img/certified_copy/" . $certified_copy);



	

   $query = "INSERT INTO `burialform`(`lastname`, `firstname`, `age`, `birthday`, `dateOfDeath`, `sex`, `letter_mayor`, `indigency`, `id_copy`, `funeral_contract`, `certified_copy`) VALUES ('$lastname','$firstname','$birthday','$age','$dateOfDeath','$sex','$letter_mayor','$indigency','$id_copy','$funeral_contract','$certified_copy')";

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

$sql = "SELECT COUNT(*) as row_count FROM burialform";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['burialRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}

?>