<?php include_once("dashboard.php") ;

if (isset($_GET['msg'])) {
  if ($_GET['msg'] == 1) {
      $msg = "CMS updated succesfully";
      echo "<script>alert('$msg')</script>";
  }
  echo "<script>window.location = 'cms_programs.php'</script>";
}



?>
<script>
  $(".akoden").addClass("active")
  $("#l-cms2").addClass("active")
</script>

<style>
  @media(max-width: 768px) {
    .xb {
      margin-top: 100px!important;
      width: fit-content!important;
    }
    #content{
      margin: auto!important;
      margin-top: 100px!important;
    }
  }
</style>
<div class="dashboard-content xb xb2">

  <h2 class="text-center">Program & Events CMS</h2>
  <!-- image 1 -->
  <div id="content">
    <form method="POST" action="edit_cms_programs.php" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label>Add Event</label>
          <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required />
          <input class="form-control" type="text" placeholder="Enter Title" name="title" value="" required />
          <textarea name="desc" id="" cols="30" rows="10" placeholder="Enter Description" required class="form-control"></textarea>

        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="programs">Confirm</button>
      </div>
    </form>
  </div>
  <div class="dashboard-content px-3 pt-4">

    <div class="container">
      <div class="dashboard-content px-3 pt-4">
        <h2 class="text-center">List of Programs and Events</h2>
        <div>

          <table class="table table-grey text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" >Title</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php


              $sql = "SELECT * FROM programs";
              $result = mysqli_query($conn, $sql);
              $i = 1;
              while ($row = mysqli_fetch_array($result)) {



              ?>
                <tr>

                  <td><?php echo $i ?></td>
                  <td ><?php echo $row['prog_title']; ?></td>
                  <td><img width="95rem" src="image/<?php echo $row['prog_img']; ?>" alt=""></td>
                  <td><?php echo $row['prog_desc']; ?></td>
                  <td>

                    <a href="delete.php?program_id=<?php echo $row['prog_id'] ?>" class="p-2"><i class="fas fa-trash-alt"></i></a>
                    <a href="#" class="p-2 hatdog" data-prog_id="<?php echo $row['prog_id']; ?>" data-prog_title="<?php echo $row['prog_title']; ?>" data-prog_desc="<?php echo $row['prog_desc']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-edit"></i></a>

                  </td>

                </tr>
              <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" id="prog_id" name="prog_id">
          <input type="file" class="form-control mb-2" accept="image/png,image/jpeg" name="prog_img">

          <input type="text" id="prog_title" placeholder="Enter Title" class="form-control mb-2" name="prog_title" required>
          <textarea id="prog_desc" cols="30" rows="10" placeholder="Enter Description" name="prog_desc" class="form-control mb-2"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="edit_program" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>
<?php
if (isset($_POST['edit_program'])) {

  $prog_id = htmlentities($_POST['prog_id']);
  $prog_title = htmlentities($_POST['prog_title']);
  $prog_desc = htmlentities($_POST['prog_desc']);
  if ($_FILES['prog_img']['name'] != "") {
    $logo = $_FILES["prog_img"]["name"];
    $tempname = $_FILES["prog_img"]["tmp_name"];
    $folder = "./image/" . $logo;
    $edit = "
    UPDATE `programs` SET `prog_img` = '$logo', `prog_title` = '$prog_title', `prog_desc` = '$prog_desc' WHERE `programs`.`prog_id` = '$prog_id'
    ";
    if (mysqli_query($conn, $edit)) {

      if (move_uploaded_file($tempname, $folder)) {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "Successfully!",
                    text: "",
                    type: "success",
                    confirmButtonText: "Ok"
                }, function() {
                    window.location = "cms_programs.php";
                });
            });
        </script>';
      }
    }
  } else {

    $edit2 = "
    UPDATE `programs` SET  `prog_title` = '$prog_title', `prog_desc` = '$prog_desc' WHERE `programs`.`prog_id` = '$prog_id'
    ";
    if (mysqli_query($conn, $edit2)) {

      echo '<script>
      setTimeout(function() {
          swal({
              title: "Successfully!",
              text: "",
              type: "success",
              confirmButtonText: "Ok"
          }, function() {
              window.location = "cms_programs.php";
          });
      });
  </script>';
    }
  }
}
?>

<script>
  $('.hatdog').click(function() {
    $('#prog_id').val($(this).attr("data-prog_id"))
    $('#prog_title	').val($(this).attr("data-prog_title"))
    $('#prog_desc').val($(this).attr("data-prog_desc"))
  })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(".sidebar ul li").on('click', function() {
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
  });


  $('.open-btn').on('click', function() {
    $('.sidebar').addClass('active');
  });

  $('.close-btn').on('click', function() {
    $('.sidebar').removeClass('active');
  })

  topNav.style.width = document.body.scrollWidth;
</script>
</body>