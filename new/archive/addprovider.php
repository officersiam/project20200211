
            <form class="form-signin user" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <?php echo display_error(); ?>
              <br/><br/>
              <label for="inputname" style="font-size:20px;color:#000">প্রভাইডারের নাম *</label>
              <input type="text" name="providername" class="form-control form-control-user" placeholder="প্রভাইডারের নাম"><br/>
              <label for="inputname" style="font-size:20px;color:#000">টাইপ *</label><br>
              <input type="radio" name="providertype" value="Milk" required> দুধের প্রভাইডার<br/>
              <input type="radio" name="providertype" value="Others" required> অন্যান্য<br/><br>
              <button class="btn btn-primary btn-user btn-block" name="category" type="submit">যোগ</button>
              <br/><br/>
            </form>