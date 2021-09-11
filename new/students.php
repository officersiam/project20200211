<?php
	include ("header.php");
?>

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
<?php include ("aside.php"); ?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>ছাত্র/ছাত্রীরা</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>ছাত্র/ছাত্রীরা</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>

										<h2 class="card-title">সকল ছাত্র/ছাত্রীরা</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-9">
										<div class="mb-3">
											<a href="add_student.php" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
                                                  <th>ID</th>
                                                  <th>Roll</th>
                                                  <th>Full Name</th>
                                                  <th>Shift</th>
                                                  <th>Mobile</th>
                                                  <th>Date</th>
									              <th><i class="fas fa-pencil-alt"></i></th>
												</tr>
											</thead>
											<tbody>

  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'student' ORDER BY id DESC");
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
												<tr data-item-id="<?php echo $id; ?>">

                                                      <td><?php echo $id; ?></td>
                                                      <td><?php echo $roll; ?></td>
                                                      <td><?php echo $fullname; ?></td>
                                                      <td><?php echo $shift; ?></td>
                                                      <td><?php echo $phone; ?></td>
                                                      <td><?php echo $date; ?></td>
												      <td><a href="update_student.php?id=<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a></td>
												</tr>
<?php }} ?>
											</tbody>
										</table>
									</div>
								</section>
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

		<!-- Examples -->
		<script src="js/examples/examples.datatables.default.js"></script>
		<script src="js/examples/examples.datatables.row.with.details.js"></script>
		<script src="js/examples/examples.datatables.tabletools.js"></script>
		<script src="js/examples/examples.datatables.editable.js"></script>
<?php include("footer.php"); ?>