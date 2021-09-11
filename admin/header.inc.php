<?php include ('../functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    $sql = $db->query("SELECT * FROM site_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $seo_site_title = $row['seo_site_title'];
    $site_icon = $row['site_icon'];
    ?>
  <meta name="author" content="Siam Al Mahmud">


  <title><?php echo $seo_site_title; ?> | Admin Panel</title>
  <!-- Custom fonts for this template-->
  <link rel="icon" href="images/<?php echo $site_icon; ?>" type="image/png">

    <?php } ?>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <link rel="stylesheet" href="../minified/themes/default.min.css" id="theme-style" />

    <script src="../minified/sceditor.min.js"></script>
    <script src="../minified/icons/monocons.js"></script>
    <script src="../minified/formats/xhtml.js"></script>

    <style>
      form div {
        padding: .5em;
      }
      code:before {
        position: absolute;
        content: 'Code:';
        top: -1.35em;
        left: 0;
      }
      code {
        margin-top: 1.5em;
        position: relative;
        background: #eee;
        border: 1px solid #aaa;
        white-space: pre;
        padding: .25em;
        min-height: 1.25em;
      }
      code:before, code {
        display: block;
        text-align: left;
      }
    </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">
          <img src="images/logo.png" width="60px">
        </div>
        <div class="sidebar-brand-text mx-3">FFSR</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>ড্যাশবোর্ড</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        আসল মেন্যু
      </div>
    <?php if (isAdmin() || isTeacher() || isStaff()) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#User" aria-expanded="true" aria-controls="User">
          <i class="fas fa-users"></i>
          <span>সদস্যসমূহ</span>
        </a>
        <div id="User" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddNewTeacher">নতুন শিক্ষক/কর্মচারী যোগ</a>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddNewStudent">নতুন ছাত্র-ছাত্রী যোগ</a>
            <h6 class="collapse-header">সদস্য তালিকা:</h6>
            <a class="collapse-item" href="teachers.php">শিক্ষকগণ</a>
            <a class="collapse-item" href="staffs.php">কর্মচারীগণ</a>
            <a class="collapse-item" href="students.php">ছাত্র-ছাত্রীরা</a>
            <a class="collapse-item" href="users.php">সকল সদস্যসগণ</a>
          </div>
        </div>
      </li>


  <!-- Logout Modal-->
  <div class="modal fade" id="AddNewTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন শিক্ষক/কর্মচারী যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিক্ষকের/কর্মচারীর ডাক নাম</label>
                <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="শিক্ষকের/কর্মচারীর ডাক নাম *(ইংরেজিতে ছোট হাতের)">
                <p style="color:red">* শিক্ষকের ডাক নাম ইংরেজিতে হবে।</p>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিক্ষকের/কর্মচারীর পুরো নাম</label>
                <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName" placeholder="শিক্ষকের/কর্মচারীর পুরো নাম">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিক্ষকের/কর্মচারীর ই-মেইল ঠিকানা</label>
                <input type="text" name="email" class="form-control form-control-user" id="exampleFirstName" placeholder="শিক্ষকের/কর্মচারীর ই-মেইল ঠিকানা">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিক্ষকের/কর্মচারীর জন্ম তারিখ</label>
                <input type="text" name="birth" class="date form-control form-control-user" id="exampleFirstName" placeholder="শিক্ষকের/কর্মচারীর জন্ম তারিখ" data-uk-datepicker="{format:'DD.MM.YYYY'}">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">বাসার ঠিকানা</label>
                <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" placeholder="বাসার ঠিকানা">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিক্ষকের/কর্মচারীর পদবী</label>
                <input type="text" name="designation" class="form-control form-control-user" id="exampleLastName" placeholder="শিক্ষকের/কর্মচারীর পদবী">
                <p style="color:red">* বিশেষ করে সহকারী শিক্ষক।</p>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মোবাইল নাম্বার *</label>
                <input type="tel" name="phone" class="form-control form-control-user" id="exampleLastName" placeholder="মোবাইল নাম্বার">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">রক্তের গ্রুপ</label>
                <input type="text" name="blood_group" class="form-control form-control-user" id="exampleLastName" placeholder="রক্তের গ্রুপ">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">কাজের বিবরণ</label>
                <input type="text" name="details" class="form-control form-control-user" id="exampleLastName" placeholder="কাজের বিবরণ">
              </div>
            </div>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মর্যাদা</label>
            <select name="user_type" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="teacher">শিক্ষক/শিক্ষিকা</option>
                <option value="staff">কর্মচারী</option>
                <option value="admin">ডেভেলপার/মালিক</option>
            </select>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড *</label>
                <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="পাসওয়ার্ড">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড আবার লিখুন *</label>
                <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="পাসওয়ার্ড আবার লিখুন">
              </div>
            </div>
          <hr>
            <button class="btn btn-primary btn-user btn-block" name="register_btn" type="submit">রেজিস্টার করুন</button>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="AddNewStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন ছাত্র/ছাত্রী যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="students.php">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ছাত্র/ছাত্রীর ডাক নাম *</label>
                <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="ছাত্র/ছাত্রীর ডাক নাম">
                <p style="color:red">* ছাত্র/ছাত্রীর ডাক নাম ইংরেজিতে হবে।</p>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ছাত্র/ছাত্রীর পুরো নাম</label>
                <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName" placeholder="ছাত্র/ছাত্রীর পুরো নাম">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">বাবার নাম</label>
                <input type="text" name="father_name" class="form-control form-control-user" id="exampleFirstName" placeholder="বাবার নাম">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মায়ের নাম</label>
                <input type="text" name="mother_name" class="form-control form-control-user" id="exampleFirstName" placeholder="মায়ের নাম">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">বাসার ঠিকানা</label>
                <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" placeholder="বাসার ঠিকানা">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">মোবাইল নাম্বার *</label>
                <input type="tel" name="phone" class="form-control form-control-user" id="exampleLastName" placeholder="মোবাইল নাম্বার">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">জন্মতারিখ *</label>
                <input type="text" name="birth" class="date form-control form-control-user" id="exampleLastName" placeholder="জন্মতারিখ" readonly>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">রক্তের গ্রুপ</label>
                <input type="text" name="blood_group" class="form-control form-control-user" id="exampleLastName" placeholder="রক্তের গ্রুপ"><br>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শ্রেণি</label>
            <select name="class_name" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="play">অংকুর (প্লে)</option>
                <option value="nursery">কলি (নার্সারী)</option>
                <option value="kg">কুসুম (কেজি)</option>
                <option value="one">১ম</option>
                <option value="two">২য়</option>
                <option value="three">৩য়</option>
                <option value="four">৪র্থ</option>
                <option value="five">৫ম</option>
            </select><br>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">শিফট</label>
            <select name="shift" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="morning">পদ্মা (মর্নিং)</option>
                <option value="day">মেঘনা (ডে)</option>
            </select>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">সেকশন</label>
                <input type="text" name="section" class="form-control form-control-user" id="exampleLastName" placeholder="সেকশন">
              </div>
            </div>
            <div class="form-group">
            <input type="text" name="user_type" class="form-control form-control-user" id="exampleLastName" value="student" hidden>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">রোল</label>
                <input type="text" name="roll" class="form-control form-control-user" id="exampleLastName" placeholder="রোল">
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড *</label>
                <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="পাসওয়ার্ড">
              </div>
              <div class="col-sm-6">
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">পাসওয়ার্ড আবার লিখুন *</label>
                <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="পাসওয়ার্ড আবার লিখুন">
              </div>
            </div>
          <hr>
            <button class="btn btn-primary btn-user btn-block" name="register_btn" type="submit">রেজিস্টার করুন</button>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>


    <?php if (isAdmin()) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#StudentOne" aria-expanded="true" aria-controls="StudentOne">
          <i class="fas fa-users"></i>
          <span>ক্লাস</span>
        </a>
        <div id="StudentOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
            <a class="collapse-item" href="class_details.php?class=<?php echo $tag; ?>"><?php echo $class_name; ?></a>
    <?php } ?>
          </div>
        </div>
      </li>
    <?php } ?>
    <?php if (isAdmin()) { ?>
    <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="book_list.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>বইয়ের তালিকা</span></a>
      </li>
    <?php } ?>


    <?php if (isAdmin()) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#StationaryOne" aria-expanded="true" aria-controls="StationaryOne">
          <i class="fas fa-users"></i>
          <span>শ্রেণিভিত্তিক স্টেশনারীর তালিকা</span>
        </a>
        <div id="StationaryOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
            <a class="collapse-item" href="class_stationary_list.php?class=<?php echo $tag; ?>"><?php echo $class_name; ?></a>
    <?php } ?>
          </div>
        </div>
      </li>
    <?php } ?>


    <?php if (isAdmin()) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ClassRoutine" aria-expanded="true" aria-controls="ClassRoutine">
          <i class="fas fa-users"></i>
          <span>ক্লাস রুটিন</span>
        </a>
        <div id="ClassRoutine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
            <a class="collapse-item" href="class_routine.php?class=<?php echo $tag; ?>"><?php echo $class_name; ?></a>
    <?php } ?>
          </div>
        </div>
      </li>
    <?php } ?>
    <?php if (isAdmin()) { ?>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiteSetting" aria-expanded="true" aria-controls="collapseSiteSetting">
          <i class="fas fa-photo-video"></i>
          <span>সেটিংস</span>
        </a>
        <div id="collapseSiteSetting" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">সকল সেটিংস:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#Update_Site_Settings">সাইট সেটিংস</a>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#Update_School_Settings">প্রতিষ্ঠানের সেটিংস</a>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="Update_Site_Settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">আপডেট সাইট সেটিংস</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="index.php">
              <?php echo display_error(); ?>
              <br/><br/>
    <?php
    $sql = $db->query("SELECT * FROM site_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $site_name = $row['site_name'];
    $site_icon = $row['site_icon'];
    $seo_site_title = $row['seo_site_title'];
    $seo_site_keyword = $row['seo_site_keyword'];
    $seo_site_description = $row['seo_site_description'];
    $extension = $row['extension'];
    ?>
              <label for="inputname" style="font-size:20px;color:#000">সাইটের নাম</label>
              <input type="text" name="site_name" class="form-control form-control-user" value="<?php echo $site_name; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">এসইও সাইটের শিরোনাম</label>
              <input type="text" name="seo_site_title" class="form-control form-control-user" value="<?php echo $seo_site_title; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">এসইও কিওয়ার্ডস</label>
              <input type="text" name="seo_site_keyword" class="form-control form-control-user" value="<?php echo $seo_site_keyword; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">এসইও বিস্তারিত</label>
              <input type="text" name="seo_site_description" class="form-control form-control-user" value="<?php echo $seo_site_description; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">এক্সটেনশন</label>
              <input type="text" name="extension" class="form-control form-control-user" value="<?php echo $extension; ?>"><br/>
              <button class="btn btn-primary btn-user btn-block" name="site_settings_update" type="submit">যোগ</button>
              <br/><br/>
            </form><br/>

            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="index.php">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">সাইটের লোগো</label><br/>
              <img src="../img/<?php echo $site_icon; ?>" alt="Future Foundation School, Rangpur">
                <input name="site_icon" class="form-control-file" type="file">
              <button class="btn btn-primary btn-user btn-block" name="logo" type="submit">যোগ</button>
              <br/><br/>
    <?php } ?>
            </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="Update_School_Settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">প্রতিষ্টানের সেটিংস আপডেট</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
    <?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
    $school_icon = $row['school_icon'];
    $school_contact_no = $row['school_contact_no'];
    $school_mail_address = $row['school_mail_address'];
    $school_location = $row['school_location'];
    $school_details = $row['school_details'];
    ?>
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="index.php">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের নাম</label>
              <input type="text" name="school_name" class="form-control form-control-user" value="<?php echo $school_name; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের যোগাযোগের নাম্বার</label>
              <input type="text" name="school_contact_no" class="form-control form-control-user" value="<?php echo $school_contact_no; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের ই-মেইল ঠিকানা</label>
              <input type="text" name="school_mail_address" class="form-control form-control-user" value="<?php echo $school_mail_address; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের ঠিকানা</label>
              <input type="text" name="school_location" class="form-control form-control-user" value="<?php echo $school_location; ?>"><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের বিস্তারিত</label>
              <textarea type="text" name="school_details" class="form-control form-control-user"><?php echo $school_details; ?></textarea><br/>
              <button class="btn btn-primary btn-user btn-block" name="school_settings_update" type="submit">যোগ</button>
              <br/><br/>
            </form><br/>

            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="index.php">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রতিষ্ঠানের লোগো</label><br/>
              <img src="../img/school/<?php echo $school_icon; ?>" alt="Future Foundation School, Rangpur">
                <input name="school_icon" class="form-control-file" type="file">
              <button class="btn btn-primary btn-user btn-block" name="logo_school" type="submit">যোগ</button>
              <br/><br/>
            </form>
    <?php } ?>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin()) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Bani" aria-expanded="true" aria-controls="Bani">
          <i class="fas fa-users"></i>
          <span>বাণী</span>
        </a>
        <div id="Bani" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">সকল বাণী:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddBani">নতুন বাণী যোগ</a>
            <a class="collapse-item" href="bani_list.php">সকল বাণী</a>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddBani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন বাণী যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">ছবি</label><br/>
            <input name="principle_img" class="form-control-file" type="file"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নাম *</label>
            <input type="text" name="principle_name" class="form-control form-control-user" placeholder="নাম"><br/>
            <label for="inputname" style="font-size:20px;color:#000">টাইটেল *</label>
            <input type="text" name="principle_title" class="form-control form-control-user" placeholder="টাইটেল"><br/>
            <label for="inputname" style="font-size:20px;color:#000">বাণী *</label>
            <textarea type="text" name="principle_msg" class="form-control form-control-user" placeholder="বাণী"></textarea><br/>
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="principle_gift" type="submit">যোগ</button>
            <br/><br/>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin() || isTeacher() || isStaff()) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Notice" aria-expanded="true" aria-controls="Notice">
          <i class="fas fa-users"></i>
          <span>নোটিশ</span>
        </a>
        <div id="Notice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">নোটিশ সিস্টেম:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddNotice">নতুন নোটিশ যোগ</a>
            <a class="collapse-item" href="notice_list.php">নোটিশ গুলো</a>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddNotice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন নোটিশ যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশ টাইটেল *</label>
            <input type="text" name="notice_title" class="form-control form-control-user" placeholder="নোটিশ টাইটেল"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশের বিস্তারিত *</label>
            <input type="text" name="notice_details" class="form-control form-control-user" placeholder="নোটিশের বিস্তারিত"><br/>
            <label for="inputname" style="font-size:20px;color:#000">নোটিশ ফাইল বা ডকুমেন্ট</label><br/>
            <input name="notice_file" class="form-control-file" type="file">
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="notice" type="submit">যোগ</button>
            <br/><br/>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin() || isTeacher() || isStaff()) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Class" aria-expanded="true" aria-controls="Class">
          <i class="fas fa-users"></i>
          <span>শ্রেণি সমূহ</span>
        </a>
        <div id="Class" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">শ্রেণি:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddClass">নতুন শ্রেণি যোগ</a>
            <a class="collapse-item" href="classes_list.php">শ্রেণি সমূহ</a>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন শ্রেণি যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণি আইকন (ফন্ট অসাম থেকে) *</label>
            <input type="text" name="class_icon" class="form-control form-control-user" placeholder="শ্রেণি আইকন (ফন্ট অসাম থেকে)"><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির নাম *</label>
            <input type="text" name="class_name" class="form-control form-control-user" placeholder="শ্রেণির নাম"><br/>
              <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ক্লাস</label>
            <select name="class_name" id="tag" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="play">প্লে</option>
                <option value="nursery">নার্সারী</option>
                <option value="kg">কেজি</option>
                <option value="one">১ম</option>
                <option value="two">২য়</option>
                <option value="three">৩য়</option>
                <option value="four">৪র্থ</option>
                <option value="five">৫ম</option>
                <option value="six">৬ষ্ঠ</option>
                <option value="seven">৭ম</option>
                <option value="eight">৮ম</option>
                <option value="nine">৯ম</option>
                <option value="ten">১০ম</option>
                <option value="eleven">১১তম</option>
                <option value="twelve">১২তম</option>
            </select><br>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির বিবরণ *</label>
            <input type="text" name="discription" class="form-control form-control-user" placeholder="শ্রেণির  বিবরণ"><br/>
            <label for="inputname" style="font-size:20px;color:#000">শ্রেণির বিস্তারিত *</label>
            <input type="text" name="class_details" class="form-control form-control-user" placeholder="শ্রেণির বিস্তারিত"><br/>
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="classes_input" type="submit">যোগ</button>
            <br/><br/>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin() || isTeacher() || isStaff()) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Slider" aria-expanded="true" aria-controls="Slider">
          <i class="fas fa-users"></i>
          <span>স্লাইডার</span>
        </a>
        <div id="Slider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">স্লাইডার সিস্টেম:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddSlider">নতুন স্লাইডার যোগ</a>
            <a class="collapse-item" href="slider_list.php">স্লাইডারগুলো</a>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন স্লাইডার যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php echo display_error(); ?>
            <br/><br/>
            <label for="inputname" style="font-size:20px;color:#000">স্লাইডার টাইটেল *</label>
            <input type="text" name="slider_title" class="form-control form-control-user" placeholder="স্লাইডার টাইটেল"><br/>
            <label for="inputname" style="font-size:20px;color:#000">ছবি</label><br/>
            <input name="slider_img" class="form-control-file" type="file">
            <label for="inputname" style="font-size:20px;color:#000">বিস্তারিত *</label>
            <input type="text" name="slider_details" class="form-control form-control-user" placeholder="বিস্তারিত"><br/>
            <label for="inputname" style="font-size:20px;color:#000">লেবেল *</label>
            <input type="text" name="lebel" class="form-control form-control-user" placeholder="লেবেল"><br/>
            <button class="btn btn-primary btn-user btn-block" name="slider" type="submit">যোগ</button>
            <br/><br/>
          </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin()) { ?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#AddProvider">
          <i class="fas fa-folder-plus"></i>
          <span>নতুন প্রভাইডার</span></a>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddProvider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন প্রভাইডার যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রভাইডারের নাম *</label>
              <input type="text" name="categoryname" class="form-control form-control-user" placeholder="প্রভাইডারের নাম"><br/>
              <label for="inputname" style="font-size:20px;color:#000">টাইপ *</label><br>
              <button class="btn btn-primary btn-user btn-block" name="category" type="submit">যোগ</button>
              <br/><br/>
            </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
    <?php if (isAdmin()) { ?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#AddCategory">
          <i class="fas fa-folder-plus"></i>
          <span>নতুন ক্যাটেগরী</span></a>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন ক্যাটেগরী যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">ক্যাটেগরীর নাম *</label>
              <input type="text" name="categoryname" class="form-control form-control-user" placeholder="ক্যাটেগরীর নাম"><br/>
              <label for="inputname" style="font-size:20px;color:#000">টাইপ *</label><br>
              <input type="radio" name="categorytype" value="Product" required> কেনাবেচার ক্যাটেগরী<br/>
              <input type="radio" name="categorytype" value="VGallary" required> ভিডিওর ক্যাটেগরী<br/>
              <input type="radio" name="categorytype" value="PGallary" required> ছবির ক্যাটেগরী<br/><br>
              <button class="btn btn-primary btn-user btn-block" name="category" type="submit">যোগ</button>
              <br/><br/>
            </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>

    <?php if (isAdmin() || isTeacher() || isStaff()) { ?>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKBOrder" aria-expanded="true" aria-controls="collapseKBOrder">
          <i class="fas fa-photo-video"></i>
          <span>কেনাবেচা</span>
        </a>
        <div id="collapseKBOrder" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">সকল কেনাবেচার পণ্যসমূহ:</h6>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#AddKBOrder">নতুন পন্য যোগ</a>
            <a class="collapse-item" href="all_product_list.php">সকল পণ্যের তালিকা</a>
            <?php
    $sql = $db->query("SELECT * FROM category WHERE categorytype = 'Products' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $categoryname = $row['categoryname'];
   ?>
            <a class="collapse-item" href="product_list.php?category=<?php echo $categoryname; ?>"><?php echo $categoryname; ?></a>
    <?php }} ?>
          </div>
        </div>
      </li>
  <!-- Logout Modal-->
  <div class="modal fade" id="AddKBOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">নতুন পন্য যোগ</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="product_list.php">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের নাম</label>
              <input type="text" name="pname" class="form-control form-control-user" placeholder="Product Name"><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের ছবি</label><br/>
                <input name="productimg" class="form-control-file" type="file">
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের বিস্তারিত</label>
              <input type="text" name="pdetails" class="form-control form-control-user" placeholder="Product Details"><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের এসইও টাইটেল</label>
              <input type="text" name="pseotitle" class="form-control form-control-user" placeholder="Product SEO Title"><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের এসইও বিস্তারিত</label>
              <input type="text" name="pseodetail" class="form-control form-control-user" placeholder="Product SEO Details"><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের এসইও কিওয়ার্ডস</label>
              <input type="text" name="pseokeyword" class="form-control form-control-user" placeholder="Product SEO Keyword"><br/>
              <label for="inputname" style="font-size:20px;color:#000">পণ্যের মূল্য</label>
              <input type="text" name="pprice" class="form-control form-control-user" placeholder="Video Code"><br/>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">যোগানকারী প্রতিষ্ঠান *</label>
                    <select name="provider" id="user_type" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select One..</option>

    <?php
    $sql = $db->query("SELECT * FROM provider WHERE providertype = 'Products' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
    echo "no result!";
    }else{
    while ($row = mysqli_fetch_array($sql)) {
    $providername = $row['providername'];
    ?>
                        <option value="<?php echo $provider; ?>"><?php echo $provider; ?></option>
    <?php }} ?>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-size:20px;color:#000">ক্যাটেগরী *</label>
                    <select name="category" id="user_type" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select One..</option>

    <?php
    $sql = $db->query("SELECT * FROM category WHERE categorytype = 'Products' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
    echo "no result!";
    }else{
    while ($row = mysqli_fetch_array($sql)) {
    $categoryname = $row['categoryname'];
    ?>
                        <option value="<?php echo $categoryname; ?>"><?php echo $categoryname; ?></option>
    <?php }} ?>
                    </select>
                </div><br>
              <button class="btn btn-primary btn-user btn-block" name="product" type="submit">যোগ</button>
              <br/><br/>
            </form>
        </div>
        <div class="modal-footer"><img class="img-profile rounded-circle" src="images/logo.png" width="60px"></div>
      </div>
    </div>
  </div>
    <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>লগআউট</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="images/logo.png" alt="" width="60px">
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am coming soon, wait for me!</div>
                    <div class="small text-gray-500">Message Bot . 11/29/2019(03:08pm)</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="images/logo.png">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php  if (isset($_SESSION['user'])) : ?>
                        <?php echo $_SESSION['user']['username']; ?> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)
                <?php endif ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  পোফাইল
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  সেটিংস
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  লগআউট
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->