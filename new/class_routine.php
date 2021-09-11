<?php
    $class = $_GET['class'];
	include ("header.php");
?>

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
<?php include ("aside.php"); ?>
				<section role="main" class="content-body">
					<header class="page-header">
<?php
$sql = $db->query("SELECT * FROM classes WHERE tag = '$class' ");
while ($row = mysqli_fetch_array($sql)) {
$class_name = $row['class_name'];
?>
						<h2><?php echo $class_name; ?> এর রুটিন</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span><?php echo $class_name; ?> এর রুটিন</span></li>
							</ol>

<?php } ?>
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

										<h2 class="card-title">রুটিন</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-9">
										<div class="mb-3">
											<a href="add_routine.php" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
									              <th>ক্র.নং.</th>
									              <th>বার</th>
									              <th>১ম পিরিয়ড</th>
									              <th>২য় পিরিয়ড</th>
									              <th>৩য় পিরিয়ড</th>
									              <th>৪র্থ পিরিয়ড</th>
									              <th>৫ম পিরিয়ড</th>
									              <th>৬ষ্ট পিরিয়ড</th>
									              <th><i class="fas fa-pencil-alt"></i></th>
												</tr>
											</thead>
											<tbody>

  <?php
    $sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$class' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $day = $row['day'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];
        $date = $row['date'];
   ?>
												<tr data-item-id="<?php echo $id; ?>">
										              <td><?php echo $id; ?></td>
										              <td><?php echo $day; ?></td>
										              <td><?php echo $first_period; ?></td>
										              <td><?php echo $second_period; ?></td>
										              <td><?php echo $third_period; ?></td>
										              <td><?php echo $fourth_period; ?></td>
										              <td><?php echo $fivth_period; ?></td>
										              <td><?php echo $sixth_period; ?></td>
												      <td><a href="update_routine.php?id=<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a></td>
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