
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