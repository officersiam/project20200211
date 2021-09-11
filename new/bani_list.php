<?php include ("header.php"); ?>

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
<?php include ("aside.php"); ?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>বাণী</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>বাণী</span></li>
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

										<h2 class="card-title">সকল বাণী</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a href="add_bani.php" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
									              <th>আইডি</th>
									              <th>ছবি</th>
									              <th>নাম</th>
									              <th>টাইটেল</th>
									              <th>বাণী</th>
									              <th>Date</th>
									              <th><i class="fas fa-pencil-alt"></i></th>
												</tr>
											</thead>
											<tbody>
  <?php
    $sql = $db->query("SELECT * FROM principle_gift ORDER BY id");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $principle_img = $row['principle_img'];
        $principle_name = $row['principle_name'];
        $principle_title = $row['principle_title'];
        $principle_msg = $row['principle_msg'];
        $date = $row['date'];
   ?>
												<tr data-item-id="<?php echo $id; ?>">
													<td><?php echo $id; ?></td>
												      <td><img src="../img/bani/<?php echo $principle_img; ?>" width="60px" alt="future foundation school" /></td>
												      <td><?php echo $principle_name; ?></td>
												      <td><?php echo $principle_title; ?></td>
												      <td><?php echo $principle_msg; ?></td>
												      <td><?php echo $date; ?></td>
												      <td><a href="update_bani.php?id=<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a></td>
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