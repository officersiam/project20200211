
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