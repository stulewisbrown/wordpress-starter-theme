
  <?php $icon = get_field('icon'); ?>
  <?php if ($icon) :
    $icon_src = content_url('uploads/icons/') . $icon . "-icon.png";
  ?>
  <div class="text-center mb-3">
    <img class="hs-icon-top" src="<?php echo $icon_src ?>">
  </div>
  <?php else : ?>
    <!--no icon-->
  <?php endif ?>
