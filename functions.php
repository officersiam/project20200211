<?php
	session_start();

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ffsr');

	// variable declaration
	$username = "";
	$phone    = "";
	$errors   = array();




	// call the class_stationary() function if trainee is clicked
    if (isset($_POST['class_stationary'])) {
        class_stationary();
    }

    // class_stationary
    function class_stationary(){
        global $db, $errors;

        // receive all input values from the form
        $class = e($_POST['class']);
        $details = e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "INSERT INTO class_stationary (class, details, date)
                          VALUES('$class', '$details', '$date')";
                mysqli_query($db, $sql);

        }

    }


    // call the class_stationary_update() function if trainee is clicked
    if (isset($_POST['class_stationary_update'])) {
        class_stationary_update();
    }

    function class_stationary_update(){
        global $db, $errors;

        // receive all input values from the form
        $id = e($_POST['id']);
        $class = e($_POST['class']);
        $details = e($_POST['details']);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "UPDATE class_stationary SET class_stationary.class = '$class', class_stationary.details = '$details' WHERE class_stationary.id = '$id' ";
                mysqli_query($db, $sql);

        }



    }


    // call the class_stationary_delete() function if trainee is clicked
    if (isset($_POST['class_stationary_delete'])) {
        class_stationary_delete();
    }

    // booklist_delete
    function class_stationary_delete(){
        global $db, $errors;

        // receive all input values from the form
        $id = e($_POST['id']);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "DELETE FROM class_stationary WHERE class_stationary.id = $id";
                mysqli_query($db, $sql);

        }

    }

    // call the class_routine_update() function if trainee is clicked
    if (isset($_POST['class_routine_update'])) {
        class_routine_update();
    }

    function class_routine_update(){
        global $db, $errors;

        // receive all input values from the form
        $id = e($_POST['id']);
        $day = e($_POST['day']);
        $first_period = e($_POST['first_period']);
        $second_period = e($_POST['second_period']);
        $third_period = e($_POST['third_period']);
        $fourth_period = e($_POST['fourth_period']);
        $fivth_period = e($_POST['fivth_period']);
        $sixth_period = e($_POST['sixth_period']);
        $date = date('Y-m-d H:i:sa');

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "UPDATE class_routine SET  class_routine.day = '$day', class_routine.first_period = '$first_period', class_routine.second_period = '$second_period', class_routine.third_period = '$third_period', class_routine.fourth_period = '$fourth_period', class_routine.fivth_period = '$fivth_period', class_routine.sixth_period = '$sixth_period', class_routine.date = '$date' WHERE class_routine.id = '$id' ";
                mysqli_query($db, $sql);

        }



    }


	// call the booklist() function if trainee is clicked
    if (isset($_POST['booklist'])) {
        booklist();
    }

    // booklist
    function booklist(){
        global $db, $errors;

        // receive all input values from the form
        $books = e($_POST['books']);
        $lebel = e($_POST['lebel']);
        $date = date('Y-m-d H:i:sa');

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "INSERT INTO booklist (books, lebel, date)
                          VALUES('$books', '$lebel', '$date')";
                mysqli_query($db, $sql);

        }

    }


    // call the booklist_update() function if trainee is clicked
    if (isset($_POST['booklist_update'])) {
        booklist_update();
    }

    function booklist_update(){
        global $db, $errors;

        // receive all input values from the form
        $id = e($_POST['id']);
        $lebel = e($_POST['lebel']);
        $books = e($_POST['books']);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "UPDATE booklist SET booklist.books = '$books', booklist.lebel = '$lebel' WHERE booklist.id = '$id' ";
                mysqli_query($db, $sql);

        }



    }


    // call the booklist_delete() function if trainee is clicked
    if (isset($_POST['booklist_delete'])) {
        booklist_delete();
    }

    // booklist_delete
    function booklist_delete(){
        global $db, $errors;

        // receive all input values from the form
        $id = e($_POST['id']);

        // register user if there are no errors in the form
        if (count($errors) == 0) {

                $sql = "DELETE FROM booklist WHERE booklist.id = $id";
                mysqli_query($db, $sql);

        }

    }


    /**    update sqls      **/


    // call the site_settings_update() function if trainee is clicked
    if (isset($_POST['school_settings_update'])) {
		school_settings_update();
	}

	// school_settings_update
	function school_settings_update(){
		global $db, $errors;

		// receive all input values from the form
		$school_name = e($_POST['school_name']);
		$school_contact_no = e($_POST['school_contact_no']);
		$school_mail_address = e($_POST['school_mail_address']);
		$school_location = e($_POST['school_location']);
		$school_details = e($_POST['school_details']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE school_settings SET school_settings.school_name = '$school_name', school_settings.school_contact_no = '$school_contact_no', school_settings.school_mail_address = '$school_mail_address', school_settings.school_location = '$school_location', school_settings.school_details = '$school_details' ";
				mysqli_query($db, $sql);


		}

	}




	if (isset($_POST['site_settings_update'])) {
		site_settings_update();
	}

	// site_settings_update
	function site_settings_update(){
		global $db, $errors;

		// receive all input values from the form
		$site_name = e($_POST['site_name']);
		$seo_site_title = e($_POST['seo_site_title']);
		$seo_site_keyword = e($_POST['seo_site_keyword']);
		$seo_site_description = e($_POST['seo_site_description']);
		$extension = e($_POST['extension']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE site_settings SET site_settings.site_name = '$site_name', site_settings.seo_site_title = '$seo_site_title', site_settings.seo_site_keyword = '$seo_site_keyword', site_settings.seo_site_description = '$seo_site_description', site_settings.extension = '$extension' ";
				mysqli_query($db, $sql);

		}

	}







    /** normal **/
	// call the logo_school() function if trainee is clicked
	if (isset($_POST['logo_school'])) {
		logo_school();
	}

	// logo_school
	function logo_school(){
		global $db, $errors;

		// receive all input values from the form
		$school_icon = $_FILES['school_icon']['name'];
		$target = "../img/school/".basename($school_icon);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE school_settings SET school_settings.school_icon = '$school_icon' ";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['school_icon']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}

	// call the logo() function if trainee is clicked
	if (isset($_POST['logo'])) {
		logo();
	}

	// logo
	function logo(){
		global $db, $errors;

		// receive all input values from the form
		$site_icon = $_FILES['site_icon']['name'];
		$target = "../img/".basename($site_icon);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE site_settings SET site_settings.site_icon = '$site_icon' ";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['site_icon']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}



	// classes_input
	if (isset($_POST['classes_input'])) {
		classes_input();
	}

	function classes_input(){
		global $db, $errors;

		// receive all input values from the form
		$class_icon = e($_POST['class_icon']);
        $class_name = e($_POST['class_name']);
		$tag = e($_POST['tag']);
		$class_details = e($_POST['class_details']);
		$discription = e($_POST['discription']);
		$lebel = e($_POST['lebel']);
		$date = date('Y-m-d');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO classes (class_icon, class_name, tag, class_details, discription, lebel, date)
						  VALUES('$class_icon', '$class_name', '$tag', '$class_details', '$discription', '$lebel', '$date')";
				mysqli_query($db, $sql);

	}
}

	// call the class_update() function if trainee is clicked
	if (isset($_POST['class_update'])) {
		class_update();
	}

	function class_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$class_icon = e($_POST['class_icon']);
        $class_name = e($_POST['class_name']);
		$tag = e($_POST['tag']);
		$class_details = e($_POST['class_details']);
		$discription = e($_POST['discription']);
		$lebel = e($_POST['lebel']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE classes SET classes.class_icon = '$class_icon', classes.class_name = '$class_name', classes.tag = '$tag', classes.class_details = '$class_details',classes.discription = '$discription', classes.lebel = '$lebel' WHERE classes.id = '$id' ";
				mysqli_query($db, $sql);

		}



	}


	// call the class_delete() function if trainee is clicked
	if (isset($_POST['class_delete'])) {
		class_delete();
	}

	// class_delete
	function class_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM classes WHERE classes.id = $id";
				mysqli_query($db, $sql);

		}

	}


	// notice
	if (isset($_POST['notice'])) {
		notice();
	}

	function notice(){
		global $db, $errors;

		// receive all input values from the form
		$notice_title = e($_POST['notice_title']);
		$notice_details = e($_POST['notice_details']);
		$notice_file = $_FILES['notice_file']['name'];
		$target = "../file/notice/".basename($notice_file);
		$lebel = e($_POST['lebel']);
		$date = date('Y-m-d');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO notice (notice_title, notice_details, notice_file, lebel, date)
						  VALUES('$notice_title', '$notice_details', '$notice_file', '$lebel', '$date')";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['notice_file']['tmp_name'], $target)) {
            echo "File Submited Successfully.";
        }else{
            echo "Failed to upload File.";
            }

		}

	}

	// call the notice_update() function if trainee is clicked
	if (isset($_POST['notice_update'])) {
		notice_update();
	}

	function notice_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$notice_title = e($_POST['notice_title']);
		$notice_details = e($_POST['notice_details']);
		$notice_file = e($_POST['notice_file']);
		$lebel = e($_POST['lebel']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE notice SET notice.notice_title = '$notice_title', notice.notice_details = '$notice_details', notice.notice_file = '$notice_file', notice.lebel = '$lebel' WHERE notice.id = '$id' ";
				mysqli_query($db, $sql);

		}



	}


	// call the notice_delete() function if trainee is clicked
	if (isset($_POST['notice_delete'])) {
		notice_delete();
	}

	// notice_delete
	function notice_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM notice WHERE notice.id = $id";
				mysqli_query($db, $sql);

		}

	}



	// call the principle_gift() function if trainee is clicked
	if (isset($_POST['principle_gift'])) {
		principle_gift();
	}

	// principle_gift
	function principle_gift(){
		global $db, $errors;

		// receive all input values from the form
		$principle_img = $_FILES['principle_img']['name'];
		$target = "../img/bani/".basename($principle_img);
		$principle_name = e($_POST['principle_name']);
		$principle_title = e($_POST['principle_title']);
		$principle_msg = e($_POST['principle_msg']);
		$lebel = e($_POST['lebel']);
		$date = date('Y-m-d H:i:sa');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO principle_gift (principle_img, principle_name, principle_title, principle_msg, lebel, date)
						  VALUES('$principle_img', '$principle_name', '$principle_title', '$principle_msg', '$lebel', '$date')";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['principle_img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}

	// call the bani_delete() function if trainee is clicked
	if (isset($_POST['bani_delete'])) {
		bani_delete();
	}

	// bani_delete
	function bani_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM principle_gift WHERE principle_gift.id = $id";
				mysqli_query($db, $sql);

		}

	}


	// call the bani_image_update() function if trainee is clicked
	if (isset($_POST['bani_image_update'])) {
		bani_image_update();
	}

	// bani_image_update
	function bani_image_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$principle_img = $_FILES['principle_img']['name'];
		$target = "../img/bani/".basename($principle_img);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE principle_gift SET principle_gift.principle_img = '$principle_img' WHERE principle_gift.id = '$id' ";
				mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['principle_img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}


	// call the bani_update() function if trainee is clicked
	if (isset($_POST['bani_update'])) {
		bani_update();
	}

	function bani_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$principle_name = e($_POST['principle_name']);
		$principle_title = e($_POST['principle_title']);
		$principle_msg = e($_POST['principle_msg']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE principle_gift SET principle_gift.principle_name = '$principle_name', principle_gift.principle_title = '$principle_title', principle_gift.principle_msg = '$principle_msg' WHERE principle_gift.id = '$id' ";
				mysqli_query($db, $sql);

		}



	}

	// call the product() function if trainee is clicked
	if (isset($_POST['product'])) {
		product();
	}

	// product
	function product(){
		global $db, $errors;

		// receive all input values from the form
		$productimg = $_FILES['productimg']['name'];
		$target = "../img/products/".basename($productimg);
		$pname = e($_POST['pname']);
		$pdetails = e($_POST['pdetails']);
		$pseotitle = e($_POST['pseotitle']);
		$pseodetail = e($_POST['pseodetail']);
		$pseokeyword = e($_POST['pseokeyword']);
		$pprice = e($_POST['pprice']);
		$provider = e($_POST['provider']);
		$category = e($_POST['category']);
		$date = date('Y-m-d H:i:sa');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO product (productimg, pname, pdetails, pseotitle, pseodetail, pseokeyword, pprice, provider, category, date)
						  VALUES('$productimg', '$pname', '$pdetails', '$pseotitle', '$pseodetail', '$pseokeyword', '$pprice', '$provider', '$category', '$date')";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['productimg']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}


	// call the product_delete() function if trainee is clicked
	if (isset($_POST['product_delete'])) {
		product_delete();
	}

	// product_delete
	function product_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM products WHERE products.id = $id";
				mysqli_query($db, $sql);

		}

	}


	// call the slider() function if trainee is clicked
	if (isset($_POST['slider'])) {
		slider();
	}

	// slider
	function slider(){
		global $db, $errors;

		// receive all input values from the form
		$slider_img = $_FILES['slider_img']['name'];
		$target = "../img/slider/".basename($kbpimg);
		$slider_title = e($_POST['slider_title']);
		$slider_details = e($_POST['slider_details']);
		$lebel = e($_POST['lebel']);
		$date = date('Y-m-d H:i:sa');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO slider (slider_img, slider_title, slider_details, lebel, date)
						  VALUES('$slider_img', '$slider_title', '$slider_details', '$lebel', '$date')";
				mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['slider_img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}

	// call the provider() function if trainee is clicked
	if (isset($_POST['provider'])) {
		provider();
	}

	// provider
	function provider(){
		global $db, $errors;

		// receive all input values from the form
		$providername = e($_POST['providername']);
		$date = date('Y-m-d H:i:sa');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO provider (providername, providertype, date)
						  VALUES('$providername', 'Product', '$date')";
				mysqli_query($db, $sql);

		}

	}

	// call the category() function if trainee is clicked
	if (isset($_POST['category'])) {
		category();
	}

	// category
	function category(){
		global $db, $errors;

		// receive all input values from the form
		$categoryname = e($_POST['categoryname']);
		$categorytype = e($_POST['categorytype']);
		$date = date('Y-m-d H:i:sa');

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "INSERT INTO category (categoryname, categorytype, date)
						  VALUES('$categoryname', '$categorytype', '$date')";
				mysqli_query($db, $sql);

		}

	}


	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

        $user_type = e($_POST['user_type']);
		if ($user_type == 'student') {

        // receive all input values from the form
        $username    =  e($_POST['username']);
        $gender    =  e($_POST['gender']);
        $phone       =  e($_POST['phone']);
        $birth       =  e($_POST['birth']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);
        $fullname  =  e($_POST['fullname']);
        $blood_group  =  e($_POST['blood_group']);
        $address  =  e($_POST['address']);
        $date = date('Y-m-d H:i:sa');
        $class_name  =  e($_POST['class_name']);
        $shift  =  e($_POST['shift']);
        $section  =  e($_POST['section']);
        $roll  =  e($_POST['roll']);
        $father_name  =  e($_POST['father_name']);
        $mother_name  =  e($_POST['mother_name']);

        // form validation: ensure that the form is correctly filled
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                $user_type = e($_POST['user_type']);
                $sql = "INSERT INTO users (username, gender, phone, birth, user_type, password, fullname, blood_group, address, date, class_name, shift, section, roll, father_name, mother_name)
                          VALUES('$username', '$gender', '$phone', '$birth', '$user_type', '$password', '$fullname', '$blood_group', '$address', '$date', '$class_name', '$shift', '$section', '$roll', '$father_name', '$mother_name')";
                mysqli_query($db, $sql);
                $_SESSION['success']  = "New user successfully created!!";
            }else{
                $sql = "INSERT INTO users (username, gender, phone, birth, user_type, password, fullname, blood_group, address, date, class_name, shift, section, roll, father_name, mother_name)
                          VALUES('$username', '$gender', '$phone', '$birth', 'user', '$password', '$fullname', '$blood_group', '$address', '$date', '$date', '$class_name', '$shift', '$section', '$roll', '$father_name', '$mother_name')";
                mysqli_query($db, $sql);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
            }

        }
    } else {
            echo "";
        }


        if ($user_type == 'admin') {

        // receive all input values from the form
        $username    =  e($_POST['username']);
        $gender    =  e($_POST['gender']);
        $phone       =  e($_POST['phone']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);
        $fullname  =  e($_POST['fullname']);
        $designation  =  e($_POST['designation']);
        $email  =  e($_POST['email']);
        $birth  =  e($_POST['birth']);
        $blood_group  =  e($_POST['blood_group']);
        $address  =  e($_POST['address']);
        $details  =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                $user_type = e($_POST['user_type']);
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date)
                          VALUES('$username', '$gender', '$phone', '$user_type', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date')";
                mysqli_query($db, $sql);
                $_SESSION['success']  = "New user successfully created!!";
            }else{
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date)
                          VALUES('$username', '$gender', '$phone', 'user', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date', '$date')";
                mysqli_query($db, $sql);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
            }

        }
    } else {
            echo "";
        }

        if ($user_type == 'teacher') {

        // receive all input values from the form
        $username    =  e($_POST['username']);
        $gender    =  e($_POST['gender']);
        $phone       =  e($_POST['phone']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);
        $fullname  =  e($_POST['fullname']);
        $designation  =  e($_POST['designation']);
        $email  =  e($_POST['email']);
        $birth  =  e($_POST['birth']);
        $blood_group  =  e($_POST['blood_group']);
        $address  =  e($_POST['address']);
        $details  =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                $user_type = e($_POST['user_type']);
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date)
                          VALUES('$username', '$gender', '$phone', '$user_type', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date')";
                mysqli_query($db, $sql);
                $_SESSION['success']  = "New user successfully created!!";
            }else{
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date)
                          VALUES('$username', '$gender', '$phone', 'user', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date', '$date')";
                mysqli_query($db, $sql);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
            }

        }
    } else {
            echo "";
        }

        if ($user_type == 'staff') {

        // receive all input values from the form
        $username    =  e($_POST['username']);
        $gender    =  e($_POST['gender']);
        $phone       =  e($_POST['phone']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);
        $fullname  =  e($_POST['fullname']);
        $designation  =  e($_POST['designation']);
        $email  =  e($_POST['email']);
        $birth  =  e($_POST['birth']);
        $blood_group  =  e($_POST['blood_group']);
        $address  =  e($_POST['address']);
        $details  =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');
        $class_name  =  e($_POST['class_name']);
        $shift  =  e($_POST['shift']);
        $section  =  e($_POST['section']);
        $roll  =  e($_POST['roll']);
        $father_name  =  e($_POST['father_name']);
        $mother_name  =  e($_POST['mother_name']);

        // form validation: ensure that the form is correctly filled
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                $user_type = e($_POST['user_type']);
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date)
                          VALUES('$username', '$gender', '$phone', '$user_type', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date')";
                mysqli_query($db, $sql);
                $_SESSION['success']  = "New user successfully created!!";
            }else{
                $sql = "INSERT INTO users (username, gender, phone, user_type, password, fullname, designation, email, birth, blood_group, address, details, date, class_name, shift, section, roll, father_name, mother_name)
                          VALUES('$username', '$gender', '$phone', 'user', '$password', '$fullname', '$designation', '$email', '$birth', '$blood_group', '$address', '$details', '$date', '$date')";
                mysqli_query($db, $sql);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
            }

        }
    } else {
            echo "";
        }


	}
	// call the staff_delete() function if trainee is clicked
	if (isset($_POST['staff_delete'])) {
		staff_delete();
	}

	// staff_delete
	function staff_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM users WHERE users.id = $id";
				mysqli_query($db, $sql);

		}

	}


	// call the staff_image_update() function if trainee is clicked
	if (isset($_POST['staff_image_update'])) {
		staff_image_update();
	}

	// staff_image_update
	function staff_image_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$img = $_FILES['img']['name'];
		$target = "../img/user/staff/".basename($img);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE users SET users.img = '$img' WHERE users.id = '$id' ";
				mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}


	// call the staff_update() function if trainee is clicked
	if (isset($_POST['staff_update'])) {
		staff_update();
	}

	function staff_update(){
		global $db, $errors;

		// receive all input values from the form
        $id = e($_POST['id']);
		$gender = e($_POST['gender']);
        $card_no = e($_POST['card_no']);
        $username = e($_POST['username']);
        $fullname = e($_POST['fullname']);
        $designation = e($_POST['designation']);
        $email = e($_POST['email']);
        $phone = e($_POST['phone']);
        $birth = e($_POST['birth']);
        $blood_group = e($_POST['blood_group']);
        $address = e($_POST['address']);
        $details = e($_POST['details']);
        $user_type = e($_POST['user_type']);
        $password_1 = e($_POST['password']);
        $password = md5($password_1);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE users SET users.gender = '$gender', users.card_no = '$card_no', users.username = '$username', users.fullname = '$fullname', users.designation = '$designation', users.email = '$email', users.phone = '$phone', users.birth = '$birth', users.blood_group = '$blood_group', users.address = '$address', users.details = '$details', users.user_type = '$user_type', users.password = '$password' WHERE users.id = '$id' ";
				mysqli_query($db, $sql);

		}



	}





	// call the student_delete() function if trainee is clicked
	if (isset($_POST['student_delete'])) {
		student_delete();
	}

	// student_delete
	function student_delete(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "DELETE FROM users WHERE users.id = $id";
				mysqli_query($db, $sql);

		}

	}


	// call the student_image_update() function if trainee is clicked
	if (isset($_POST['student_image_update'])) {
		student_image_update();
	}

	// student_image_update
	function student_image_update(){
		global $db, $errors;

		// receive all input values from the form
		$id = e($_POST['id']);
		$img = $_FILES['img']['name'];
		$target = "../img/user/student/".basename($img);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE users SET users.img = '$img' WHERE users.id = '$id' ";
				mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

		}

	}


	// call the student_update() function if trainee is clicked
	if (isset($_POST['student_update'])) {
		student_update();
	}

	function student_update(){
		global $db, $errors;

		// receive all input values from the form
        $id = e($_POST['id']);
		$gender = e($_POST['gender']);
        $card_no = e($_POST['card_no']);
        $username = e($_POST['username']);
        $fullname = e($_POST['fullname']);
        $phone = e($_POST['phone']);
        $birth = e($_POST['birth']);
        $class_name = e($_POST['class_name']);
        $shift = e($_POST['shift']);
        $section = e($_POST['section']);
        $roll = e($_POST['roll']);
        $father_name = e($_POST['father_name']);
        $mother_name = e($_POST['mother_name']);
        $blood_group = e($_POST['blood_group']);
        $address = e($_POST['address']);
        $user_type = e($_POST['user_type']);
        $password_1 = e($_POST['password']);
        $password = md5($password_1);

		// register user if there are no errors in the form
		if (count($errors) == 0) {

				$sql = "UPDATE users SET users.gender = '$gender', users.card_no = '$card_no', users.username = '$username', users.fullname = '$fullname', users.phone = '$phone', users.birth = '$birth', users.class_name = '$class_name', users.shift = '$shift', users.section = '$section', users.roll = '$roll', users.father_name = '$father_name', users.mother_name = '$mother_name', users.blood_group = '$blood_group', users.address = '$address', users.user_type = '$user_type', users.password = '$password' WHERE users.id = '$id' ";
				mysqli_query($db, $sql);

		}



	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$sql = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $sql);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $sql);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
				}else if ($logged_in_user['user_type'] == 'teacher') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
				}else if ($logged_in_user['user_type'] == 'staff') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
				}else if ($logged_in_user['user_type'] == 'student') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
				}else if ($logged_in_user['user_type'] == 'parent') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	function isTeacher()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'teacher' ) {
			return true;
		}else{
			return false;
		}
	}

	function isStaff()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'staff' ) {
			return true;
		}else{
			return false;
		}
	}

	function isStudent()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'student' ) {
			return true;
		}else{
			return false;
		}
	}

	function isParent()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'parent' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>
