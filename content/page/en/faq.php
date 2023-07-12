<?php
  $pageName="page-faq";
  if(have_rows('acf_faq_group_en')):while(have_rows('acf_faq_group_en')): the_row();
      $faq_container = get_sub_field('acf_faq_container_en');
    if(have_rows('acf_faq_detail_group_en')):while(have_rows('acf_faq_detail_group_en')): the_row();
      $faq_question = get_sub_field('acf_faq_question_en');
      $faq_answer = get_sub_field('acf_faq_answer_en');
    endwhile;endif;
  endwhile;endif;
?>
<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__nav">
    <div class="<?php echo $pageName;?>__nav-list">
      <a href="#faq-en">FAQ</a>
      <a href="#agreement-en">宿泊約款</a>
      <a href="#term-en">利用規約</a>
      <a href="#privacy-en">PRIVACY POLICY</a>
    </div>
  </div>
  <div id="faq-en" class="<?php echo $pageName;?>__main">
    <div class="mod-ttl">FAQ</div>
    <?php if(have_rows('acf_faq_group_en')):?>
    <ul class="<?php echo $pageName;?>__list">
      <?php while(have_rows('acf_faq_group_en')): the_row();?>
      <li>
        <div class="<?php echo $pageName;?>__ttl font-ja"><?php echo $faq_container;?>について</div>
          <?php if(have_rows('acf_faq_detail_group_en')):?>
          <ul class="<?php echo $pageName;?>__detail">
            <?php while(have_rows('acf_faq_detail_group_en')): the_row();?>
            <li>
              <div class="<?php echo $pageName;?>__question">
                <span><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/faq/txt_q.svg"></span>
                <?php echo $faq_question;?>
                <div class="<?php echo $pageName;?>__circle"></div>
              </div>
              <div class="<?php echo $pageName;?>__answer"><?php echo $faq_answer;?></div>
            </li>
            <?php endwhile;?>
          </ul>
          <?php endif;?>
      </li>
      <?php endwhile;?>
    </ul>
    <?php endif;?>
  </div>
  <div class="<?php echo $pageName;?>__sub" id="agreement-en">
    <ul class="<?php echo $pageName;?>__sub-list">
      <!-- 宿泊約款 -->
      <li>
        <div class="mod-ttl">宿泊約款</div>
        <?php if(have_rows('acf_agreement_group_en')):?>
        <ul class="<?php echo $pageName;?>__term">
          <?php while(have_rows('acf_agreement_group_en')): the_row();?>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_agreement_ttl_en');?></div>
            <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_agreement_txt_en');?></div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>
      </li>
      <!-- 利用規約 -->
      <li id="term-en">
        <div class="mod-ttl">利用規約</div>
          <div class="<?php echo $pageName;?>__term-txt"><?php the_field('acf_term_intro_en');?></div>
        <?php if(have_rows('acf_term_group_en')):?>
        <ul class="<?php echo $pageName;?>__term">
        <?php while(have_rows('acf_term_group_en')): the_row();?>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_term_ttl_en');?></div>
            <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_term_txt_en');?></div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>
      </li>
      <!-- プライバシーポリシー -->
      <li id="privacy-en">
        <div class="mod-ttl">プライバシーポリシー</div>
        <?php if(have_rows('acf_privacy_group_en')):?>
        <ul class="<?php echo $pageName;?>__term">
          <?php while(have_rows('acf_privacy_group_en')): the_row();?>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_privacy_ttl_en');?></div>
            <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_privacy_txt_en');?></div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>
      </li>
    </ul>
  </div>
</section>