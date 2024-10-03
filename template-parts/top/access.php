<?php
$secName = "top-access";
?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">
    <?php
    if(is_page('en')) {
      echo 'Access';
    } else {
      echo 'アクセス';
    }
    ?>
  </div>
  <?php if(have_rows('acf_inn_group','option')):?>
  <ul class="<?php echo $secName;?>__list">
    <?php
      while(have_rows('acf_inn_group','option')): the_row();
      if(is_page('en')) {
        $access_address = get_sub_field('acf_inn_access_address_en');
        $access_time = get_sub_field('acf_inn_access_time_en');
      } else {
        $access_address = get_sub_field('acf_inn_access_address');
        $access_time = get_sub_field('acf_inn_access_time');
      }
      $access_name = get_sub_field('acf_inn_name');
      $access_map = get_sub_field('acf_inn_access_map');
      $access_post = get_sub_field('acf_inn_access_post_code');
    ?>
    <li>
      <div class="<?php echo $secName;?>__ttl font-en"><?php echo $access_name;?></div>
      <div class="<?php echo $secName;?>__map"><?php echo $access_map;?></div>
      <div class="<?php echo $secName;?>__detail">
        <!-- 住所 -->
        <div class="<?php echo $secName;?>__detail-item">
          <div class="<?php echo $secName;?>__detail-left">
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/access/icn_address.svg">
          </div>
          <div class="<?php echo $secName;?>__detail-right">
            〒<?php echo $access_post;?><br>
            <?php echo $access_address;?>
          </div>
        </div>
        <!-- 所要時間 -->
        <div class="<?php echo $secName;?>__detail-item">
          <div class="<?php echo $secName;?>__detail-left">
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/access/icn_car.svg">
          </div>
          <div class="<?php echo $secName;?>__detail-right">
            <?php echo $access_time;?>
          </div>
        </div>
      </div>
    </li>
    <?php endwhile;?>
  </ul>
  <?php endif;?>
</section>