<?php
    $class = $_GET['class'];
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
<?php
$sql = $db->query("SELECT * FROM classes WHERE tag = '$class' ");
while ($row = mysqli_fetch_array($sql)) {
$class_name = $row['class_name'];
?>
				<br/><center><h2 class="pageTitle"><?php echo $class_name; ?></h2></center>
<?php } ?>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="about-logo">
                    <center style="border:2px solid #FF5733;color:#000;box-shadow:3px 3px 5px #EF801A"><h3 style="text-decoration:underline"><?php echo $class_name; ?> শ্রেণিতে ভর্তির জন্য যা থাকতে হবেঃ</h3>
<?php
$sql = $db->query("SELECT * FROM classes WHERE tag = '$class' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!";
}else{
while ($row = mysqli_fetch_array($sql)) {
$tag = $row['tag'];
$class_name = $row['class_name'];
$class_icon = $row['class_icon'];
$class_details = $row['class_details'];
?>
					<p style="text-align:justify;margin:10px"><?php echo $class_details; ?></p>
<?php }} ?><br/></center><br/>
                    <div style="border:2px solid #EF801A;color:#000;box-shadow:3px 3px 5px #EF801A">
                    <center><h3 style="text-decoration:underline"><?php echo $class_name; ?> ক্লাসের বইয়ের তালিকা</h3></center>
<?php
$sql = $db->query("SELECT * FROM booklist WHERE lebel = '$class' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
$books = $row['books'];
?>
                    <p style="text-align:justify;margin:10px"><?php echo $books; ?></p>
<?php }} ?></div><br/>
                    <div style="border:2px solid #EF801A;color:#000;box-shadow:3px 3px 5px #EF801A">
                    <center><h3 style="text-decoration:underline"><?php echo $class_name; ?> ক্লাসের স্টেশনারীর তালিকা</h3></center>
<?php
$sql = $db->query("SELECT * FROM class_stationary WHERE class = '$class' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $details = $row['details'];
?>
                    <p style="text-align:justify;margin:10px"><?php echo $details; ?></p>
<?php }} ?></div><br/>
                    <div class="table-responsive" style="border:2px solid #EF801A;color:#000;box-shadow:3px 3px 5px #EF801A">
                    <center><h3 style="text-decoration:underline"><?php echo $class_name; ?> ক্লাসের রুটিন</h3></center>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">দিন</th>
                                  <th scope="col">১ম পিরিয়ড</th>
                                  <th scope="col">২য় পিরিয়ড</th>
                                  <th scope="col">৩য় পিরিয়ড</th>
                                  <th scope="col">৪র্থ পিরিয়ড</th>
                                  <th scope="col">৫ম পিরিয়ড</th>
                                  <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                                </tr>
                              </thead>
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$class' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];
?>

                            <tr>
                              <th scope="row"><?php echo $day; ?></th>
                              <td><?php echo $first_period; ?></td>
                              <td><?php echo $second_period; ?></td>
                              <td><?php echo $third_period; ?></td>
                              <td><?php echo $fourth_period; ?></td>
                              <td><?php echo $fivth_period; ?></td>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }} ?></div>
                          </tbody>
                        </table>

				</div>
			</div>
		</div>
	</div>
	</section>
<?php include ("footer.php"); ?>