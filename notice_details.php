<?php
    $id = $_GET['id'];
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
<?php
$sql = $db->query("SELECT * FROM notice WHERE id = '$id' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!";
}else{
while ($row = mysqli_fetch_array($sql)) {
$notice_title = $row['notice_title'];
$notice_details = $row['notice_details'];
$notice_file = $row['notice_file'];
?>
					<center><h3><?php echo $notice_title; ?></h3>
					<p style="text-align:justify"><?php echo $notice_details; ?></p>
					<p><a href="file/notice/<?php echo $notice_file; ?>"><?php echo $notice_file; ?></a></p></center>
<?php }} ?>
				</div>
			</div>
		</div>
	</div>
	</section>
<?php include ("footer.php"); ?>