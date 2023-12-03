<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
require ('dbcon.php');

session_start();
$fullname = $_SESSION['fullname'];
$activityfrom = "programs & events CMS";

if(isset($_POST['programs'])){

	$logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;
    // $desc=htmlspecialchars($_POST['desc']);
    // $title=htmlspecialchars($_POST['title']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);

	$sql = "INSERT INTO `programs` (`prog_id`, `prog_img`, `prog_title`, `prog_desc`) VALUES (NULL, '$logo', '$title', '$desc')";
	$result = mysqli_query($conn,$sql);

	 if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the programs & events";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms_programs.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
        
    }
}

?>