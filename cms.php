<?php include_once("dashboard.php");

  if(isset($_GET['msg']))
  {
    if($_GET['msg'] == 1)
    {
      $msg = "CMS updated succesfully";
      echo "<script>alert('$msg')</script>";
      echo "<script>window.location = 'cms.php'</script>";
    }
  }

?>
<script>
  $(".akoden").addClass("active")
  $("#l-cms1").addClass("active")
</script>
<style>
  /* label{
    font-size: larger;
    font-weight: bolder;
  } */

  @media(max-width: 768px){
    #content{
      margin: auto !important;
      margin-top: 5%!important;
      margin-bottom: 5%!important;
      width: 80%!important;
    }
  } 
</style>
<div class="dashboard-content xb xb2">

 <h2 class="text-center">Community CMS</h2>
 <!-- LOGO -->
 <?php 
 $select = "SELECT * FROM cms where id =1";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
<div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Upload Logo</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['logo']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required/>
            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">Upload Logo</button>
            </div>
        </form>
    </div>
  <!-- </div> -->
  <!-- image 1 -->
  <?php 
 $select = "SELECT * FROM cms where id =2";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
  <div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Community Banner</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['logo']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required/>
                <textarea name="desc" id=""  cols="30" rows="10" placeholder="Enter Description" required class="form-control"><?php echo $row['text']?></textarea>

            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload1">Save</button>
            </div>
        </form>
    </div>
  <!-- image 2 -->
  <?php 
 $select = "SELECT * FROM cms where id =3";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
  <div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Programs & Events Banner</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['logo']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required/>
                <textarea name="desc" id=""  cols="30" rows="10" placeholder="Enter Description" required class="form-control"><?php echo $row['text']?></textarea>
            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload2">Save</button>
            </div>
        </form>
    </div>
    <!-- image 3 -->
    <?php 
 $select = "SELECT * FROM cms where id =4";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
    <div id="content" class="removeMargin">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>HOA Banner</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['logo']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required/>
                <textarea name="desc" id="" cols="30" rows="10" placeholder="Enter Description" required class="form-control"><?php echo $row['text']?></textarea>
            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload3">Save</button>
            </div>
        </form>
    </div>
  <!-- FOOTER -->
  <?php 
 $select = "SELECT * FROM footer";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
  <div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Footer</label>
                <input class="form-control" type="text" placeholder="Enter Address" name="address" value="<?php echo $row['address']?>" required/>
                <input class="form-control" type="email" placeholder="Enter Email1" name="email1" value="<?php echo $row['email1']?>" required/>
                <input class="form-control" type="email" placeholder="Enter Email2 / Not Required"name="email2" value="<?php echo $row['email2']?>" />

            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="footer">Save</button>
            </div>
        </form>
    </div>
<!-- HOA BACKGROUND
<?php 
//  $select = "SELECT * FROM cms where id =7";
//  $result = mysqli_query($conn, $select);
 
//  $row = mysqli_fetch_array($result);
?>
    <div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>HOA BACKGROUND</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['logo']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/png,image/jpeg" name="logo" value="" required/>
            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="hoa">Upload</button>
            </div>
        </form>
    </div> -->

  <!-- Banner -->
  <?php 
 $select = "SELECT * FROM banner";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
  <div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Banner image</label>
              <div class="col-sm-12">
              <img src="image/<?php echo $row['b_img']?>" width="100%" alt="">
              </div>
                <input class="form-control" type="file" accept="image/jpeg,image/png" name="img"/>
                <input class="form-control" type="text" placeholder="Enter header title" name="header" value="<?php echo $row['b_header']?>" required/>
                <input class="form-control" type="text" placeholder="Enter header subtitle"name="sub" value="<?php echo $row['b_second']?>" />

            </div>
          </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="banner">Save</button>
            </div>
        </form>
    </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(".sidebar ul li").on('click', function(){
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active'); 
    });
        
        
         $('.open-btn').on('click', function(){
            $('.sidebar').addClass('active');
        });
        
        $('.close-btn').on('click', function(){
            $('.sidebar').removeClass('active');
        })
    </script>
</body>