<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
require('dbcon.php');

session_start();
$fullname = $_SESSION['fullname'];
$activityfrom = "CMS";

if (isset($_POST['upload'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;


    $sql = "UPDATE `cms` SET `logo` = '$logo' WHERE `cms`.`id` = 1";

    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the logo";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1";  
            }, 2000);
            
            </script>';
        }
    }
}

if (isset($_POST['upload1'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `cms` SET `logo` = '$logo', text = '$desc' WHERE `cms`.`id` = 2";
    $result = mysqli_query($conn, $sql);



    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the community banner";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
if (isset($_POST['upload2'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `cms` SET `logo` = '$logo', text = '$desc' WHERE `cms`.`id` = 3";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the programs & events banner";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
if (isset($_POST['upload3'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `cms` SET `logo` = '$logo', text = '$desc' WHERE `cms`.`id` = 4";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the HOA banner";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
if (isset($_POST['upload4'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `cms` SET `logo` = '$logo', text = '$desc' WHERE `cms`.`id` = 6";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>

        setTimeout(function()
        { 
             window.location = "cms.php?msg=1"; 
        }, 2000);
        
        </script>';
    }
}
// HOA
if (isset($_POST['hoa'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/" . $logo;

    $sql = "UPDATE `cms` SET `logo` = '$logo' WHERE `cms`.`id` = 7";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {

        $activityname = "Updated the HOA image";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'HOA')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms_hoa.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
        
    }
}
// footer
if (isset($_POST['footer'])) {
    $address = htmlspecialchars($_POST['address']);
    $email1 = htmlspecialchars($_POST['email1']);
    $email2 = htmlspecialchars($_POST['email2']);

    $sql = "UPDATE `footer` SET `address` = '$address', `email1` = '$email1', `email2` = '$email2' WHERE `footer`.`id` = 1";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $activityname = "Updated the footer";
        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
// footer
if (isset($_POST['banner'])) {

    $header = htmlspecialchars($_POST['header']);
    $sub = htmlspecialchars($_POST['sub']);

    if ($_FILES["img"]["name"] != "") {
        $img = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];
        $folder = "./image/banner/" . $img;
        $sql = "UPDATE `banner` SET `b_img` = '$img', `b_header` = '$header', `b_second` = '$sub' WHERE `banner`.`b_id` = 1";
        move_uploaded_file($tempname, $folder);
    } else {
        $sql = "UPDATE `banner` SET `b_header` = '$header', `b_second` = '$sub' WHERE `banner`.`b_id` = 1";
    }



    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $activityname = "Updated the HOA banner";

        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>

            setTimeout(function()
            { 
                window.location = "cms.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
?>