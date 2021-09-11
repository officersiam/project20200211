
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