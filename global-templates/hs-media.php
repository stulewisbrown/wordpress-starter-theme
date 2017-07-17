<?php 
	if ($hs_imgsrc) {
		$hs_img = content_url('uploads') . "/icons/" . $hs_imgsrc . "-icon.png";
	} else {
		$hs_img = content_url('uploads') . "/icons/" . "tick" . "-icon.png";
	}

?>

<div class="media hs-media <?php echo $hs_class_media ?>" >
  <img class="d-flex hs-media-icon align-self-center" src="<?php echo $hs_img ?>">
  <div class="media-body hs-media-body">
  	<?php the_field($box_content); ?>
  </div>
</div>

<?php

/*
example of include params - 
icons = chart; tick; jigsaw; lighting; padlock; scales; briefcase; lightbulb; signpost;


<?php
  $hs_class_media="hs-rtl-media"
  $hs_imgsrc="lighting";
  $hs_media_text="Growing top line revenues from key clients";
  include( locate_template( 'global-templates/hs-media.php' ) ); 
?>
*/



?>