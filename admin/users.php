<?php
    include ('header.inc.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Contacts</h1>
  <p class="mb-4"><a target="_blank" href="#" data-toggle="modal" data-target="#AddUserMenu1">Add User</a>.</p>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddUserMenu1" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" accept-charset="utf-8" action="users.php">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">User Name *</label>
                <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">Phone Number *</label>
                <input type="tel" name="phone" class="form-control form-control-user" id="exampleLastName" placeholder="Phone">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">User Type *</label>
            <select name="user_type" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="admin">Admin</option>
                <option value="technical_executive">Technical Executive</option>
                <option value="telecommunication_manager">Telecommunication Manager</option>
                <option value="editor">Editor</option>
                <option value="writer">Writer</option>
            </select>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">Password *</label>
                <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">Confirm Password *</label>
                <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
              </div>
            </div>
          <hr>
            <button class="btn btn-primary btn-user btn-block" name="register_btn" type="submit">Register Account</button>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>

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
              <th>User Name</th>
              <th>Mobile Number</th>
              <th>User Type</th>
              <th>Pass</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>Mobile Number</th>
              <th>User Type</th>
              <th>Pass</th>
              <th>Edit</th>
            </tr>
          </tfoot>
          <tbody>
  <?php
    $sql = $db->query("SELECT * FROM users");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $username = $row['username'];
        $phone = $row['phone'];
        $user_type = $row['user_type'];
        $password = $row['password'];
   ?>
            <tr style="color:#263238;font-weight:bold">

              <td><?php echo $id; ?></td>
              <td><?php echo $username; ?></td>
              <td><?php echo $phone; ?></td>
              <td><?php echo $user_type; ?></td>
              <td><?php echo $password; ?></td>
              <td><a href="details.php?id=<?php echo $id; ?>">edit</a></td>
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
