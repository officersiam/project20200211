<?php
    $id = $_GET['id'];
    include ("header.php");
?>

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
		<!-- Editor -->
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />
		<link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="vendor/codemirror/theme/monokai.css" />
<?php include ("aside.php"); ?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>প্রোফাইল আপডেট</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>প্রোফাইল আপডেট</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col">
					          <!-- DataTales Example -->
					          <div class="card shadow mb-4">
					            <div class="card-body">
					              <div class="table-responsive">
					                <table class="table table-bordered" width="100%" cellspacing="0" style="font-size:18px;color:green;">
  <?php
    $sql = $db->query("SELECT * FROM users WHERE id = '$id'");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $birth = $row['birth'];
        $gender = $row['gender'];
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
                  <thead>
                    <tr>
                      <th>স্থান</th>
                      <th>বিস্তারিত</th>
                    </tr>
                  </thead>
                  <tbody>
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="update_staff.php?id=<?php echo $id; ?>">
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
                      <td><b>জন্মতারিখ:</b></td>
                      <td>
            <div class="input-group">
              <span class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-calendar-alt"></i>
                </span>
              </span>
              <input type="text" name="birth" data-plugin-datepicker class="form-control" value="<?php echo $birth; ?>">
            </div></td>
                    </tr>
                    <tr>
                      <td><b>লিঙ্গ:</b></td>
                      <td><input type="text" name="gender" class="form-control form-control-user" value="<?php echo $gender; ?>"></td>
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
                        <form class="form-signin user" method="post" accept-charset="utf-8" action="staff.php">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                            </div><br>
                          <button class="btn btn-primary btn-user btn-block" name="staff_delete" type="submit">মুছুন</button>
                          <br/><br/>
                        </form>
                      </td>
                      <td>
                        <form class="form-signin user" method="post" enctype="multipart/form-data" action="update_staff.php?id=<?php echo $id; ?>">
                          <input type="text" name="id" class="form-control form-control-user" value="<?php echo $id; ?>" hidden>
                          <input name="img" class="form-control-file" type="file"><br/>
                          <button class="btn btn-primary btn-user btn-block" name="staff_image_update" type="submit">ছবি আপডেট</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
<?php }} ?>
					                </table>
					              </div>
					            </div>
					          </div>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>
<?php include("side.php"); ?>

		<!-- Specific Page Vendor -->
		<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		<!-- Editor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="vendor/fuelux/js/spinner.js"></script>
		<script src="vendor/dropzone/dropzone.js"></script>
		<script src="vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="vendor/codemirror/lib/codemirror.js"></script>
		<script src="vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="vendor/codemirror/mode/xml/xml.js"></script>
		<script src="vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="vendor/codemirror/mode/css/css.js"></script>
		<script src="vendor/summernote/summernote-bs4.js"></script>
		<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="vendor/ios7-switch/ios7-switch.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.datatables.default.js"></script>
		<script src="js/examples/examples.datatables.row.with.details.js"></script>
		<script src="js/examples/examples.datatables.tabletools.js"></script>
		<script src="js/examples/examples.datatables.editable.js"></script>
		<!-- Editor -->
		<script src="js/examples/examples.advanced.form.js"></script>
<?php include("footer.php"); ?>