<?php if( get_field('hs_carousel_item_1_image') ):
//vars
$fields = get_fields();
// echo '<pre>';
//     print_r( get_fields() );
// echo '</pre>';
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?php echo $fields['hs_carousel_item_1_image']; ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block hs-carousel__caption">
        <?php if( $fields['hs_carousel_item_1_caption']): ?>
          <?php echo $fields['hs_carousel_item_1_caption'] ?>
        <?php else: ?>
          <!--looks like there isn't a carousel item caption assigned to this-->
        <?php endif; ?>
      </div>
    </div>
        <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo $fields['hs_carousel_item_2_image']; ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block hs-carousel__caption">
        <?php if( $fields['hs_carousel_item_2_caption']): ?>
          <?php echo $fields['hs_carousel_item_2_caption'] ?>
        <?php else: ?>
          <!--looks like there isn't a carousel item caption assigned to this-->
        <?php endif; ?>
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php else: ?>
<!--looks like there isn't a carousel assigned to this page-->
<?php endif; ?>
<?php
/* php hook for this content
<?php
$test = "2";
include( locate_template( 'global-templates/hs-carousel.php' ) ); ?>
*/
?>