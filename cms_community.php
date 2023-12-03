<?php include_once("dashboard.php");

if (isset($_GET['msg'])) {
  if ($_GET['msg'] == 1) {
    $msg = "CMS updated succesfully";
    echo "<script>alert('$msg')</script>";
  }
}
?>
<script>
  $(".akoden").addClass("active")
  $("#l-cms3").addClass("active")
</script>
<style>
  /* label{
    font-size: larger;
    font-weight: bolder;
  } */

  @media(max-width: 768px) {
    #content {
      margin: auto !important;
      margin-top: 5% !important;
      margin-bottom: 5% !important;
      width: 80% !important;
    }
  }
</style>
<div class="dashboard-content xb xb2">

  <h2 class="text-center">Community CMS</h2>

  <!-- image 1 -->
  <?php
  $select = "SELECT * FROM community where c_id =1";
  $result = mysqli_query($conn, $select);

  $row = mysqli_fetch_array($result);
  ?>
  <div id="content">
    <form method="POST" action="edit_cms_community.php" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label>Community Video</label>
          <div class="col-sm-12">
            <!-- <img src="image/community/<?php echo $row['c_img'] ?>" width="100%" alt=""> -->
            <video class="ellistondrone" width="100%" height="50%" muted="" loop="" autoplay="">
              <source src="image/community/<?php echo $row['c_img'] ?>" type="video/mp4">
            </video>
          </div>
          <input class="form-control" type="file" accept="video/*" name="logo" value="" />
          <textarea name="desc" id="" cols="30" rows="2" placeholder="Enter Description" required class="form-control"><?php echo $row['c_desc'] ?></textarea>

        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload1">Save</button>
      </div>
    </form>
  </div>

  <!-- image 2 -->
  <?php
  $select = "SELECT * FROM community where c_id =2";
  $result = mysqli_query($conn, $select);

  $row = mysqli_fetch_array($result);
  ?>
  <div id="content">
    <form method="POST" action="edit_cms_community.php" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label>Basketball Court Facility</label>
          <div class="col-sm-12">
            <img src="image/community/<?php echo $row['c_img'] ?>" width="100%" alt="">
          </div>
          <input class="form-control" type="file" accept="image/*" name="logo" value="" required />
          <textarea name="desc" id="" cols="30" rows="2" placeholder="Enter Description" required class="form-control"><?php echo $row['c_desc'] ?></textarea>

        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload2">Save</button>
      </div>
    </form>
  </div>
  <!-- image 3 -->
  <?php
  $select = "SELECT * FROM community where c_id =3";
  $result = mysqli_query($conn, $select);

  $row = mysqli_fetch_array($result);
  ?>
  <div id="content">
    <form method="POST" action="edit_cms_community.php" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label>Recreational Clubhouse Facility</label>
          <div class="col-sm-12">
            <img src="image/community/<?php echo $row['c_img'] ?>" width="100%" alt="">
          </div>
          <input class="form-control" type="file" accept="image/*" name="logo" value="" required />
          <textarea name="desc" id="" cols="30" rows="2" placeholder="Enter Description" required class="form-control"><?php echo $row['c_desc'] ?></textarea>

        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload3">Save</button>
      </div>
    </form>
  </div>

  <!-- image 4 -->
  <?php
  $select = "SELECT * FROM community where c_id =4";
  $result = mysqli_query($conn, $select);

  $row = mysqli_fetch_array($result);
  ?>
  <div id="content">
    <form method="POST" action="edit_cms_community.php" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group">
          <label>Main Gate & Guard House Facility</label>
          <div class="col-sm-12">
            <img src="image/community/<?php echo $row['c_img'] ?>" width="100%" alt="">
          </div>
          <input class="form-control" type="file" accept="image/*" name="logo" value="" required />
          <textarea name="desc" id="" cols="30" rows="2" placeholder="Enter Description" required class="form-control"><?php echo $row['c_desc'] ?></textarea>

        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload4">Save</button>
      </div>
    </form>
  </div>
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
  </script>
  </body>