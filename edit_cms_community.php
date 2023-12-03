<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
require('dbcon.php');
session_start();
$fullname = $_SESSION['fullname'];
$activityfrom = "community CMS";

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $msg = "CMS updated succesfully";
        echo "<script>alert('$msg')</script>";
        echo "<script>window.location = 'edit_cms_community.php'</script>";
    }
}

if (isset($_POST['upload1'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/community/" . $logo;
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);



    if (isset($tempname) && $tempname != "") {
        $sql = "UPDATE `community` SET `c_img` = '$logo', c_desc = '$desc' WHERE `community`.`c_id` = 1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (move_uploaded_file($tempname, $folder)) {
                $activityname = "Updated the community video";
                $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>
        
                        setTimeout(function()
                        { 
                            window.location = "cms_community.php?msg=1"; 
                        }, 2000);
                        
                        </script>';
                }
            } else {
                echo "error";
            }
        } else {
            echo $sql;
            echo mysqli_error($conn);
        }
    } else {
        $sql = "UPDATE `community` SET c_desc = '$desc' WHERE c_id = 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $activityname = "Updated the community video description";
            $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
            if (mysqli_query($conn, $sql)) {
                echo '<script>
    
                    setTimeout(function()
                    { 
                        window.location = "cms_community.php?msg=1";  
                    }, 2000);
                    
                    </script>';
            }
        } else {
            echo $sql;
            echo mysqli_error($conn);
        }
    }
}
if (isset($_POST['upload2'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/community/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `community` SET `c_img` = '$logo', c_desc = '$desc' WHERE `community`.`c_id` = 2";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the basketball court facility";
        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
        
            setTimeout(function()
            { 
                window.location = "cms_community.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
if (isset($_POST['upload3'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/community/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `community` SET `c_img` = '$logo', c_desc = '$desc' WHERE `community`.`c_id` = 3";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "Updated the recreational clubhouse facility";
        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
        
            setTimeout(function()
            { 
                window.location = "cms_community.php?msg=1";  
            }, 2000);
            
            </script>';
        }
    }
}
if (isset($_POST['upload4'])) {

    $logo = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "./image/community/" . $logo;
    $desc = htmlspecialchars($_POST['desc']);

    $sql = "UPDATE `community` SET `c_img` = '$logo', c_desc = '$desc' WHERE `community`.`c_id` = 4";
    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $activityname = "main gate & guard house facility";
        $sql = "INSERT INTO activitylogs(activityname,fullname,date,time,activityfrom) VALUES('$activityname','$fullname',CURRENT_DATE(),CURRENT_TIME(),'$activityfrom')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
        
            setTimeout(function()
            { 
                window.location = "cms_community.php?msg=1"; 
            }, 2000);
            
            </script>';
        }
    }
}
?>