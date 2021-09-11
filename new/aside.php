
    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="index.php" class="logo">
<?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
    $school_icon = $row['school_icon'];
?>
                        <img src="images/<?php echo $school_icon; ?>" width="35" alt="<?php echo $school_name; ?>" /> <?php echo $school_name; ?>
<?php } ?>
                    </a>
                    <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <!-- start: search & user box -->
                <div class="header-right">

                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <span class="separator"></span>

                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fas fa-tasks"></i>
                                <span class="badge">3</span>
                            </a>

                            <div class="dropdown-menu notification-menu large">
                                <div class="notification-title">
                                    <span class="float-right badge badge-default">3</span>
                                    Tasks
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <p class="clearfix mb-1">
                                                <span class="message float-left">Generating Sales Report</span>
                                                <span class="message float-right text-dark">60%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </li>

                                        <li>
                                            <p class="clearfix mb-1">
                                                <span class="message float-left">Importing Contacts</span>
                                                <span class="message float-right text-dark">98%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </li>

                                        <li>
                                            <p class="clearfix mb-1">
                                                <span class="message float-left">Uploading something big</span>
                                                <span class="message float-right text-dark">33%</span>
                                            </p>
                                            <div class="progress progress-xs light mb-1">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fas fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>

                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="float-right badge badge-default">230</span>
                                    Messages
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
                                                </figure>
                                                <span class="title">Joseph Doe</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
                                                </figure>
                                                <span class="title">Joe Junior</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr />

                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span class="badge">3</span>
                            </a>

                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="float-right badge badge-default">3</span>
                                    Alerts
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fas fa-thumbs-down bg-danger text-light"></i>
                                                </div>
                                                <span class="title">Server is Down!</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fas fa-lock bg-warning text-light"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fas fa-signal bg-success text-light"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2017</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr />

                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <span class="separator"></span>
<?php  if (isset($_SESSION['user'])) : ?>
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="images/logo.png" alt="<?php echo $_SESSION['user']['username']; ?>" class="rounded-circle" data-lock-picture="images/logo.png" />
                            </figure>
                            <div class="profile-info" data-lock-name="<?php echo $_SESSION['user']['username']; ?>" data-lock-email="<?php echo $_SESSION['user']['email']; ?>">
                                <span class="name"><?php echo $_SESSION['user']['username']; ?></span>
                                <span class="role"><?php echo ucfirst($_SESSION['user']['user_type']); ?></span>
                            </div>

                            <i class="fa custom-caret"></i>
                        </a>

                        <div class="dropdown-menu">
                            <ul class="list-unstyled mb-2">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> পোফাইল</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> লক স্ক্রিন</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fas fa-power-off"></i> লগআউট</a>
                                </li>
                            </ul>
                        </div>
                    </div>
<?php endif ?>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">

                    <div class="sidebar-header">
                        <div class="sidebar-title">
<?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
?>
                            <?php echo $school_name; ?>
<?php } ?>
                        </div>
                        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>

                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">

                                <ul class="nav nav-main">
                                    <li>
                                        <a class="nav-link" href="index.php">
                                            <i class="fas fa-home" aria-hidden="true"></i>
                                            <span>ড্যাশবোর্ড</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-user-secret" aria-hidden="true"></i>
                                            <span>সদস্যসমূহ</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="add_staff.php">
                                                    নতুন শিক্ষক/কর্মচারী যোগ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="add_student.php">
                                                    নতুন ছাত্র-ছাত্রী যোগ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="teachers.php">
                                                    শিক্ষকগণ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="staffs.php">
                                                    কর্মচারীগণ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="students.php">
                                                    ছাত্র-ছাত্রীরা
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="users.php">
                                                    সকল সদস্যসগণ
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-book-reader" aria-hidden="true"></i>
                                            <span>ক্লাস</span>
                                        </a>
                                        <ul class="nav nav-children">
<?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
?>
                                            <li>
                                                <a class="nav-link" href="class_details.php?class=<?php echo $tag; ?>">
                                                    <?php echo $class_name; ?>
                                                </a>
                                            </li>
<?php } ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="book_list.php">
                                            <i class="fas fa-book-open" aria-hidden="true"></i>
                                            <span>বইয়ের তালিকা</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-store" aria-hidden="true"></i>
                                            <span>শ্রেণিভিত্তিক স্টেশনারীর তালিকা</span>
                                        </a>
                                        <ul class="nav nav-children">
<?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
?>
                                            <li>
                                                <a class="nav-link" href="class_stationary_list.php?class=<?php echo $tag; ?>">
                                                    <?php echo $class_name; ?>
                                                </a>
                                            </li>
