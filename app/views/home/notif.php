<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

    <!-- ========== SEO ========== -->
    <title>Hotel Rerservasi</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png" />

    <!-- ========== STYLESHEETS ========== -->
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/famfamfam-flags.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- ========== ICON FONTS ========== -->
    <link href="<?= BASEURL; ?>/fonts/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= BASEURL; ?>/fonts/flaticon.css" rel="stylesheet" />

    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

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
</body>

</html>