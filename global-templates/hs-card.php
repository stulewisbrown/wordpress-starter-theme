<div class="card text-center <?php echo $classes ?>">
  <div class="card-header">
    <?php echo $card_header ?>
  </div>
  <div class="card-block">
    <h4 class="card-title"><?php echo $card_title ?></h4>
    <p class="card-text"><?php echo $content ?></p>
    <a href="#" class="btn btn-primary"><?php echo $btn_text ?></a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

<?php
/*
<?php 
  $classes="class-name class-name2";
  $card_header="card header";
  $card_title="card title";
  $content="content";
  $btn_text="button text";
  include( locate_template( 'global-templates/hs-card.php' ) ); 
?>
*/
?>