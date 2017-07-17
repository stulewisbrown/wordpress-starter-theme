<?php 
/*
Template Name: Text page
Template Post Type: post, page
*/

?>


<?php get_header(); ?>
<hr>

<?php while ( have_posts() ) : the_post(); ?>

 <?php include( locate_template( 'loop-templates/hs-page-title.php' ) ); ?>

  <header class="text-center container">
    <h1><?php hs_page_title(); ?></h1>
  </header>

<?php include( locate_template( 'loop-templates/hs_page_icon.php' ) ); ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card hs-card--text mx-auto mb-5">
        <div class="card-block">

      			 <?php the_content(); ?>
      			<?php
      			// If comments are open or we have at least one comment, load up the comment template.
      				if ( comments_open() || get_comments_number() ) :

      					comments_template();

      					endif;
      			   ?>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php endwhile; // end of the loop. ?>
<?php 
  $hs_heading="card header";
  $hs_content="card title";
  include( locate_template( 'global-templates/hs-contact.php' ) ); 
?>

<?php get_footer(); ?>