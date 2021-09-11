



    <footer>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; ফিউচার ফাউন্ডেশন স্কুল, রংপুর | <?php echo date('Y');?> | &copy; All right reserved. <br/></span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="facebook.com/FFSRBD/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC9RzN2xRkiYfiCG54LgmiVQ" data-placement="top" title="Twitter"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
<script>
$(function(){
    var pathname = (window.location.pathname.match(/[^\/]+$/)[0]);
    $('.nav_li').each(function(){
        if($(this).attr('href') == pathname){
            $(this).addClass('active');
        }
    });
});
</script>
<script>
      var textarea = document.getElementById('editor');
      sceditor.create(textarea, {
        format: 'bbcode',
        icons: 'monocons',
        style: '../minified/themes/content/default.min.css'
      });


      var themeInput = document.getElementById('theme');
      themeInput.onchange = function() {
        var theme = '../minified/themes/' + themeInput.value + '.min.css';

        document.getElementById('theme-style').href = theme;
      };
    </script>

</body>
</html>