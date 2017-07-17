<?php 
/*
Template Name: Home
Template Post Type: post, page, event
*/
?>

<?php get_header(); ?>


<?php
  $hs_class="text-center";
  $hs_heading="Welcome to <span class=\"green\">ClientSavvy</span>";
  $hs_content="Growing top line revenues from key clients";
  $hs_img="/backgrounds/homepage-hero.jpg";
  include( locate_template( 'global-templates/hs-hero.php' ) ); 
?>

<div class="container">
	<div class="card hs-card--text mx-auto mb-5">
		<div class="card-block">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'page' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :

					comments_template();

					endif;
			?>
		<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>

<div class="container">
<?php
  $hs_class_media="anything";
  $box_content="box_1_content";
  $hs_imgsrc="tick";
  $hs_media_text="Growing top line revenues from key clients";
  include( locate_template( 'global-templates/hs-media.php' ) ); 
?>

<?php
$hs_class_media="hs-rtl-media";
$box_content="box_2_content";
  $hs_imgsrc="briefcase";
  $hs_media_text="Growing top line revenues from key clients";
  include( locate_template( 'global-templates/hs-media.php' ) ); 
?>
<?php
$hs_class_media="";
  $hs_imgsrc="scales";
  $box_content="box_3_content";
  $hs_media_text="Growing top line revenues from key clients";
  include( locate_template( 'global-templates/hs-media.php' ) ); 
?>
</div>

<?php 
  $hs_heading="card header";
  $hs_content="card title";
  include( locate_template( 'global-templates/hs-contact.php' ) ); 
?>

<?php get_footer(); ?>