<?php
 if (isset($_SESSION['success'])) {
     
    $success = $_SESSION['success'];
     
    unset($_SESSION['success']);
 }
?>
<!-- ========== FOOTER ========== -->
<footer>
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 widget">
                    <div class="about">
                        <a href="<?= BASEURL; ?>">RESERVASI HOTEL</a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet.
                        </p>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Latest News</h5>
                    <ul class="blog_posts">
                        <li>
                            <a href="blog-post.html">Live your myth in Greece</a>
                            <small>AUGUST 13, 2017</small>
                        </li>
                        <li>
                            <a href="blog-post.html">Hotel Zante in pictures</a>
                            <small>AUGUST 16, 2017</small>
                        </li>
                        <li>
                            <a href="blog-post.html">Hotel Zante family party</a>
                            <small>SEPTEMBER 15, 2017</small>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Useful Links</h5>
                    <ul class="useful_links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Location</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Contact Us</h5>
                    <address>
                        <ul class="address_details">
                            <li>
                                <i class="glyphicon glyphicon-map-marker"></i> 25, Navagio
                                Zakynthos, Greece
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-phone-alt"></i> Phone: 021-75555555

                            </li>
                            <li><i class="fa fa-fax"></i> Fax: 021-75555555
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> Email:
                                <a href="mailto:info@site.com">contact@hotel.com</a>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyrights">
                        Copyright 2022 <a href="index.html">Hotel</a> All Rights
                        Reserved.
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social_media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                        <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal " id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-success text-center">
            Success
        </h4>
      </div>
      <div class="modal-body">
        <p>
            <?php echo $success; ?>
        </p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<!-- ========== BACK TO TOP ========== -->
<div id="back_to_top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- ========== NOTIFICATION ========== -->
<div id="notification"></div>

<!-- ========== JAVASCRIPT ========== -->
<script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.smoothState.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/moment.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/morphext.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/owl.carousel.thumbs.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/jPushMenu.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/countUp.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/main.js"></script>

<!--========== REVOLUTION SLIDER ========== -->
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>

<?php if (!empty($success)) { ?>
    <script>
        $('#myModal').modal('show');
    </script>
<?php } ?>
</body>

</html>