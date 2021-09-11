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
						<h2>নোটিশ আপডেট</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>নোটিশ আপডেট</span></li>
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
    $sql = $db->query("SELECT * FROM notice WHERE id = '$id' ORDER BY id");
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
                  <thead>
                    <tr>
                      <th>স্থান</th>
                      <th>বিস্তারিত</th>
                    </tr>
                  </thead>
                  <tbody>
                  <form class="form-signin user" method="post" accept-charset="utf-8" action="update_notice.php?id=<?php echo $id; ?>">
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
                      <td><textarea type="text" name="notice_details" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $notice_details; ?>"</textarea></td>
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