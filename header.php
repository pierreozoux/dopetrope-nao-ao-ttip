<html>
  <head>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script type='text/javascript' >
      window.theme_path = "<?php bloginfo('template_directory'); ?>";
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/skel-layers.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/init.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/animate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.socialshareprivacy.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cookies.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.socialshareprivacy.min.autoload.js"></script>
    <script type="application/x-social-share-privacy-settings">
    {
      "path_prefix":"<?php bloginfo('template_directory'); ?>/",
      "css_path":"css/jquery.socialshareprivacy.min.css",
      "language":"pt",
      "layout":"line",
      "services":{"buffer":{"status":false},"delicious":{"status":false},"disqus":{"status":false},"fbshare":{"status":false},"flattr":{"status":false},"gplus":{"status":false},"hackernews":{"status":false},"linkedin":{"status":false},"pinterest":{"status":false},"reddit":{"status":false},"stumbleupon":{"status":false},"tumblr":{"status":false},"xing":{"status":false}}}</script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.socialshareprivacy.min.pt.js"></script>
    <noscript>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skel.css" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-desktop.css" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.socialshareprivacy.min.css" type="text/css" />
    </noscript>
    <?php wp_head(); ?>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body class="homepage">

    <!-- Header -->
      <div id="header-wrapper">
        <div id="header">
          
          <!-- Logo -->
            <a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="Logo nao ao TTIP"></a>
          <!-- Nav -->
          <?php wp_nav_menu( array( 'container_id' => 'nav', 'theme_location' => 'header-menu' ) ); ?>
