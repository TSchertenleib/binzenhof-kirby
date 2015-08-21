<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>  

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,600italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:100' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/normalize.css') ?>


  <header class="header cf" role="banner">

    <?php snippet('menu') ?>
  </header>