<?php
$secName = "top-around";
// 周辺施設　変数
if(have_rows('acf_around_facility_group','option')):while(have_rows('acf_around_facility_group','option')): the_row();
  if(is_page('en')) {
    $facility_name = get_sub_field('acf_around_facility_name_en');
    $facility_tag = get_sub_field('acf_around_facility_tag_en');
    $facility_txt = get_sub_field('acf_around_facility_txt_en');
  } else {
    $facility_name = get_sub_field('acf_around_facility_name');
    $facility_tag = get_sub_field('acf_around_facility_tag');
    $facility_txt = get_sub_field('acf_around_facility_txt');
  }
endwhile; endif;
?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">
    <?php
      if(is_page('en')) {
        echo 'Surrounding Facilities';
      } else {
        echo '周辺施設';
      }
    ?>
  </div>
  <?php if(have_rows('acf_around_facility_group','option')): $i = 0;?>
  <ul class="<?php echo $secName;?>__list">
    <?php while(have_rows('acf_around_facility_group','option')): the_row(); $i++;?>
    <!-- 01 -->
    <li>
      <div class="<?php echo $secName;?>__name"><span><?php echo $i;?>.<?php echo $facility_name;?></span></div>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php the_sub_field('acf_around_facility_img');?>">
        <div class="<?php echo $secName;?>__tag"><?php echo $facility_tag;?></div>
        <a class="<?php echo $secName;?>__sns" href="">
          <span>
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
          </span>
        </a>
      </div>
      <div class="<?php echo $secName;?>__txt"><?php echo $facility_txt;?></div>
    </li>
    <?php endwhile;?>
  </ul>
  <?php endif;?>
</section>