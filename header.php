<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />

            <link rel="stylesheet" href="minified/themes/default.min.css" id="theme-style" />

        <script src="minified/sceditor.min.js"></script>
        <script src="minified/icons/monocons.js"></script>
        <script src="minified/formats/xhtml.js"></script>

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

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
    $school_contact_no = $row['school_contact_no'];
    ?>
        <p class="pull-left hidden-xs" style="color:#000"><?php echo $school_name; ?></p>
        <p class="pull-right" style="color:#000"><i class="fa fa-phone"></i>মোবাইল নাম্বার. <?php echo $school_contact_no; ?></p>
    <?php } ?>
      </div>
    </div>
  </div>
</div>
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
    <?php
    $sql = $db->query("SELECT * FROM school_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $school_name = $row['school_name'];
    ?>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" width="50px" /><?php echo $school_name; ?></a>
    <?php } ?>
                </div>
                <div class="navbar-collapse collapse ">
    <?php
    $sql = $db->query("SELECT * FROM site_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $extension = $row['extension'];
    ?>
                    <ul class="nav navbar-nav">
                        <li class="nav_li"><a href="index.php">হোম</a></li>
                         <li class="dropdown nav_li">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">শ্রেণিসমূহ <b class="caret"></b></a>
                            <ul class="dropdown-menu">
    <?php
    $sql = $db->query("SELECT * FROM classes Order by id");
    while ($row = mysqli_fetch_array($sql)) {
    $tag = $row['tag'];
    $class_name = $row['class_name'];
    ?>
                                <li><a href="class_details.php?class=<?php echo $tag; ?>"><?php echo $class_name; ?></a></li>
    <?php } ?>
                            </ul>
                        </li>
                        <li class="nav_li"><a href="notice.php">নোটিশ</a></li>
                        <!--
                        <li><a href="shop.php">কেনাবেচা</a></li>
                        <li><a href="admission.php">ভর্তি</a></li>
                        <li><a href="payment.php">পেমেন্ট</a></li>
                        <li><a href="contact.php">যোগাযোগ</a></li>-->
                    </ul>
    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->