<?php } ?>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-table" aria-hidden="true"></i>
                                            <span>ক্লাস রুটিন</span>
                                        </a>
                                        <ul class="nav nav-children">
<?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
?>
                                            <li>
                                                <a class="nav-link" href="class_routine.php?class=<?php echo $tag; ?>">
                                                    <?php echo $class_name; ?>
                                                </a>
                                            </li>
<?php } ?>
                                        </ul>
                                    </li>
                                    <!--<li>
                                        <a class="nav-link" href="mail.php">
                                            <span class="float-right badge badge-primary">182</span>
                                            <i class="fas fa-envelope" aria-hidden="true"></i>
                                            <span>মেইল</span>
                                        </a>
                                    </li>-->
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-cogs" aria-hidden="true"></i>
                                            <span>সেটিংস</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="archive/sitesettings.php">
                                                    সাইট সেটিংস
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="archive/schoolsettings.php">
                                                    প্রতিষ্ঠানের সেটিংস
                                                </a>
                                            </li>
                                            <li class="nav-parent">
                                                <a class="nav-link" href="#">
                                                    <span>শ্রেণি</span>
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a class="nav-link" href="add_class.php">
                                                            নতুন শ্রেণি যোগ
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="classes_list.php">
                                                            সকল শ্রেণি
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <span>বাণী</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="add_bani.php">
                                                    নতুন বাণী যোগ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="bani_list.php">
                                                    সকল বাণী
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-flag-checkered" aria-hidden="true"></i>
                                            <span>নোটিশ</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="add_notice.php">
                                                    নতুন নোটিশ যোগ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="notice_list.php">
                                                    সকল নোটিশ
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-sliders-h" aria-hidden="true"></i>
                                            <span>স্লাইডার</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="archive/addslider.php">
                                                    নতুন স্লাইডার যোগ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="slider_list.php">
                                                    সকল স্লাইডার
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="archive/addprovider.php">
                                            <i class="fas fa-map-signs" aria-hidden="true"></i>
                                            <span>নতুন প্রভাইডার</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="archive/addcategory.php">
                                            <i class="fas fa-asterisk" aria-hidden="true"></i>
                                            <span>নতুন ক্যাটেগরী</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-cart-plus" aria-hidden="true"></i>
                                            <span>কেনাবেচা</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="archive/addproduct.php">
                                                    নতুন পন্য যোগ
                                                </a>
                                            </li>
                                            <li class="nav-parent">
                                                <a class="nav-link" href="all_product_list.php">
                                                    সকল পণ্যের তালিকা
                                                </a>
                                            </li>
<?php
    $sql = $db->query("SELECT * FROM category WHERE categorytype = 'Products' ");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        echo "no result!";
     }else{
      while ($row = mysqli_fetch_array($sql)) {
        $categoryname = $row['categoryname'];
?>
                                            <li class="nav-parent">
                                                <a class="nav-link" href="product_list.php?category=<?php echo $categoryname; ?>">
                                                    <?php echo $categoryname; ?>
                                                </a>
                                            </li>
<?php }} ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="../logout.php">
                                            <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                                            <span>লগআউট</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>

                            <hr class="separator" />

                            <div class="sidebar-widget widget-tasks">
                                <div class="widget-header">
                                    <h6>Projects</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled m-0">
                                        <li><a href="../index.php">ফিউচার ফাউন্ডেশন স্কুল, রংপুর</a></li>
                                        <li><a href="#">ফিউচার ফাউন্ডেশন একাডেমী, রংপুর</a></li>
                                        <li><a href="#">অরণ্য এগ্রো ফার্ম</a></li>
                                    </ul>
                                </div>
                            </div>

                            <hr class="separator" />

                            <div class="sidebar-widget widget-stats">
                                <div class="widget-header">
                                    <h6>স্ট্যাটাস</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li>
                                            <span class="stats-title">ফিউচার ফাউন্ডেশন স্কুল, রংপুর</span>
                                            <span class="stats-complete">10%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                    <span class="sr-only">10% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="stats-title">ফিউচার ফাউন্ডেশন একাডেমী, রংপুর</span>
                                            <span class="stats-complete">10%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                    <span class="sr-only">10% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="stats-title">অরণ্য এগ্রো ফার্ম</span>
                                            <span class="stats-complete">2%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                    <span class="sr-only">2% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Maintain Scroll Position
                            if (typeof localStorage !== 'undefined') {
                                if (localStorage.getItem('sidebar-left-position') !== null) {
                                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                    sidebarLeft.scrollTop = initialPosition;
                                }
                            }
                        </script>


                    </div>

                </aside>
                <!-- end: sidebar -->