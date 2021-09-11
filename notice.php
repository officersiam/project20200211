<?php
    include("functions.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--<meta http-equiv="refresh" content="30">-->
    <?php
    $sql = $db->query("SELECT * FROM site_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $seo_site_description = $row['seo_site_description'];
    $seo_site_keyword = $row['seo_site_keyword'];
    $seo_site_title = $row['seo_site_title'];
    ?>
<title><?php echo $seo_site_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo $seo_site_description; ?>" />
<meta name="keywords" content="<?php echo $seo_site_keyword; ?>" />
<meta name="author" content="<?php echo $seo_site_title; ?>" />
    <?php } ?>
<!-- css -->
<?php include ("header.php"); ?>
	<section id="inner-headline">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">নোটিশ</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="about-logo">
<table class="table table-bordered">
  <thead class="thead">
    <tr>
      <th scope="col"><center>#</center></th>
      <th scope="col"><center>Notice</center></th>
    </tr>
  </thead>
    <?php
    $sql = $db->query("SELECT * FROM notice Order by id DESC");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    $notice_title = $row['notice_title'];
    ?>
  <tbody>
    <tr>
      <th scope="row"><center><i class="fas fa-flag"></i></center></th>
      <td><a style="color:#000" href="notice_details.php?id=<?php echo $id; ?>"><?php echo $notice_title; ?></a></td>
    </tr>
    <?php } } ?>
  </tbody>
</table>
				</div>
			</div>
		</div>
	</div>
	</section>
<?php include ("footer.php"); ?>