<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">শিক্ষকগণ</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddNewTeacher">নতুন শিক্ষক যোগ</a>.</p>
  <p class="mb-4"><form method="post" action="teacher_excel.php">
     <input type="submit" name="excel" class="btn btn-success" value="Export Excel" />
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
              <th>Mobile Number</th>
              <th>Designation</th>
              <th>Pass</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Mobile Number</th>
              <th>Designation</th>
              <th>Pass</th>
              <th>Date</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'teacher'");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $card_no = $row['card_no'];
        $username = $row['username'];
        $fullname = $row['fullname'];
        $designation = $row['designation'];
        $email = $row['email'];
        $phone = $row['phone'];
        $blood_group = $row['blood_group'];
        $address = $row['address'];
        $details = $row['details'];
        $user_type = $row['user_type'];
        $password = $row['password'];
        $date = $row['date'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><?php echo $fullname; ?></td>
              <td><a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a></td>
              <td><?php echo $designation; ?></td>
              <td><?php echo $password; ?></td>
              <td><?php echo $date; ?></td>
              <td><a href="#" data-toggle="modal" data-target="#TeacherDetails<?php echo $id; ?>">edit</a>



  <!-- Logout Modal-->
  <div class="modal fade" id="TeacherDetails<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <td><b>পদবী:</b></td>
                      <td><input type="text" name="designation" class="form-control form-control-user" value="<?php echo $designation; ?>"></td>
                    </tr>
                    <tr>
                      <td><b>ই-মেইল:</b></td>
                      <td><input type="text" name="email" class="form-control form-control-user" value="<?php echo $email; ?>"></td>
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
                      <td><b>কাজের বিবরণ:</b></td>
                      <td><input type="text" name="details" class="form-control form-control-user" value="<?php echo $details; ?>"></td>
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
              <button class="btn btn-primary btn-user btn-block" name="staff_update" type="submit">আপডেট</button>
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
                          <button class="btn btn-primary btn-user btn-block" name="staff_delete" type="submit">মুছুন</button>
                          <br/><br/>
                        </form>
                      </td>
                      <td>
                        <form class="form-signin user" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                          <input name="img" class="form-control-file" type="file"><br/>
                          <button class="btn btn-primary btn-user btn-block" name="staff_image_update" type="submit">ছবি আপডেট</button>
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
