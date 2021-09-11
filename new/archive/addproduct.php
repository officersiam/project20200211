
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