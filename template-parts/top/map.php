<?php $secName = "top-map";?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">
  <?php
    if(is_page('en')) {
      echo 'Map of the Surrounding Area';
    } else {
      echo '周辺MAP';
    }
    ?>
  </div>
  <div class="<?php echo $secName;?>__img">
    <?php if(is_page('en')):?>
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_map_en.png" alt="周辺MAP">
    <?php else:?>
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_map.png" alt="周辺MAP">
    <?php endif;?>
  </div>
</section>