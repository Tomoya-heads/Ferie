<?php $secName = "top-map";?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">
  <?php
    if(is_page('en')) {
      echo 'MAP';
    } else {
      echo '周辺MAP';
    }
    ?>
  </div>
  <div class="<?php echo $secName;?>__img">
    <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_map.png" alt="周辺MAP">
  </div>
</section>