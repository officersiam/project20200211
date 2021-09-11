<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">বাণী</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddBani">নতুন বাণী যোগ</a>.</p>

  <!-- Logout Modal-->
  <div class="modal fade" id="AddBani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন বাণী যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">ছবি</label><br/>
            <input name="principle_img" class="form-control-file" type="file"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নাম *</label>
            <input type="text" name="principle_name" class="form-control form-control-user" placeholder="নাম"><br/>
            <label for="inputname" style="font-size:20px;color:#000">টাইটেল *</label>
            <input type="text" name="principle_title" class="form-control form-control-user" placeholder="টাইটেল"><br/>
            <label for="inputname" style="font-size:20px;color:#000">বাণী *</label>
            <textarea type="text" name="principle_msg" class="form-control form-control-user" placeholder="বাণী"></textarea><br/>
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="principle_gift" type="submit">যোগ</button>
            <br/><br/>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">সকল বাণী</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>আইডি</th>
              <th>ছবি</th>
              <th>নাম</th>
              <th>টাইটেল</th>
              <th>বাণী</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>আইডি</th>
              <th>ছবি</th>
              <th>নাম</th>
              <th>টাইটেল</th>
              <th>বাণী</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM principle_gift ORDER BY id");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $principle_img = $row['principle_img'];
        $principle_name = $row['principle_name'];
        $principle_title = $row['principle_title'];
        $principle_msg = $row['principle_msg'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><img src="../img/bani/<?php echo $principle_img; ?>" width="60px" alt="future foundation school" /></td>
              <td><?php echo $principle_name; ?></td>
              <td><?php echo $principle_title; ?></td>
              <td><?php echo $principle_msg; ?></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#BaniDetails<?php echo $id; ?>">edit</a>

  <!-- Logout Modal-->
  <div class="modal fade" id="BaniDetails<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">বাণী বিস্তারিত</h5>
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
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="bani_list.php">
                    <tr>
                      <td><b>আইডি:</b></td>
                      <td><?php echo $id; ?></td>
                      <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden><br/>
                    </tr>
                    <tr>
                      <td><b>ছবি:</b></td>
                      <td>
                          <img src="../img/bani/<?php echo $principle_img; ?>" width="100px" alt="future foundation school" />
                      </td>
                    </tr>
                    <tr>
                      <td><b>নাম:</b></td>
                      <td><input type="text" name="principle_name" class="form-control form-control-user" value="<?php echo $principle_name; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>টাইটেল:</b></td>
                      <td><input type="text" name="principle_title" class="form-control form-control-user" value="<?php echo $principle_title; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>বাণী:</b></td>
                      <td><input type="text" name="principle_msg" class="form-control form-control-user" value="<?php echo $principle_msg; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>Date:</b></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>Action</td>
                      <td>
              <button class="btn btn-primary btn-user btn-block" name="bani_update" type="submit">আপডেট</button>
            </form></td>
                      <td>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <form class="form-signin user" method="post" accept-charset="utf-8" action="bani_list.php">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                            </div><br>
                          <button class="btn btn-primary btn-user btn-block" name="bani_delete" type="submit">মুছুন</button>
                          <br/><br/>
                        </form>
                      </td>
                      <td>
                        <form class="form-signin user" method="post" enctype="multipart/form-data" action="bani_list.php">
                          <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                          <input name="principle_img" class="form-control-file" type="file"><br/>
                          <button class="btn btn-primary btn-user btn-block" name="bani_image_update" type="submit">ছবি আপডেট</button>
                        </form>
                      </td>
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
