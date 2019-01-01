<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
  <title>Open Karting Rental Series 2019 by Futura Corse</title>
</head>

<body >
  <header>
    <div class="container">
      <nav>
          <i class="fas fa-bars"></i>
          <div class="wrapMenuResponsive">
            <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
          </div>
        </div>
      </nav>
    </div>
  </header>
