
<?php include_once("dashboard.php")?>
<script>
  $(".akoden").addClass("active")
  $("#l-cms5").addClass("active")
</script>
<?php 
 $select = "SELECT * FROM banner";
 $result = mysqli_query($conn, $select);
 
 $row = mysqli_fetch_array($result);
?>

<div class="dashboard-content xb xb2">

 <h2 class="text-center">Banner CMS</h2>
<div id="content">
        <form method="POST" action="edit_cms.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group">
              <label>Banner image</label>
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
  <!-- </div> -->
 


    


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