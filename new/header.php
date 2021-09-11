<?php include ('../functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
    }
?>
<!doctype html>
<html class="fixed">
    <head>
<?php
    $sql = $db->query("SELECT * FROM site_settings");
    while ($row = mysqli_fetch_array($sql)) {
    $seo_site_title = $row['seo_site_title'];
    $site_icon = $row['site_icon'];
?>
        <!-- Basic -->
        <meta charset="UTF-8">

        <title><?php echo $seo_site_title; ?> | Admin Panel</title>
        <meta name="author" content="Siam Al Mahmud">
        <link rel="icon" href="images/<?php echo $site_icon; ?>" type="image/png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="vendor/animate/animate.css">

        <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />


        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.js"></script>

<?php } ?>