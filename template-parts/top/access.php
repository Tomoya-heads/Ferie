<?php $secName = "top-access";?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">アクセス</div>
  <?php if(have_rows('acf_inn_group','option')):?>
  <ul class="<?php echo $secName;?>__list">
    <?php while(have_rows('acf_inn_group','option')): the_row();?>
    <li>
      <div class="<?php echo $secName;?>__ttl font-en"><?php the_sub_field('acf_inn_name');?></div>
      <div class="<?php echo $secName;?>__map"><?php the_sub_field('acf_inn_access_map');?></div>
      <div class="<?php echo $secName;?>__detail">
        <!-- 住所 -->
        <div class="<?php echo $secName;?>__detail-item">
          <div class="<?php echo $secName;?>__detail-left">
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/access/icn_address.svg">
          </div>
          <div class="<?php echo $secName;?>__detail-right">
            〒<?php the_sub_field('acf_inn_access_post_code');?><br>
            <?php the_sub_field('acf_inn_access_address');?>
          </div>
        </div>
        <!-- 所要時間 -->
        <div class="<?php echo $secName;?>__detail-item">
          <div class="<?php echo $secName;?>__detail-left">
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/access/icn_car.svg">
          </div>
          <div class="<?php echo $secName;?>__detail-right">
            <?php the_sub_field('acf_inn_access_time');?>
          </div>
        </div>
      </div>
    </li>
    <?php endwhile;?>
  </ul>
  <?php endif;?>
</section>