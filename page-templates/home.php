<?php 
/*
Template Name: Home
Template Post Type: post, page, event
*/
?>

<?php get_header(); ?>


<?php
  $hs_class="text-center";
  $hs_heading="Hexagon Sun template";
  $hs_content="Insert content here";

  include( locate_template( 'global-templates/hs-hero.php' ) ); 
?>

<div class="container">

  <?php 
    $classes="class-name class-name2";
    include( locate_template( 'global-templates/hs-card-body.php' ) ); 
  ?>

  <div class="row">
    <div class="col-lg-4">
      <?php 
        $classes="class-name class-name2";
        include( locate_template( 'global-templates/hs-card.php' ) ); 
      ?>
    </div>

    <div class="col-lg-4">
      <?php 
        $classes="class-name class-name2";
        include( locate_template( 'global-templates/hs-card.php' ) ); 
      ?>
    </div>

    <div class="col-lg-4">
      <?php 
        $classes="class-name class-name2";
        include( locate_template( 'global-templates/hs-card.php' ) ); 
      ?>
    </div>
  </div>
</div><!--/container-->

<?php 
  $hs_heading="card header";
  $hs_content="card title";
  include( locate_template( 'global-templates/hs-contact.php' ) ); 
?>

<?php get_footer(); ?>