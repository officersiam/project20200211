<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">শ্রেণি</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddClass">নতুন শ্রেণি যোগ</a>.</p>

  <!-- Logout Modal-->
  <div class="modal fade" id="AddClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন শ্রেণি যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণি আইকন (ফন্ট অসাম থেকে) *</label>
            <input type="text" name="class_icon" class="form-control form-control-user" placeholder="শ্রেণি আইকন (ফন্ট অসাম থেকে)"><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির নাম *</label>
            <input type="text" name="class_name" class="form-control form-control-user" placeholder="শ্রেণির নাম"><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির বিবরণ *</label>
            <input type="text" name="discription" class="form-control form-control-user" placeholder="শ্রেণির  বিবরণ"><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির বিস্তারিত *</label>
            <textarea type="text" name="class_details" class="form-control form-control-user" placeholder="শ্রেণির বিস্তারিত"></textarea><br/>
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="classes_input" type="submit">যোগ</button>
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
      <h6 class="m-0 font-weight-bold text-primary">সকল শ্রেণি</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>আইডি</th>
              <th>আইকন</th>
              <th>নাম</th>
              <th>বিস্তারিত</th>
              <th>লেবেল</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>আইডি</th>
              <th>আইকন</th>
              <th>নাম</th>
              <th>বিস্তারিত</th>
              <th>লেবেল</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM classes ORDER BY id");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $class_icon = $row['class_icon'];
        $tag = $row['tag'];
        $class_name = $row['class_name'];
        $class_details = $row['class_details'];
        $discription = $row['discription'];
        $lebel = $row['lebel'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><i class="<?php echo $class_icon; ?>"></i></td>
              <td><?php echo $class_name; ?></td>
              <td><?php echo $class_details; ?></td>
              <td><?php echo $lebel; ?></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#ClassDetails<?php echo $id; ?>">edit</a>

  <!-- Logout Modal-->
  <div class="modal fade" id="ClassDetails<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">শ্রেণি বিস্তারিত</h5>
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
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="classes_list.php">
                    <tr>
                      <td><b>আইকন:</b></td>
                      <td><input type="text" name="class_icon" class="form-control form-control-user" value="<?php echo $class_icon; ?>"><i class="<?php echo $class_icon; ?>"></i><br/></td>
                      <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden><br/>
                    </tr>
                    <tr>
                      <td><b>ট্যাগ:</b></td>
                      <td><input type="text" name="tag" class="form-control form-control-user" value="<?php echo $tag; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>নাম:</b></td>
                      <td><input type="text" name="class_name" class="form-control form-control-user" value="<?php echo $class_name; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>বিবরণ:</b></td>
                      <td><input type="text" name="discription" class="form-control form-control-user" value="<?php echo $discription; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>বিস্তারিত:</b></td>
                      <td><textarea type="text" name="class_details" class="form-control form-control-user"><?php echo $class_details; ?></textarea></td>
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
              <button class="btn btn-primary btn-user btn-block" name="class_update" type="submit">আপডেট</button>
            </form></td>
                      <td>
            <form class="form-signin user" method="post" accept-charset="utf-8" action="classes_list.php">
                <div class="form-group">
                    <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                </div><br>
              <button class="btn btn-primary btn-user btn-block" name="class_delete" type="submit">মুছুন</button>
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
