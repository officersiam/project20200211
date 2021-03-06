<?php include ("header.php"); ?>

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
        <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="vendor/morris/morris.css" />
<?php include ("aside.php"); ?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>ড্যাশবোর্ড</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fas fa-home"></i>
                                        <span>ড্যাশবোর্ড</span>
									</a>
								</li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-primary mb-3">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-primary">
                                                        <i class="fas fa-user-graduate"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">ছাত্র-ছাত্রী</h4>
  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'student' ORDER BY id DESC");
    $count = mysqli_num_rows($sql);
   ?>
                                                        <div class="info">
                                                            <strong class="amount"><?php echo $count; ?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="students.php">(view all)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-secondary">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-secondary">
                                                        <i class="fas fa-chalkboard-teacher"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">শিক্ষক</h4>
  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'teacher' ORDER BY id DESC");
    $count = mysqli_num_rows($sql);
   ?>
                                                        <div class="info">
                                                            <strong class="amount"><?php echo $count; ?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="teachers.php">(view all)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-tertiary mb-3">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-tertiary">
                                                        <i class="fas fa-users-cog"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">কর্মচারী</h4>
  <?php
    $sql = $db->query("SELECT * FROM users WHERE user_type = 'staff' ORDER BY id DESC");
    $count = mysqli_num_rows($sql);
   ?>
                                                        <div class="info">
                                                            <strong class="amount"><?php echo $count; ?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="staffs.php">(view all)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-xl-6">
                                    <section class="card card-featured-left card-featured-quaternary">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-quaternary">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">সদস্য</h4>
  <?php
    $sql = $db->query("SELECT * FROM users ORDER BY id DESC");
    $count = mysqli_num_rows($sql);
   ?>
                                                        <div class="info">
                                                            <strong class="amount"><?php echo $count; ?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <a class="text-muted text-uppercase" href="users.php">(view all)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-12 mb-3">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<h2>
													আয়/ব্যায়:
													<strong>
														<select class="form-control" id="salesSelector">
															<option value="FFSR" selected>ফিউচার ফাউন্ডেশন স্কুল, রংপুর</option>
															<option value="AAF" >অরণ্য এগ্রো ফার্ম</option>
														</select>
													</strong>
												</h2>

												<div id="salesSelectorItems" class="chart-data-selector-items mt-3">
													<!-- Flot: FFSR -->
													<div class="chart chart-sm" data-sales-rel="FFSR" id="flotDashSales1" class="chart-active" style="height: 203px;"></div>
													<script>

														var flotDashSales1Data = [{
														    data: [
														        ["Jan", 140],
														        ["Feb", 240],
														        ["Mar", 190],
														        ["Apr", 140],
														        ["May", 180],
														        ["Jun", 320],
														        ["Jul", 270],
                                                                ["Aug", 180],
                                                                ["Sep", 480],
                                                                ["Oct", 210],
                                                                ["Nov", 110],
														        ["Dec", 510]
														    ],
														    color: "#0088cc"
														}];

														// See: js/examples/examples.dashboard.js for more settings.

													</script>

													<!-- Flot: AAF -->
													<div class="chart chart-sm" data-sales-rel="AAF" id="flotDashSales2" class="chart-hidden"></div>
													<script>

														var flotDashSales2Data = [{
														    data: [
														        ["Jan", 240],
														        ["Feb", 240],
														        ["Mar", 290],
														        ["Apr", 540],
														        ["May", 480],
														        ["Jun", 220],
														        ["Jul", 170],
														        ["Aug", 190],
                                                                ["Sep", 480],
                                                                ["Oct", 210],
                                                                ["Nov", 110],
                                                                ["Dec", 510]
														    ],
														    color: "#2baab1"
														}];

														// See: js/examples/examples.dashboard.js for more settings.

													</script>
												</div>

											</div>
										</div>
										<div class="col-xl-4 text-center">
											<h2 class="card-title mt-3">আয় এবং ব্যায়</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-3">
												<div class="liquid-meter">
													<meter min="0" max="100" value="35" id="meterSales"></meter>
												</div>
												<div class="liquid-meter-selector mt-4 pt-1" id="meterSalesSel">
													<a href="#" data-val="35" class="active">মাসিক আয়/ব্যায়</a>
													<a href="#" data-val="28">বাৎসরিক আয়/ব্যায়</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

					<div class="row pt-4">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">আসিতেছে</h2>
									<p class="card-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using Siam Al Mahmud's Website.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Basic -->
									<div class="chart chart-md" id="flotDashBasic"></div>
									<script>

										var flotDashBasicData = [{
											data: [
												[0, 170],
												[1, 169],
												[2, 173],
												[3, 188],
												[4, 147],
												[5, 113],
												[6, 128],
												[7, 169],
												[8, 173],
												[9, 128],
												[10, 128]
											],
											label: "Series 1",
											color: "#0088cc"
										}, {
											data: [
												[0, 115],
												[1, 124],
												[2, 114],
												[3, 121],
												[4, 115],
												[5, 83],
												[6, 102],
												[7, 148],
												[8, 147],
												[9, 103],
												[10, 113]
											],
											label: "Series 2",
											color: "#2baab1"
										}, {
											data: [
												[0, 70],
												[1, 69],
												[2, 73],
												[3, 88],
												[4, 47],
												[5, 13],
												[6, 28],
												[7, 69],
												[8, 73],
												[9, 28],
												[10, 28]
											],
											label: "Series 3",
											color: "#734ba9"
										}];

										// See: js/examples/examples.dashboard.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
									<h2 class="card-title">আসিতেছে</h2>
									<p class="card-subtitle">It's easy to create custom graphs on Siam Al Mahmud's Website, there are several graph types that you can use.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Curves -->
									<div class="chart chart-md" id="flotDashRealTime"></div>

								</div>
							</section>
						</div>
					</div>

					<div class="row pt-4 mt-2">
						<div class="col-lg-6 col-xl-6">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">প্রোফাইল</h2>
								</header>
								<div class="card-body">
									<section class="card card-group">
										<header class="card-header bg-primary">
