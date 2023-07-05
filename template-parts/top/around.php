<?php $secName = "top-around";?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">周辺施設</div>
  <?php if(have_rows('acf_around_facility_group','option')):?>
  <ul class="<?php echo $secName;?>__list">
    <?php while(have_rows('acf_around_facility_group','option')): the_row();?>
    <!-- 01 -->
    <li>
      <div class="<?php echo $secName;?>__name"><?php the_sub_field('acf_around_facility_name');?></div>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php the_sub_field('acf_around_facility_img');?>">
        <div class="<?php echo $secName;?>__tag"><?php the_sub_field('acf_around_facility_tag');?></div>
        <a class="<?php echo $secName;?>__sns" href="">
          <span>
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
          </span>
        </a>
      </div>
      <div class="<?php echo $secName;?>__txt"><?php the_sub_field('acf_around_facility_txt');?></div>
    </li>
    <?php endwhile;?>
  </ul>
  <?php endif;?>
</section>