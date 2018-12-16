<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class('home-page'); ?>>


<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row row-header-contacts">

        <div class="col-md-3 col-sm-6 col-xs-6 row-header-contacts-adress">
          ул. Кирова, 8б
        </div>

        <div class="col-md-3 col-md-offset-6 col-sm-6 col-xs-6 row-header-contacts-phone">
           <a href="tel:721841">72-18-41</a>, <a href="tel:474740">47-47-40</a>
        </div>

      </div><!-- row row-header-contacts-->
      <div class="row row-head-nav">

        <div class="col-md-4 col-sm-12 col-xs-12">
          <?php wpeHeadNavLeft(); ?>
        </div><!-- /.col-md-4 -->

        <div class="col-md-4 col-md-logo">
          <a href="<?php echo home_url(); ?>" class="logo"></a>
        </div><!-- /.col-md-2 col-md-logo -->

        <div class="col-md-4 col-sm-12 col-xs-12">
          <?php wpeHeadNavRight(); ?>
        </div><!-- /.col-md-4 -->

      </div><!-- /.row  row-head-nav -->
    </div><!-- /.container -->
  </header><!-- /header container -->
