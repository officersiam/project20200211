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
						<h2>সদস্যগণ</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>সদস্যগণ</span></li>
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

										<h2 class="card-title">সকল সদস্যগণ</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
									              <th>ID</th>
									              <th>Full Name</th>
                                                  <th>Mobile Number</th>
                                                  <th>Gender</th>
									              <th>User Type</th>
									              <th>Date</th>
												</tr>
											</thead>
											<tbody>

  <?php
    $sql = $db->query("SELECT * FROM users ORDER BY id DESC");
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
												<tr data-item-id="<?php echo $id; ?>">

										              <td><?php echo $id; ?></td>
										              <td><?php echo $fullname; ?></td>
										              <td><a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a></td>
										              <td><?php echo $gender; ?></td>
										              <td><?php echo $user_type; ?></td>
										              <td><?php echo $date; ?></td>
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