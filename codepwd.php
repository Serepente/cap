<?php
// session_start();
require 'dbcon.php';

if(isset($_POST['delete_pwd']))
{
    $senior_id = mysqli_real_escape_string($con, $_POST['delete_pwd']);

    $query = "DELETE FROM pwdform WHERE id='$pwd_id' ";
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

if(isset($_POST['update_pwd']))
{
    // $pwd_id = mysqli_real_escape_string($con, $_POST['pwd_id']);

    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
	$pwdnum = mysqli_real_escape_string($con, $_POST['pwdnum']);
    $apply = mysqli_real_escape_string($con, $_POST['apply']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
    $typeof = mysqli_real_escape_string($con, $_POST['typeof']);
	$cause = mysqli_real_escape_string($con, $_POST['cause']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
	$civil = mysqli_real_escape_string($con, $_POST['civil']);
	$house = mysqli_real_escape_string($con, $_POST['house']);
	$barangay = mysqli_real_escape_string($con, $_POST['barangay']);
	$municipality = mysqli_real_escape_string($con, $_POST['municipality']);
	$province = mysqli_real_escape_string($con, $_POST['province']);
	$region = mysqli_real_escape_string($con, $_POST['region']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);
	$status = mysqli_real_escape_string($con, $_POST['status']);
	$category = mysqli_real_escape_string($con, $_POST['category']);
	$employ = mysqli_real_escape_string($con, $_POST['employ']);
	
    $query = "UPDATE seniorform SET lastname='$lastname',firstname='$firstname',birthday='$birthday',age='$age',sex='$sex',
	blood='$blood',place='$place',status='$status',address='$address',educ='$educ' WHERE id='$senior_id' ";
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

if(isset($_POST['save_pwd']))
{
	
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
	$pwdnum = mysqli_real_escape_string($con, $_POST['pwdnum']);
    $apply = mysqli_real_escape_string($con, $_POST['apply']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
    $typeof = mysqli_real_escape_string($con, $_POST['typeof']);
	$cause = mysqli_real_escape_string($con, $_POST['cause']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
	$civil = mysqli_real_escape_string($con, $_POST['civil']);
	$house = mysqli_real_escape_string($con, $_POST['house']);
	$barangay = mysqli_real_escape_string($con, $_POST['barangay']);
	$municipality = mysqli_real_escape_string($con, $_POST['municipality']);
	$province = mysqli_real_escape_string($con, $_POST['province']);
	$region = mysqli_real_escape_string($con, $_POST['region']);
	$landline = mysqli_real_escape_string($con, $_POST['landline']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$educ = mysqli_real_escape_string($con, $_POST['educ']);
	$status = mysqli_real_escape_string($con, $_POST['status']);
	$category = mysqli_real_escape_string($con, $_POST['category']);
	$employ = mysqli_real_escape_string($con, $_POST['employ']);
	$occ = mysqli_real_escape_string($con, $_POST['occ']);
	$org = mysqli_real_escape_string($con, $_POST['org']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$office = mysqli_real_escape_string($con, $_POST['office']);
	$tel = mysqli_real_escape_string($con, $_POST['tel']);
	$sss = mysqli_real_escape_string($con, $_POST['sss']);
	$gsis = mysqli_real_escape_string($con, $_POST['gsis']);
	$pagibig = mysqli_real_escape_string($con, $_POST['pagibig']);
	$psn = mysqli_real_escape_string($con, $_POST['psn']);
	$phil = mysqli_real_escape_string($con, $_POST['phil']);
    $fatherlastname = mysqli_real_escape_string($con, $_POST['fatherlastname']);
    $fatherfirstname = mysqli_real_escape_string($con, $_POST['fatherfirstname']);
    $fathermidname = mysqli_real_escape_string($con, $_POST['fathermidname']);
    $motherlastname = mysqli_real_escape_string($con, $_POST['motherlastname']);
    $motherfirstname = mysqli_real_escape_string($con, $_POST['motherfirstname']);
    $mothermidname = mysqli_real_escape_string($con, $_POST['mothermidname']);
    $guardianlastname = mysqli_real_escape_string($con, $_POST['guardianlastname']);
    $guardianfirstname = mysqli_real_escape_string($con, $_POST['guardianfirstname']);
    $guardianmidname = mysqli_real_escape_string($con, $_POST['guardianmidname']);
    $applastname = mysqli_real_escape_string($con, $_POST['applastname']);
    $appfirstname = mysqli_real_escape_string($con, $_POST['appfirstname']);
    $appmidname = mysqli_real_escape_string($con, $_POST['appmidname']);
    $guardlastname = mysqli_real_escape_string($con, $_POST['guardlastname']);
    $guardfirstname = mysqli_real_escape_string($con, $_POST['guardfirstname']);
    $guardmidname = mysqli_real_escape_string($con, $_POST['guardmidname']);
    $replastname = mysqli_real_escape_string($con, $_POST['replastname']);
    $repfirstname = mysqli_real_escape_string($con, $_POST['repfirstname']);
    $repmidname = mysqli_real_escape_string($con, $_POST['repmidname']);
    $physlastname = mysqli_real_escape_string($con, $_POST['physlastname']);
    $physfirstname = mysqli_real_escape_string($con, $_POST['physfirstname']);
    $physmidname = mysqli_real_escape_string($con, $_POST['physmidname']);
    $officerlastname = mysqli_real_escape_string($con, $_POST['officerlastname']);
    $officerfirstname = mysqli_real_escape_string($con, $_POST['officerfirstname']);
    $officermidname = mysqli_real_escape_string($con, $_POST['officermidname']);
    $approvinglastname = mysqli_real_escape_string($con, $_POST['approvinglastname']);
    $approvingfirstname = mysqli_real_escape_string($con, $_POST['approvingfirstname']);
    $approvingmidname = mysqli_real_escape_string($con, $_POST['approvingmidname']);
    $encoderlastname = mysqli_real_escape_string($con, $_POST['encoderlastname']);
    $encoderfirstname = mysqli_real_escape_string($con, $_POST['encoderfirstname']);
    $encodermidname = mysqli_real_escape_string($con, $_POST['approvingmidname']);
    $encodermidname = mysqli_real_escape_string($con, $_POST['encodermidname']);
    $reportinglastname = mysqli_real_escape_string($con, $_POST['reportinglastname']);
    $controlno = mysqli_real_escape_string($con, $_POST['controlno']);
	

   echo $query = "INSERT INTO `pwdform`(`pwd`, `pwdnum`, `apply`, `lastname`, `firstname`, `birthday`, `age`, `typeof`, `cause`, `sex`, `civil`, `house`, `barangay`, `municipality`, `province`, `region`, `landline`, `mobile`, `email`, `educ`, `status`, `category`, `employ`, `occ`, `org`, `contact`, `office`, `tel`, `sss`, `gsis`, `pagibig`, `psn`, `phil`, `fatherlastname`, `fatherfirstname`, `fathermidname`, `motherlastname`, `motherfirstname`, `mothermidname`, `guardianlastname`, `guardianfirstname`, `guardianmidname`, `applastname`, `appfirstname`, `appmidname`, `guardlastname`, `guardfirstname`, `guardmidname`, `replastname`, `repfirstname`, `repmidname`, `physlastname`, `physfirstname`, `physmidname`, `officerlastname`, `officerfirstname`, `officermidname`, `approvinglastname`, `approvingfirstname`, `approvingmidname`, `encoderlastname`, `encoderfirstname`, `encodermidname`, `reportinglastname`, `controlno`) VALUES ('$pwd','$pwdnum','$apply','$lastname','$firstname','$birthday','$age','$typeof','$cause','$sex','$civil','$house','$barangay','$municipality','$province','$region','$landline','$mobile','$email','$educ','$status','$category','$employ','$occ','$org','$contact','$office','$tel','$sss','$gsis','$pagibig','$psn','$phil','$fatherlastname','$fatherfirstname','$fathermidname','$motherlastname','$motherfirstname','$mothermidname','$guardianlastname','$guardianfirstname','$guardianmidname','$applastname','$appfirstname','$appmidname','$guardlastname','$guardfirstname','$guardmidname','$replastname','$repfirstname','$repmidname','$physlastname','$physfirstname','$physmidname','$officerlastname','$officerfirstname','$officermidname','$approvinglastname','$approvingfirstname','$approvingmidname','$encoderlastname','$encoderfirstname','$encodermidname','$reportinglastname','$controlno')";

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

$sql = "SELECT COUNT(*) as row_count FROM pwdform";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['PWDRowCount'] = $row['row_count'];
} else {
    echo "Error: " . mysqli_error($conn);
}

?>