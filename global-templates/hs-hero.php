<?php if ($hs_img) {
		$bg_template = "style=\"background-image: url(" . content_url('uploads') . $hs_img . ");\"";
	} else {
		$bg_template = "";
	}
?>

<div <?php echo $bg_template ?> class="hs-hero jumbotron jumbotron-fluid <?php echo $hs_class ?>">
  <div class="container">
    <h1 class="hs-hero__heading display-6"><?php echo $hs_heading ?></h1>
    <p class="hs-hero__lead lead"><?php echo $hs_content ?></p>
  </div>
</div>

<?php
/*
<?php 
  $hs_img="/backgrounds/homepage-hero.jpg";
  $hs_class="hs-hero--breaker";
  $hs_heading="card header";
  $hs_content="card title";
  include( locate_template( 'global-templates/hs-hero.php' ) ); 
?>
*/
?>