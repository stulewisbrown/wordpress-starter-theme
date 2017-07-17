<?php

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

// The Query
$the_query = new WP_Query( array( 'cat' => $category_id ) );
?>


<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_field('icon', get_the_ID() ) ?></p>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>