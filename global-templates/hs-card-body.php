<div class="card hs-card--text mx-auto mb-5 <?php echo $classes ?>">
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

<?php
/*
<?php 
  $classes="class-name class-name2";
  include( locate_template( 'global-templates/hs-card-body.php' ) ); 
?>
*/
?>