<?php
    $class = $_GET['class'];
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">শ্রেণিভিত্তিক স্টেশনারীর তালিকা</h1>
  <p class="mb-4"><a target="_blank" href="add_book_list.php" data-toggle="modal" data-target="#AddBooklist">শ্রেণিভিত্তিক নতুন স্টেশনারীর যোগ</a>.</p>

  <!-- Logout Modal-->
  <div class="modal fade" id="AddBooklist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">শ্রেণিভিত্তিক নতুন স্টেশনারীর যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" accept-charset="UTF-8" action="class_stationary_list.php?class=<?php echo $class;?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শ্রেণি</label>
            <select name="class" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
    <?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                <option value="<?php echo $tag; ?>"><?php echo $class_name; ?></option>
    <?php } ?>
            </select><br>
            <label for="inputname" style="font-size:20px;color:#000">বিস্তারিত *</label>
            <textarea type="text" id="editor" style="height:300px;" name="details" class="form-control form-control-user" placeholder="বিস্তারিত"></textarea><br/>
            <button class="btn btn-primary btn-user btn-block" name="class_stationary" type="submit">যোগ</button>
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
              <th>ক্লাস</th>
              <th>বিস্তারিত</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ক্লাস</th>
              <th>বিস্তারিত</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM class_stationary WHERE class = '$class' ORDER BY id");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $class = $row['class'];
        $details = $row['details'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">
              <td><?php echo $class; ?></td>
              <td><?php echo $details; ?></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#class_stationary<?php echo $id; ?>">edit</a>

  <!-- Logout Modal-->
  <div class="modal fade" id="class_stationary<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">বিস্তারিত</h5>
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
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="class_stationary_list.php?class=<?php echo $class;?>">
                    <tr>
                      <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden><br/>
                    </tr>
                    <tr>
                      <td><b>ক্লাস:</b></td>
                      <td><input type="text" name="class" class="form-control form-control-user" value="<?php echo $class; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>বিস্তারিত:</b></td>
                      <td><textarea type="text" name="details" class="form-control form-control-user"><?php echo $details; ?></textarea></td>
                    </tr>
                    <tr>
                      <td><b>Date:</b></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>Action</td>
                      <td>
              <button class="btn btn-primary btn-user btn-block" name="class_stationary_update" type="submit">আপডেট</button>
            </form></td>
                      <td>
            <form class="form-signin user" method="post" accept-charset="utf-8" action="class_stationary_list.php?class=<?php echo $class;?>">
                <div class="form-group">
                    <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                </div><br>
              <button class="btn btn-primary btn-user btn-block" name="class_stationary_delete" type="submit">মুছুন</button>
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
