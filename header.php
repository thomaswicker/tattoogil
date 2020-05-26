<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="Thomas Wicker Portfolio, XIRI Media, UI/UX, Design Denver, Denver websites, websites in denver, creative, design, creative design studio, ui, ux, user interface, user experience, graphic design, website design, web designer, printing services, logo, Denver photography">

  <meta name="author" CONTENT="Thomas Wicker: Copyright - 2018, All Rights Reserved"/>

  <meta charset="<?php bloginfo('charset'); ?>" />

  <title>
     <?php
     if (function_exists('is_tag') && is_tag()) {
       single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
     elseif (is_archive()) {
       wp_title(''); echo ' Archive - '; }
     elseif (is_search()) {
       echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
     elseif (!(is_404()) && (is_single()) || (is_page())) {
       wp_title(''); echo ' - '; }
     elseif (is_404()) {
       echo 'Not Found - '; }
     if (is_home()) {
       bloginfo('name'); echo ' - '; bloginfo('description'); }
     else {
      bloginfo('name'); }
    if ($paged>1) {
     echo ' - page '. $paged; }
     ?>
  </title>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

  <!-- BEGIN FAVICONS & ICONS -->
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-touch-icon-144x144.png">
  <!-- END FAVICONS & ICONS -->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <section class="containerMain">

    <header class="row">
      <img id="headerImageLeft" class="small-0 medium-3 columns" src="<?php bloginfo( 'template_directory' ); ?>/img/masthead_leftSkeleton_trsprnt.png" alt="Skeleton">
      <img id="headerImageMiddle" class="small-12 medium-6 columns" src="<?php bloginfo( 'template_directory' ); ?>/img/masthead_Center.png" alt="Tattoo Gil Logo">
      <img id="headerImageRight" class="small-0 medium-3 columns" src="<?php bloginfo( 'template_directory' ); ?>/img/masthead_rightSkeleton_trsprnt.png" alt="Skeleton">
    </header><!--/.mainHeader -->

