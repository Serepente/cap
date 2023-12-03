<?php include_once("dashboard.php") ?>
<script>
  $("#l-aclog").addClass("active")
</script>
<style>
  .bulletin-content {
    border: 2px solid black;
  }
</style>
<div class="dashboard-content px-3 pt-4 xb xb1">
    <h1 class="text-center">Activity Logs</h1>
  <div class="container" style="height: 60vh; overflow:scroll" >
    <div class="mt-5" >

      <table class="table table-striped" >
        <thead class="btn-cancel">
          <tr class="text-center">
            <th>Date</th>
            <th>Time</th>
            <th>Activity</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("dbcon.php");

          $sql = "SELECT CONVERT(date,varchar(50)) as date, CONVERT(TIME_FORMAT(time,'%I:%i %p'),varchar(50)) as time, activityid, activityname,fullname,activityfrom FROM activitylogs;";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) { ?>

            <tr class="text-center">
              
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['time']; ?></td>
              <td><b><?php echo $row['fullname']; ?></b> has <?php echo $row['activityname']; ?> from <?php echo $row['activityfrom']; ?></td>
              
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<!-- -->

</div>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Appointment Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="admin_bulletinpost.php" class="mx-0 col-md-12">
          <input type="hidden" id="ids" name="ids">
          <div class="row">
            <div class="col-md-12 my-1">
              <div class="form-group">
                <label class="float-left">Title</label>
                <input type="text" class="form-control" placeholder="Title" id="title" name="title">
              </div>
            </div>
            <div class="col-md-6 my-1">
              <div class="form-group">
                <label class="float-left">Date</label>
                <input type="date" class="form-control" id="date" name="date">
              </div>
            </div>
            <div class="col-md-6 my-1">
              <div class="form-group">
                <label class="float-left">Time</label>
                <input type="time" class="form-control" id="time" name="time">
              </div>
            </div>
            <div class="col-md-12 my-1">
              <div class="form-group">
                <label class="float-left">Link</label>
                <input type="text" class="form-control" placeholder="Link" id="link" name="link">
              </div>
            </div>
            <div class="col-md-12 my-1">
              <div class="form-group">
                <textarea class="form-control" placeholder="Post News" rows="10" required id="bulletin" name="bulletin" required></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="edit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
if (isset($_POST['edit'])) {
  $edit = "UPDATE `adminbulletin` SET `bulletin` = '{$_POST['bulletin']}' WHERE `adminbulletin`.`id` = '{$_POST['ids']}'";
  if (mysqli_query($conn, $edit)) {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Successfully!",
            text: "",
            type: "success",
            confirmButtonText: "Ok"
        }, function() {
            window.location = "admindashboard.php";
        });
    });
</script>';
  }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  function formatTimeTo12(time) {
    var date = new Date();
    date.setHours(time.split(":")[0]);
    date.setMinutes(time.split(":")[1]);
    var hours = date.getHours(); // gives the value in 24 hours format
    var AmOrPm = hours >= 12 ? 'pm' : 'am';
    hours = (hours % 12) || 12;
    if (hours.toString().length == 1) {
      hours = '0' + hours;
    }
    var minutes = date.getMinutes();
    if (minutes.toString().length == 1) {
      minutes = '0' + minutes;
    }
    return `${hours}:${minutes} ${AmOrPm.toUpperCase()}`;
  }

  function formatTimeto24(time) {
    console.log(time);
    var aMpMSplit = time.split(' ');
    var timeSplit = aMpMSplit[0].split(':');
    var hours;
    var minutes = timeSplit[1];

    if (aMpMSplit[1] == 'PM') {
      hours = parseInt(timeSplit[0]) + 12;
      if (hours == 24) {
        hours = 0;
      }
    } else {
      hours = timeSplit[0];
    }

    if (hours.toString().length == 1) {
      hours = '0' + hours;
    }
    if (minutes.toString().length == 1) {
      minutes = '0' + minutes;
    }

    return `${hours}:${minutes}`;


  }

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

</html>
<script>
  $('.hatdog').click(function() {
    $('#ids').val($(this).attr("data-value"))
    $('#bulletin').val($(this).attr("data-bulletin"))
    $('#title').val($(this).attr("data-title"))
    $('#admin').val($(this).attr("data-admin"))
    $('#link').val($(this).attr("data-link"))
    $('#time').val(formatTimeto24($(this).attr("data-time")))
    $('#date').val($(this).attr("data-date"))
  })
</script>