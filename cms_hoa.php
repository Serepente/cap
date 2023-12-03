<?php include_once("dashboard.php");

 if(isset($_GET['msg']))
  {
    if($_GET['msg'] == 1)
    {
      $msg = "CMS updated succesfully";
      echo "<script>alert('$msg')</script>";
      echo "<script>window.location = 'cms_hoa.php'</script>";
    }
  }
  ?>
<script>
  $(".akoden").addClass("active")
  $("#l-cms4").addClass("active")
</script>

<style>
  @media(max-width: 768px){
    #content{
      margin: auto !important;
      margin-top: 5%!important;
      margin-bottom: 5%!important;
      width: 80%!important;
    }
  } 
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="dashboard-content xb xb2">
<?php 
 $select = "SELECT * FROM cms where id =7";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>
 <h2 class="text-center">Home Owner Asssociation Officers CMS</h2>
<div id="content">
  
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Upload Picture</label>
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
    </div>
  <!-- </div> -->
