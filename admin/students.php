<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12 col-md-12 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ছাত্রছাত্রী সংখ্যা</div>
              <?php
    $query = $db->query("SELECT * FROM users WHERE user_type = 'student' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">অংকুর</div>
              <?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'play' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?>/27</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">কলি</div>
              <?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'nursery' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?>/38</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">কুসুম</div>
              <div class="row no-gutters align-items-center">
<a href="#">
<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'kg' ");
    $count = mysqli_num_rows($query);
?>
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count; ?>/38</div>
                </div>
</a>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
<a href="trained_people.php">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">১ম</div>

<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'one' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
            </div>
</a>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">২য়</div>
<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'two' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?>/16</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">৩য়</div>
<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'three' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">৪র্থ</div>
              <div class="row no-gutters align-items-center">
<a href="#">
<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'four' ");
    $count = mysqli_num_rows($query);
?>
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                </div>
</a>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
<a href="trained_people.php">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">৫ম</div>
<?php
    $query = $db->query("SELECT * FROM users WHERE class_name = 'five' ");
    $count = mysqli_num_rows($query);
?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?>/10</div>
            </div>
</a>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">ছাত্রছাত্রীরা</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddNewStudent">নতুন ছাত্রছাত্রী যোগ</a>.</p>
  <p class="col-xl-3 col-md-6 mb-4"><form method="post" action="student_excel.php">
     <input type="submit" name="excel" class="btn btn-success" value="Export Excel" />
    </form></p>
  <p class="col-xl-3 col-md-6 mb-4"><form method="post" action="student_excel_phone_number.php">
     <input type="submit" name="excel" class="btn btn-success" value="Export Phone Numbers" />
    </form></p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Shift</th>
              <th>Class</th>
              <th>Roll</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Shift</th>
              <th>Class</th>
              <th>Roll</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'student'");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $card_no = $row['card_no'];
        $username = $row['username'];
        $fullname = $row['fullname'];
        $phone = $row['phone'];
        $class_name = $row['class_name'];
        $shift = $row['shift'];
        $section = $row['section'];
        $roll = $row['roll'];
        $father_name = $row['father_name'];
        $mother_name = $row['mother_name'];
        $blood_group = $row['blood_group'];
        $address = $row['address'];
        $user_type = $row['user_type'];
        $password = $row['password'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><?php echo $fullname; ?></td>
              <td><?php echo $shift; ?></td>
              <td><?php echo $class_name; ?></td>
              <td><?php echo $roll; ?></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#StudentDetails<?php echo $id; ?>">edit</a>



  <!-- Logout Modal-->
  <div class="modal fade" id="StudentDetails<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <tr>
                      <td><b>আইডি:</b></td>
                      <td><?php echo $id; ?></td>
                      <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden><br/>
                    </tr>
                    <tr>
                      <td><b>আইডি কার্ড নং:</b></td>
                      <td>
                      <input type="text" name="card_no" class="form-control form-control-user" value="<?php echo $card_no; ?>"><br/>
                      </td>
                    </tr>
                    <tr>
                      <td><b>ডাক নাম:</b></td>
                      <td><input type="text" name="username" class="form-control form-control-user" value="<?php echo $username; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>পুরো নাম:</b></td>
                      <td><input type="text" name="fullname" class="form-control form-control-user" value="<?php echo $fullname; ?>"><br/></td>
                    </tr>
                    <tr>
                      <td><b>শ্রেণি:</b></td>
                      <td><input type="text" name="class_name" class="form-control form-control-user" value="<?php echo $class_name; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>শিফট:</b></td>
                      <td><input type="text" name="shift" class="form-control form-control-user" value="<?php echo $shift; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>মোবাইল:</b></td>
                      <td><input type="text" name="phone" class="form-control form-control-user" value="<?php echo $phone; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>রক্তের গ্রুপ:</b></td>
                      <td><input type="text" name="blood_group" class="form-control form-control-user" value="<?php echo $blood_group; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>ঠিকানা:</b></td>
                      <td><input type="text" name="address" class="form-control form-control-user" value="<?php echo $address; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>সেকশন:</b></td>
                      <td><input type="text" name="section" class="form-control form-control-user" value="<?php echo $section; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>রোল:</b></td>
                      <td><input type="text" name="roll" class="form-control form-control-user" value="<?php echo $roll; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>বাবার নাম:</b></td>
                      <td><input type="text" name="father_name" class="form-control form-control-user" value="<?php echo $father_name; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>মায়ের নাম:</b></td>
                      <td><input type="text" name="mother_name" class="form-control form-control-user" value="<?php echo $mother_name; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>মর্যাদা:</b></td>
                      <td><input type="text" name="user_type" class="form-control form-control-user" value="<?php echo $user_type; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>পাসকোর্ড/পাসওয়ার্ড:</b></td>
                      <td><input type="text" name="password" class="form-control form-control-user" value="<?php echo $password; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>Date:</b></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>Action</td>
                      <td>
              <button class="btn btn-primary btn-user btn-block" name="student_update" type="submit">আপডেট</button>
            </form></td>
                      <td>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <form class="form-signin user" method="post" accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                            </div><br>
                          <button class="btn btn-primary btn-user btn-block" name="student_delete" type="submit">মুছুন</button>
                          <br/><br/>
                        </form>
                      </td>
                      <td>
                        <form class="form-signin user" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                          <input name="img" class="form-control-file" type="file"><br/>
                          <button class="btn btn-primary btn-user btn-block" name="student_image_update" type="submit">ছবি আপডেট</button>
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
