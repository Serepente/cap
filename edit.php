<?php session_start();
require ('dbcon.php');

if(isset($_POST['edit'])){
//   echo "
//   <script>
//   alert('asdasd')
// </script>
//   ";
  $edit = "UPDATE `userschedule` SET `status` = '1' WHERE `userschedule`.`id` = 6";
  if(mysqli_query($conn,$edit)){
    echo 'zzzzzzzzzzzzzzzzzzzz';
  }else{
    echo 'asdasdasd';
  }
}
?>