<?php  if (isset($_SESSION['user'])) : ?>
											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="images/logo.png">
												</div>
												<div class="profile-info">
													<h4 class="name font-weight-semibold"><?php echo $_SESSION['user']['username']; ?></h4>
													<h5 class="role"><?php echo ucfirst($_SESSION['user']['user_type']); ?></h5>
													<div class="profile-footer">
														<a href="#">(edit profile)</a>
													</div>
												</div>
											</div>
<?php endif ?>
										</header>
										<div id="accordion" class="w-100">
											<div class="card card-accordion card-accordion-first">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fas fa-check mr-1"></i> Tasks
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse show">
													<div class="card-body">
														<ul class="widget-todo-list">
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Curabitur ac sem at nibh egestas urabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Curabitur ac sem at nibh egestas</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem4" class="todo-check">
																	<label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem6" class="todo-check">
																	<label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem7" class="todo-check">
																	<label class="todo-label" for="todoListItem7"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
														</ul>
														<hr class="solid mt-3 mb-3">
														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group row">
																<div class="col-sm-12">
																	<div class="input-group mb-3">
																		<input type="text" class="form-control">
																		<div class="input-group-append">
																			<button type="button" class="btn btn-primary" tabindex="-1">Add</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="card card-accordion">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
															 <i class="fas fa-comment mr-1"></i> Messages
														</a>
													</h4>
												</div>
												<div id="collapse1Two" class="accordion-body collapse">
													<div class="card-body">
														<ul class="simple-user-list mb-3">
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</section>
						</div>
						<div class="col-lg-6 col-xl-6">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">My Stats</h2>
								</header>
								<div class="card-body">
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineBarDash"></div>
											<script type="text/javascript">
												var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
											</script>
											<div class="h4 font-weight-bold mb-0">488</div>
											<p class="text-3 text-muted mb-0">Average Profile Visits</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="circular-bar circular-bar-xs m-0 mt-1 mr-4 mb-0 float-right">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
													<strong>Average</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 font-weight-bold mb-0">12</div>
											<p class="text-3 text-muted mb-0">Working Projects</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineLineDash"></div>
											<script type="text/javascript">
												var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
											</script>
											<div class="h4 font-weight-bold mb-0">89</div>
											<p class="text-3 text-muted mb-0">Pending Tasks</p>
										</div>
									</section>
								</div>
							</section>
							<section class="card mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">
										<span class="badge badge-primary font-weight-normal va-middle p-2 mr-2">198</span>
										<span class="va-middle">আসিতেছে</span>
									</h2>
								</header>
								<div class="card-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-append">
											<button class="btn btn-default" type="submit"><i class="fas fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>
						</div>
                        <div class="col-xl-12">
                            <section class="card card-transparent mb-3">
                                <header class="card-header">
                                    <div class="card-actions">
                                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                    </div>

                                    <h2 class="card-title">Global Stats</h2>
                                </header>
                                <div class="card-body">
                                    <div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
                                </div>
                            </section>
                        </div>
					</div>
					<div class="row pt-4 mt-1">
						<div class="col-xl-12">
							<section class="card">
								<header class="card-header card-header-transparent">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">আসিতেছে</h2>
								</header>
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Project</th>
												<th>Status</th>
												<th>Progress</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Website - Responsive HTML5 Template</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Website - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Tucson - Responsive HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															60%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Tucson - Responsive Business WordPress Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
															90%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Website - Responsive Admin HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
															45%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Website - Responsive HTML5 Template</td>
												<td><span class="badge badge-danger">Danger</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
															40%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Website - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
															95%
														</div>
													</div>
												</td>
											</tr>
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
        <script src="vendor/jquery-ui/jquery-ui.js"></script>
        <script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="vendor/jquery-appear/jquery.appear.js"></script>
        <script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
        <script src="vendor/flot/jquery.flot.js"></script>
        <script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
        <script src="vendor/flot/jquery.flot.pie.js"></script>
        <script src="vendor/flot/jquery.flot.categories.js"></script>
        <script src="vendor/flot/jquery.flot.resize.js"></script>
        <script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="vendor/raphael/raphael.js"></script>
        <script src="vendor/morris/morris.js"></script>
        <script src="vendor/gauge/gauge.js"></script>
        <script src="vendor/snap.svg/snap.svg.js"></script>
        <script src="vendor/liquid-meter/liquid.meter.js"></script>
        <script src="vendor/jqvmap/jquery.vmap.js"></script>
        <script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
<?php include("footer.php"); ?>