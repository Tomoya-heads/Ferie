<?php $secName = "top-inn";?>
<?php //if ($counter >= 2): //2件目から表示 ?>
<div class="<?php echo $secName;?>__nav">
  <div class="mod-ttl w">宿のご紹介</div>
  <?php if(have_rows('acf_inn_group','option')):?>
  <div class="<?php echo $secName;?>__nav-list">
  <?php
    while(have_rows('acf_inn_group','option')): the_row();
    $lodge_name = get_sub_field('acf_inn_name');
    $lodge_link = get_sub_field('acf_inn_link');
    $lodge_img = get_sub_field('acf_inn_main_img');
  ?>
    <a href="#<?php echo $lodge_link;?>">
      <div class="<?php echo $secName;?>__nav-ttl font-en"><?php echo $lodge_name;?></div>
      <div class="<?php echo $secName;?>__nav-img"><img class="object_fit" src="<?php echo $lodge_img;?>"></div>
    </a>
    <?php endwhile;?>
  </div>
  <?php endif;?>
</div>
<?php //endif;?>
<?php
  if(have_rows('acf_inn_group','option')): while(have_rows('acf_inn_group','option')): the_row();
  $lodge_name = get_sub_field('acf_inn_name');
  $lodge_link = get_sub_field('acf_inn_link');
  $lodge_img = get_sub_field('acf_inn_main_img');
