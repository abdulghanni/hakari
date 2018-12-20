<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <!-- <link rel="apple-touch-icon" href="<?php echo assets_url()?>assets/images/apple-touch-icon.png"> -->
  <link rel="shortcut icon" href="<?php echo assets_url()?>assets/images/favicon.ico">
  <link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo assets_url()?>css/bootstrap.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>css/bootstrap-extend.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>css/site.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>css/custom.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/animsition/animsition.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/asscrollable/asScrollable.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/switchery/switchery.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/intro-js/introjs.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/slidepanel/slidePanel.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>plugins/waves/waves.minfd53.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo assets_url()?>fonts/material-design/material-design.minfd53.css">
  <link rel="stylesheet" href="<?php echo assets_url()?>fonts/brand-icons/brand-icons.minfd53.css">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">

  <?php echo $css; ?>
  <?php echo $plugin_css; ?>

  <!--[if lt IE 9]>
    <script src="<?php echo assets_url()?>plugins/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo assets_url()?>plugins/media-match/media.match.min.js"></script>
    <script src="<?php echo assets_url()?>plugins/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo assets_url()?>plugins/breakpoints/breakpoints.minfd53.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<?php if( $this->uri->segment(1) == '' || $this->uri->segment(1) == 'dashboard'){ ?>
<body class="animsition page-login-v2 layout-full page-dark">
<?php }elseif($this->uri->segment(1) == 'Auth'){ ?>
<body class="animsition page-login-v2 layout-full page-dark">
<?php } ?>
  <?php echo $body; ?>
  <!-- Core  -->
  <script src="<?php echo assets_url()?>plugins/babel-external-helpers/babel-external-helpersfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/jquery/jquery.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/popper-js/umd/popper.minfd53.js?"></script>
  <script src="<?php echo assets_url()?>plugins/bootstrap/bootstrap.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/animsition/animsition.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/mousewheel/jquery.mousewheel.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/asscrollbar/jquery-asScrollbar.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/asscrollable/jquery-asScrollable.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/ashoverscroll/jquery-asHoverScroll.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/waves/waves.minfd53.js"></script>

  <!-- Plugins -->
  <script src="<?php echo assets_url()?>plugins/switchery/switchery.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/intro-js/intro.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/screenfull/screenfull.minfd53.js"></script>
  <script src="<?php echo assets_url()?>plugins/slidepanel/jquery-slidePanel.minfd53.js"></script>

  <!-- Scripts -->
  <script src="<?php echo assets_url()?>js/State.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Component.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Plugin.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Base.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Config.minfd53.js"></script>

  <script src="<?php echo assets_url()?>js/Section/Menubar.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Section/Sidebar.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Section/PageAside.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Plugin/menu.minfd53.js"></script>

  <!-- Config -->
  <script src="<?php echo assets_url()?>js/config/colors.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/config/tour.minfd53.js"></script>
  <script>
    Config.set('assets', '../assets');
  </script>

  <!-- Page -->
  <script src="<?php echo assets_url()?>js/Site.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Plugin/asscrollable.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Plugin/slidepanel.minfd53.js"></script>
  <script src="<?php echo assets_url()?>js/Plugin/switchery.minfd53.js"></script>


  <?php echo $plugin_js; ?>
  <?php echo $js; ?>
  <script>
  
    // $(".dataTable").dataTable();
    <?php if($this->uri->segment(2) == 'tentang'){?>
    tinymce.init({ selector:'textarea' });
    <?php } ?>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>
</html>