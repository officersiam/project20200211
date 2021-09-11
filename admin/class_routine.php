<?php
    $class = $_GET['class'];
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">রুটিন</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">রুটিন</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ক্র.নং.</th>
              <th>বার</th>
              <th>১ম পিরিয়ড</th>
              <th>২য় পিরিয়ড</th>
              <th>৩য় পিরিয়ড</th>
              <th>৪র্থ পিরিয়ড</th>
              <th>৫ম পিরিয়ড</th>
              <th>৬ষ্ট পিরিয়ড</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ক্র.নং.</th>
              <th>বার</th>
              <th>১ম পিরিয়ড</th>
              <th>২য় পিরিয়ড</th>
              <th>৩য় পিরিয়ড</th>
              <th>৪র্থ পিরিয়ড</th>
              <th>৫ম পিরিয়ড</th>
              <th>৬ষ্ট পিরিয়ড</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>

  <?php
    $sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$class' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $day = $row['day'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];
        $date = $row['date'];
   ?>

            <tr style="color:#263238;font-weight:bold">
              <td><?php echo $id; ?></td>
              <td><?php echo $day; ?></td>
              <td><?php echo $first_period; ?></td>
              <td><?php echo $second_period; ?></td>
              <td><?php echo $third_period; ?></td>
              <td><?php echo $fourth_period; ?></td>
              <td><?php echo $fivth_period; ?></td>
              <td><?php echo $sixth_period; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#RoutineUpdate<?php echo $id; ?>">edit</a>

  <!-- Logout Modal-->
  <div class="modal fade" id="RoutineUpdate<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">রুটিন বিস্তারিত</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0" style="font-size:18px;color:green;">
                  <thead>
                    <tr>
                      <th>স্থান</th>
                      <th>বিস্তারিত</th>
                    </tr>
                  </thead>
                  <tbody>
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>?class=<?php echo $class;?>">
                  <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                    <tr>
                      <td><b>দিন:</b></td>
                      <td><input type="text" name="day" class="form-control form-control-user" value="<?php echo $day; ?>"></td>
                      <br/>
                    </tr>
                    <tr>
                      <td><b>১ম পিরিয়ড:</b></td>
                      <td><input type="text" name="first_period" class="form-control form-control-user" value="<?php echo $first_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>২য় পিরিয়ড:</b></td>
                      <td><input type="text" name="second_period" class="form-control form-control-user" value="<?php echo $second_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>৩য় পিরিয়ড:</b></td>
                      <td><input type="text" name="third_period" class="form-control form-control-user" value="<?php echo $third_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>৪র্থ পিরিয়ড:</b></td>
                      <td><input type="text" name="fourth_period" class="form-control form-control-user" value="<?php echo $fourth_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>৫ম পিরিয়ড:</b></td>
                      <td><input type="text" name="fivth_period" class="form-control form-control-user" value="<?php echo $fivth_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>৬ষ্ঠ পিরিয়ড:</b></td>
                      <td><input type="text" name="sixth_period" class="form-control form-control-user" value="<?php echo $sixth_period; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>Date:</b></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>Action</td>
                      <td>
              <button class="btn btn-primary btn-user btn-block" name="class_routine_update" type="submit">আপডেট</button>
            </form></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>



              </td>
            </tr>
<?php }} ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
    include ('footer.inc.php');
?>
