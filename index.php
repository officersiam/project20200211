<?php include("functions.php");?>
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
    $site_icon = $row['site_icon'];
    ?>
<title><?php echo $seo_site_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo $seo_site_description; ?>" />
<meta name="keywords" content="<?php echo $seo_site_keyword; ?>" />
<meta name="author" content="<?php echo $seo_site_title; ?>" />
 <link rel="icon" href="img/<?php echo $site_icon; ?>" type="image/gif" sizes="16x16">
    <?php } ?>
<!-- css -->
<?php include ("header.php"); ?>
	<section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                   <!-- Slider -->
                    <div id="main-slider" class="flexslider">
                        <ul class="slides">
    <?php
    $sql = $db->query("SELECT * FROM slider WHERE lebel = 'home'");
    while ($row = mysqli_fetch_array($sql)) {
    $slider_img = $row['slider_img'];
    $slider_title = $row['slider_title'];
    $slider_details = $row['slider_details'];
    ?>
                          <li>
                            <img src="img/slides/<?php echo $slider_img; ?>" alt="" />
                            <div class="flex-caption">
                                <h3><?php echo $slider_title; ?></h3>
                                <p><?php echo $slider_details; ?></p>
                            </div>
                          </li>
    <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" style="border:2px solid #FF5733;background:#fff;margin-top:20px;height: 714px;">
    <?php
    $sql = $db->query("SELECT * FROM principle_gift WHERE lebel = 'principle'");
    while ($row = mysqli_fetch_array($sql)) {
    $principle_img = $row['principle_img'];
    $principle_name = $row['principle_name'];
    $principle_title = $row['principle_title'];
    $principle_msg = $row['principle_msg'];
    ?>
                    <br><center><img src="img/bani/<?php echo $principle_img; ?>" alt="" height="250px" width="250px" />
                    <h3><?php echo $principle_name; ?><span style="font-size:14px">(<?php echo $principle_title; ?>)</span></h3></center><hr>
                    <p style="text-align:justify"><?php echo $principle_msg; ?></p>
    <?php } ?>
                </div>
                <div class="col-md-6 col-sm-12" style="border:2px solid #FF5733;background:#fff;margin-top:20px;height: 714px;">
                <?php
                $sql = $db->query("SELECT * FROM principle_gift WHERE lebel = 'director'");
                while ($row = mysqli_fetch_array($sql)) {
                $principle_img = $row['principle_img'];
                $principle_name = $row['principle_name'];
                $principle_title = $row['principle_title'];
                $principle_msg = $row['principle_msg'];
                ?>
                    <br><center><img src="img/bani/<?php echo $principle_img; ?>" alt="" height="250px" width="250px" />
                    <h3><?php echo $principle_name; ?><span style="font-size:14px">(<?php echo $principle_title; ?>)</span></h3></center><hr>
                    <p style="text-align:justify"><?php echo $principle_msg; ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
	<!-- end slider -->
	</section>
	<section id="call-to-action-2">
		<div class="container">
			<div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="notice" style="border:2px solid #CD00FF;background:#fff;height: 382px;text-align:justify">
                        <center><h3 style="color:#000;border-bottom:2px solid #000">নোটিশ</h3></center>
                        <marquee behavior="scroll" height="300px" scrolldelay="300" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                        <ol class="url_category" style="margin-left:30px;padding:0;">
        <?php
        $sql = $db->query("SELECT * FROM notice WHERE lebel = 'home' ORDER BY id DESC");
        while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $notice_title = $row['notice_title'];
        ?>
                          <li>
                            <a href="notice_details.php?id=<?php echo $id; ?>" style="color:#000"><?php echo $notice_title; ?></a>
                          </li><br/>
        <?php } ?>
                        </ol></marquee>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="details" style="border:2px solid #FF5733;background:#fff;">
                            <?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
    $school_location = $row['school_location'];
    $school_details = $row['school_details'];
    ?>
                    <h1><center><?php echo $school_name; ?></center><center><span style="font-size:14px"><?php echo $school_location; ?></span></center></h1><hr>
                    <p style="color:#000;text-align:justify;margin:10px"><?php echo $school_details; ?></p>
                    <center><a href="#" class="btn btn-danger">Read More</a></center><br/>
    <?php } ?>
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="important_links" style="border:2px solid #CD00FF;background:#fff;height: 382px;text-align:justify">
                        <center><h3 style="color:#000;border-bottom:2px solid #000">Important Links</h3></center>
                        <ul class="important_links">
        <?php
        $sql = $db->query("SELECT * FROM links WHERE lebel = 'important'");
        while ($row = mysqli_fetch_array($sql)) {
        $link = $row['link'];
        $title = $row['title'];
        ?>
                          <li>
                            <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                          </li>
        <?php } ?>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<section id="content">


	<div class="container">
    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">শ্রেণিসমূহ</h2></div>
				<br/>
			</div>
	    </div>
		<div class="row">
		    <div class="skill-home">
                <div class="skill-home-solid clearfix"><?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $class_icon = $row['class_icon'];
    $class_name = $row['class_name'];
    $discription = $row['discription'];
    ?>
            		<div class="col-md-3 text-center" style="margin-bottom:10px">

                		<span class="icons c1"><i class="<?php echo $class_icon; ?>"></i></span>
                        <div class="box-area">
                    		<h3><?php echo $class_name; ?></h3>
                            <p><?php echo $discription; ?></p>
                        </div>
            		</div><br>
    <?php } ?>
        		</div>
            </div>
		</div>


	</div>
	</section>

	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>প্রতিষ্ঠানের কার্যক্রমসমূহ</h2>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MAayKw1TonQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SwSIT4u19Zw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
                <div class="col-md-12 col-sm-12"><br/>
                    <center><a href="https://www.youtube.com/channel/UC9RzN2xRkiYfiCG54LgmiVQ" class="btn btn-primary">আরও কার্যক্রমসমূহ</a></center>
                </div>
			</div>
		</div>
	</section>
    <div class="about home-about">
                <div class="container">

                        <div class="row">
                            <div class="col-md-4 timetable">
                                <!-- Heading and para -->
                                <div class="block-heading-two">
                                    <h3><span>আমাদের ঠিকানা</span></h3>
                                </div><hr>
                                <address>
                                <strong style="color:#000">আমতলা, মূলাটোল, রংপুর মহা নগর, রংপুর</address>
                                <p style="color:#000">
                                    <i class="icon-phone"></i> (+880) 171 113 0293 <br>
                                    <i class="icon-envelope-alt"></i> futurefoundationschoolrangpur@gmail.com
                                </p>
                            </div>

                            <div class="col-md-4 timetable">
                                <div class="block-heading-two">
                                    <h3><span>আজকের রুটিন</span></h3>
                                </div><hr>
                                <!-- Accordion starts -->
                                <div class="panel-group" id="accordion-alt3">

    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '1' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>









    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '2' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>







    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '3' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>







    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '4' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>






    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '5' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>






    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '6' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>





    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '7' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>





    <?php
    $sql = $db->query("SELECT * FROM classes Where id = '8' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                  <div class="panel">
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $tag; ?>-alt3">
                                            <i class="fa fa-angle-right"></i> <?php echo $class_name; ?>
                                          </a>
                                        </h4>
                                     </div>

                                     <div id="collapse<?php echo $tag; ?>-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body"><table class="table table-bordered">
                              <tbody>
<?php
$sql = $db->query("SELECT * FROM class_routine WHERE lebel = '$tag' ");
$count = mysqli_num_rows($sql);
if ($count == 0) {
echo "no result!<br/>";
}else{
while ($row = mysqli_fetch_array($sql)) {
        $day = $row['day'];
        $dateD = $row['dateD'];
        $first_period = $row['first_period'];
        $second_period = $row['second_period'];
        $third_period = $row['third_period'];
        $fourth_period = $row['fourth_period'];
        $fivth_period = $row['fivth_period'];
        $sixth_period = $row['sixth_period'];


        if ( date('D') == $dateD ){
?>
                            <tr>
                              <th scope="col">১ম পিরিয়ড</th>
                              <td><?php echo $first_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">২য় পিরিয়ড</th>
                              <td><?php echo $second_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৩য় পিরিয়ড</th>
                              <td><?php echo $third_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৪র্থ পিরিয়ড</th>
                              <td><?php echo $fourth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৫ম পিরিয়ড</th>
                              <td><?php echo $fivth_period; ?></td>
                            </tr>
                            <tr>
                              <th scope="col">৬ষ্ঠ পিরিয়ড</th>
                              <td><?php echo $sixth_period; ?></td>
                            </tr>
<?php }else{
}}} ?>
                          </tbody>
                        </table>
                                        </div>
                                     </div>
                                  </div>
    <?php }} ?>
                                </div>
                                <!-- Accordion ends -->

                            </div>

                            <div class="col-md-4">
                                <div class="timetable">
                                  <h3><span class="fa fa-clock-o"></span>বিশেষ ক্লাসের সময়</h3>
                                  <hr>
                                  <dl>
                                    <dt style="color:#17A05D">* গানের ক্লাস</dt>
                                    <dd>বৃহস্পতিবার, শনিবার</dd>
                                  </dl>
                                  <dl>
                                    <dt style="color:#DD5246">* ছবি আঁকার ক্লাস</dt>
                                    <dd>বুধবার, বৃহস্পতিবার</dd>
                                  </dl>
                                </div>
                            </div>

                        </div>



                        <br>

                      </div>

                    </div>
<?php include ("footer.php"); ?>