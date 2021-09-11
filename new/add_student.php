<?php include ("header.php"); ?>

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
						<h2>নতুন ছাত্র/ছাত্রী যোগ</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>নতুন ছাত্র/ছাত্রী যোগ</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col">
					          <form class="user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="students.php">
					            <div class="form-group row">
					              <div class="col-sm-6 mb-3 mb-sm-0">
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ছাত্র/ছাত্রীর ডাক নাম *</label>
					                <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="ছাত্র/ছাত্রীর ডাক নাম">
					                <p style="color:red">* ছাত্র/ছাত্রীর ডাক নাম ইংরেজিতে হবে।</p>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ছাত্র/ছাত্রীর পুরো নাম</label>
					                <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName" placeholder="ছাত্র/ছাত্রীর পুরো নাম"><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">বাবার নাম</label>
					                <input type="text" name="father_name" class="form-control form-control-user" id="exampleFirstName" placeholder="বাবার নাম"><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মায়ের নাম</label>
					                <input type="text" name="mother_name" class="form-control form-control-user" id="exampleFirstName" placeholder="মায়ের নাম"><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">জন্মতারিখ *</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-calendar-alt"></i>
											</span>
										</span>
										<input type="text" name="birth" data-plugin-datepicker class="form-control">
									</div><br>
					              </div>
					              <div class="col-sm-6">
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মোবাইল নাম্বার *</label>
					                <input type="tel" name="phone" class="form-control form-control-user" id="exampleLastName" placeholder="মোবাইল নাম্বার">
					                <p style="color:red">* মোবাইল নাম্বার ইংরেজিতে হবে।</p>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">বাসার ঠিকানা</label>
					                <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" placeholder="বাসার ঠিকানা"><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">রক্তের গ্রুপ</label>
					                <input type="text" name="blood_group" class="form-control form-control-user" id="exampleLastName" placeholder="রক্তের গ্রুপ"><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিফট</label>
					            <select name="shift" id="user_type" class="form-control" id="exampleFormControlSelect1">
					                <option value="">Select One..</option>
					                <option value="morning">পদ্মা (মর্নিং)</option>
					                <option value="day">মেঘনা (ডে)</option>
					            </select><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">সেকশন</label>
					                <input type="text" name="section" class="form-control form-control-user" id="exampleLastName" placeholder="সেকশন">
					              </div>
					            </div>
					            <div class="form-group">
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">লিঙ্গ</label>
					            <select name="gender" id="user_type" class="form-control" id="exampleFormControlSelect1">
					                <option value="">Select One..</option>
					                <option value="male">ছেলে</option>
					                <option value="female">মেয়ে</option>
					            </select><br>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শ্রেণি</label>
					            <select name="class_name" id="user_type" class="form-control" id="exampleFormControlSelect1">
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
					            <input type="text" name="user_type" class="form-control form-control-user" id="exampleLastName" value="student" hidden>
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">রোল</label>
					                <input type="text" name="roll" class="form-control form-control-user" id="exampleLastName" placeholder="রোল">
					            </div>
					            <div class="form-group row">
					              <div class="col-sm-6 mb-3 mb-sm-0">
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড *</label>
					                <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="পাসওয়ার্ড">
					              </div>
					              <div class="col-sm-6">
					              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড আবার লিখুন *</label>
					                <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="পাসওয়ার্ড আবার লিখুন">
					              </div>
					            </div>
					          <hr>
					            <button class="btn btn-primary btn-user btn-block" name="register_btn" type="submit">রেজিস্টার করুন</button>
					          </form>
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