<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">নোটিশ</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddNotice">নতুন নোটিশ যোগ</a>.</p>


  <!-- Logout Modal-->
  <div class="modal fade" id="AddNotice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন নোটিশ যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশ টাইটেল *</label>
            <input type="text" name="notice_title" class="form-control form-control-user" placeholder="নোটিশ টাইটেল"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশের বিস্তারিত *</label>
            <input type="text" name="notice_details" class="form-control form-control-user" placeholder="নোটিশের বিস্তারিত"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশ ফাইল বা ডকুমেন্ট</label><br/>
            <input name="notice_file" class="form-control-file" type="file">
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="notice" type="submit">যোগ</button>
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
              <th>নোটিশ</th>
              <th>বিস্তারিত</th>
              <th>লিংক</th>
              <th>লেবেল</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>আইডি</th>
              <th>নোটিশ</th>
              <th>বিস্তারিত</th>
              <th>লিংক</th>
              <th>লেবেল</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM notice ORDER BY id");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $notice_title = $row['notice_title'];
        $notice_details = $row['notice_details'];
        $notice_file = $row['notice_file'];
        $lebel = $row['lebel'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><a href="../notice_details.php?id=<?php echo $id; ?>"><?php echo $notice_title; ?></a></td>
              <td><?php echo $notice_details; ?></td>
              <td><?php echo $lebel; ?></td>
              <td><a href="../file/notice/<?php echo $notice_file; ?>" />Link</a></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#NoticeDetails<?php echo $id; ?>">edit</a>

  <!-- Logout Modal-->
  <div class="modal fade" id="NoticeDetails<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নোটিশ বিস্তারিত</h5>
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
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="notice_list.php">
                    <tr>
                      <td><b>আইডি:</b></td>
                      <td><?php echo $id; ?></td>
                      <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden><br/>
                    </tr>
                    <tr>
                      <td><b>নোটিশ:</b></td>
                      <td><input type="text" name="notice_title" class="form-control form-control-user" value="<?php echo $notice_title; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>বিস্তারিত:</b></td>
                      <td><input type="text" name="notice_details" class="form-control form-control-user" value="<?php echo $notice_details; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>লেবেল:</b></td>
                      <td><input type="text" name="lebel" class="form-control form-control-user" value="<?php echo $lebel; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>Date:</b></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>Action</td>
                      <td>
              <button class="btn btn-primary btn-user btn-block" name="notice_update" type="submit">আপডেট</button>
            </form></td>
                      <td>
            <form class="form-signin user" method="post" accept-charset="utf-8" action="notice_list.php">
                <div class="form-group">
                    <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                </div><br>
              <button class="btn btn-primary btn-user btn-block" name="notice_delete" type="submit">মুছুন</button>
              <br/><br/>
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
