
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