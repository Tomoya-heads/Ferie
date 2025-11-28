<?php
  $pageName="page-faq";
  if(have_rows('acf_faq_group_en')):while(have_rows('acf_faq_group_en')): the_row();
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
      <a href="#agreement-en">Accommodation Agreement</a>
      <a href="#term-en">Terms of Use</a>
      <a href="#privacy-en">PRIVACY POLICY</a>
    </div>
  </div>
  <div id="faq-en" class="<?php echo $pageName;?>__main">
    <div class="mod-ttl">FAQ</div>
    <?php if(have_rows('acf_faq_group_en')):?>
    <ul class="<?php echo $pageName;?>__list">
      <?php while(have_rows('acf_faq_group_en')): the_row();?>
      <li>
        <div class="<?php echo $pageName;?>__ttl font-ja"><?php the_sub_field('acf_faq_container_en')?></div>
          <?php if(have_rows('acf_faq_detail_group_en')):?>
          <ul class="<?php echo $pageName;?>__detail">
            <?php while(have_rows('acf_faq_detail_group_en')): the_row();?>
            <li>
              <div class="<?php echo $pageName;?>__question">
                <span><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/faq/txt_q.svg"></span>
                <?php the_sub_field('acf_faq_question_en');?>
                <div class="<?php echo $pageName;?>__circle"></div>
              </div>
              <div class="<?php echo $pageName;?>__answer"><?php the_sub_field('acf_faq_answer_en');?></div>
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
        <div class="mod-ttl">Accommodation Agreement</div>
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
        <ul class="<?php echo $pageName;?>__term-shortcode">
          <li>
            <div class="<?php echo $pageName;?>__term-shortcode-ttl">Attached Table No.1<br/>The breakdown of the Accommodation Charges, etc.<br/>(Ref.Paragraph 1 of Article 2, and Paragraph 1 of Article 12)</div>
            <div class="<?php echo $pageName;?>__term-shortcode-inner"><?php echo do_shortcode('[table id=3 /]'); ?></div>
            <div class="<?php echo $pageName;?>__term-shortcode-caution">Remarks of Table No. 1<br/>Those charges are subject to change to revisions of the Tax Laws concerned.</div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-shortcode-ttl">Attached Table No.2<br/>Cancellation charge for Lodge (Ref. Paragraph 2 of Article 6)</div>
            <div class="<?php echo $pageName;?>__term-shortcode-inner"><?php echo do_shortcode('[table id=4 /]'); ?></div>
            <div class="<?php echo $pageName;?>__term-shortcode-caution">Remarks:1. The percentages signify the cancellation charge to the Basic Accommodation Charges.</div>
          </li>
        </ul>
      </li>
      <!-- 利用規約 -->
      <li id="term-en">
        <div class="mod-ttl">Terms of Use</div>
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
        <div class="mod-ttl">Privacy Policy</div>
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