?>
<section id="<?php echo $lodge_link;?>" class="<?php echo $secName;?>">
  <!-- 上段 -->
  <div class="<?php echo $secName;?>__high">
    <div class="mod-ttl w">宿のご紹介</div>
    <div class="<?php echo $secName;?>__intro">
      <!-- 1段目 -->
      <?php if(have_rows('acf_inn_introduction_01','option')): while(have_rows('acf_inn_introduction_01','option')): the_row(); ?>
      <div class="<?php echo $secName;?>__intro-sec">
        <div class="<?php echo $secName;?>__intro-inner">
          <div class="<?php echo $secName;?>__intro-ttl font-en"><?php echo $lodge_name;?></div>
          <div class="<?php echo $secName;?>__intro-txt"><span><?php the_sub_field('acf_inn_introduction_01_txt');?></span></div>
          <div class="<?php echo $secName;?>__intro-img"><img class="object_fit" src="<?php echo $lodge_img;?>"></div>
        </div>
      </div>
      <?php endwhile; endif;?>

      <!-- 2段目 -->
      <?php if(have_rows('acf_inn_introduction_02','option')): while(have_rows('acf_inn_introduction_02','option')): the_row(); ?>
      <div class="<?php echo $secName;?>__intro-sec">
        <div class="<?php echo $secName;?>__intro-inner">
          <div class="<?php echo $secName;?>__intro-ttl font-ja"><?php the_sub_field('acf_inn_introduction_02_ttl');?></div>
          <div class="<?php echo $secName;?>__intro-txt"><span><?php the_sub_field('acf_inn_introduction_02_txt');?></span></div>
          <div class="<?php echo $secName;?>__intro-img"><img class="object_fit" src="<?php the_sub_field('acf_inn_introduction_02_img');?>"></div>
        </div>
      </div>
      <?php endwhile; endif;?>

      <!-- 3段目 -->
      <?php if(have_rows('acf_inn_introduction_03','option')): while(have_rows('acf_inn_introduction_03','option')): the_row(); ?>
      <div class="<?php echo $secName;?>__intro-sec">
        <div class="<?php echo $secName;?>__intro-inner">
          <div class="<?php echo $secName;?>__intro-ttl font-ja"><?php the_sub_field('acf_inn_introduction_03_ttl');?></div>
          <div class="<?php echo $secName;?>__intro-txt"><span><?php the_sub_field('acf_inn_introduction_03_txt');?></span></div>
          <div class="<?php echo $secName;?>__intro-img"><img class="object_fit" src="<?php the_sub_field('acf_inn_introduction_03_img');?>"></div>
        </div>
      </div>
      <?php endwhile; endif;?>
    </div>
  </div>
  <!-- 下段 -->
  <div class="<?php echo $secName;?>__low">
    <div class="<?php echo $secName;?>__low-fixed font-en"><?php echo $lodge_name;?></div>
    <!-- 特徴 -->
    <div class="<?php echo $secName;?>__feature">
      <div class="<?php echo $secName;?>__feature-img"><img class="object_fit" src="<?php the_sub_field('acf_inn_feature_img');?>"></div>
      <div class="<?php echo $secName;?>__feature-intro"><span class="font-en"><?php echo $lodge_name;?></span>の特徴</div>
      <div class="<?php echo $secName;?>__feature-concept font-ja"><?php the_sub_field('acf_inn_feature_concept');?></div>
      <?php if(have_rows('acf_inn_feature_group','option')): ?>
      <ul class="<?php echo $secName;?>__feature-list">
        <?php while(have_rows('acf_inn_feature_group','option')): the_row(); ?>
        <li>
          <div class="<?php echo $secName;?>__feature-icn"><img class="object_fit" src="<?php the_sub_field('acf_inn_feature_icn');?>"></div>
          <div class="<?php echo $secName;?>__feature-ttl"><?php the_sub_field('acf_inn_feature_ttl');?></div>
          <div class="<?php echo $secName;?>__feature-explanation"><?php the_sub_field('acf_inn_feature_explanation');?></div>
        </li>
        <?php endwhile;?>
      </ul>
      <?php endif;?>
    </div>
    <!-- 設備紹介 -->
    <div class="<?php echo $secName;?>__facility">
      <div class="mod-ttl">設備紹介</div>

      <div class="<?php echo $secName;?>__facility-inner">
        <div class="<?php echo $secName;?>__facility-left">
        <!-- メイン画像 -->
          <div class="<?php echo $secName;?>__facility-left-high">
            <div class="<?php echo $secName;?>__facility-left-high-inner interlocking_slider">
              <?php if(have_rows('acf_inn_facility_group')): while(have_rows('acf_inn_facility_group')): the_row();?>
              <div class="<?php echo $secName;?>__facility-left-high-thumb">
                <div class="<?php echo $secName;?>__facility-left-high-img">
                  <img class="object_fit" src="<?php the_sub_field('acf_inn_facility_img');?>">
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
          <!-- 12面パネル -->
          <div class="<?php echo $secName;?>__facility-left-low interlocking_slider">
            <div class="<?php echo $secName;?>__facility-left-low-inner">
              <?php if(have_rows('acf_inn_facility_group')):$count_post = 0;
                while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post < 11):?>
                <div class="<?php echo $secName;?>__facility-left-low-item <?php echo $count_post;?>">
                  <img class="object_fit" src="<?php the_sub_field('acf_inn_facility_img');?>">
                </div>
              <?php endif;endwhile; endif;?>
            </div>

            <?php if(have_rows('acf_inn_facility_group')): ?>
            <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 10 && $count_post <= 11):?>
            <div class="<?php echo $secName;?>__facility-left-low-inner">
            <?php endif; endwhile;?>
              <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 10 && $count_post <= 20):?>
                <div class="<?php echo $secName;?>__facility-left-low-item <?php echo $count_post;?>">
                  <img class="object_fit" src="<?php the_sub_field('acf_inn_facility_img');?>">
                </div>
              <?php endif; endwhile;?>
            <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 10 && $count_post <= 11):?>
            </div>
            <?php endif; endwhile;endif;?>

            <?php if(have_rows('acf_inn_facility_group')): ?>
            <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 20 && $count_post <= 21):?>
            <div class="<?php echo $secName;?>__facility-left-low-inner">
            <?php endif; endwhile;?>
              <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 20 && $count_post <= 30):?>
                <div class="<?php echo $secName;?>__facility-left-low-item <?php echo $count_post;?>">
                  <img class="object_fit" src="<?php the_sub_field('acf_inn_facility_img');?>">
                </div>
              <?php endif; endwhile;?>
            <?php $count_post = 0; while(have_rows('acf_inn_facility_group')): the_row();$count_post++;if($count_post > 30 && $count_post <= 31):?>
            </div>
            <?php endif; endwhile;endif;?>
          </div>
          <div class="<?php echo $secName;?>__facility-left-num"></div>
        </div>
        <div class="<?php echo $secName;?>__facility-right">
          <?php if(have_rows('acf_inn_facility_group')): while(have_rows('acf_inn_facility_group')): the_row();?>
          <div  class="<?php echo $secName;?>__facility-right-inner">
              <h3 class="<?php echo $secName;?>__facility-right-ttl"><?php the_sub_field('acf_inn_facility_name');?><br>について</h3>
              <p class="<?php echo $secName;?>__facility-right-txt"><?php the_sub_field('acf_inn_facility_txt');?></p>
          </div>
          <?php endwhile; endif;?>
        </div>
      </div>
    </div>
    <!-- 施設情報・宿泊料金 -->
    <div class="<?php echo $secName;?>__info">
      <ul class="<?php echo $secName;?>__info-list">
        <!-- 施設情報 -->
        <li>
          <div class="<?php echo $secName;?>__info-ttl font-ja">施設情報</div>
          <ul class="<?php echo $secName;?>__info-facility">
          <!-- 営業時間 -->
            <li>
              <div class="<?php echo $secName;?>__info-facility-left">営業時間</div>
              <?php if(have_rows('acf_inn_business_hours_group')): while(have_rows('acf_inn_business_hours_group')): the_row();?>
              <div class="<?php echo $secName;?>__info-facility-right">
                チェックイン　　<?php the_sub_field('acf_inn_business_hours_checkin');?><br>
                チェックアウト　　<?php the_sub_field('acf_inn_business_hours_checkout');?>
              </div>
              <?php endwhile; endif;?>
            </li>
            <!-- 営業時間 -->
            <li>
              <div class="<?php echo $secName;?>__info-facility-left">アメニティー</div>
              <div class="<?php echo $secName;?>__info-facility-right"><?php the_sub_field('acf_inn_amenities');?></div>
            </li>
          </ul>
        </li>
        <!-- 宿泊料金 -->
        <li>
          <div class="<?php echo $secName;?>__info-ttl font-ja">宿泊料金</div>
          <?php if(have_rows('acf_inn_fee_group')): while(have_rows('acf_inn_fee_group')): the_row();?>
            <div class="<?php echo $secName;?>__info-explanation"><?php the_sub_field('acf_inn_fee_explanation');?></div>
            <?php if(have_rows('acf_inn_fee_detail_group')):?>
            <ul class="<?php echo $secName;?>__info-fee">
              <?php while(have_rows('acf_inn_fee_detail_group')): the_row();?>
              <li>
                <div class="<?php echo $secName;?>__info-fee-left"><?php the_sub_field('acf_inn_fee_detail_date');?></div>
                <div class="<?php echo $secName;?>__info-fee-right">¥<?php the_sub_field('acf_inn_fee_detail_number');?></div>
              </li>
              <?php endwhile;?>
            </ul>
            <?php endif;?>
            <!-- 注意事項 -->
            <?php if(have_rows('acf_inn_fee_caution_group')):?>
            <ul class="<?php echo $secName;?>__info-caution">
              <?php while(have_rows('acf_inn_fee_caution_group')): the_row();?>
              <li>
                <div class="<?php echo $secName;?>__info-caution-left">※</div>
                <div class="<?php echo $secName;?>__info-caution-right"><?php the_sub_field('acf_inn_fee_caution_container');?></div>
              </li>
              <?php endwhile;?>
            </ul>
            <?php endif;?>
          <?php endwhile; endif;?>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>