<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

</head>


<body <?php body_class();?>>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
          <img src='<?php the_field('logo', 'option'); ?>'
          alt="" />
          <span>
              <?php the_field('page-name','option') ?>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <?php
              test_menu('top-menu')
            ?>
              <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <a href="http://localhost/wordpress/search/"
                class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></a>
                <style>
                 .nav_search-btn {
                  background-image: url(<?php the_field('search-icon', 'option'); ?>)
                }
                </style>
              </form> -->
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="<?php the_field('get-quote-url','option') ?>">
              <?php the_field('get-quote','option') ?>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->