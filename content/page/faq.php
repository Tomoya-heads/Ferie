<?php $pageName="page-faq";?>
<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__nav">
    <div class="<?php echo $pageName;?>__nav-list">
      <a href="#faq">よくあるご質問</a>
      <a href="#agreement">宿泊約款</a>
      <a href="#term">利用規約</a>
      <a href="#privacy">プライバシーポリシー</a>
    </div>
  </div>
  <div id="faq" class="<?php echo $pageName;?>__main">
    <div class="mod-ttl">よくあるご質問</div>
    <?php if(have_rows('acf_faq_group')):?>
    <ul class="<?php echo $pageName;?>__list">
      <?php while(have_rows('acf_faq_group')): the_row();?>
      <li>
        <div class="<?php echo $pageName;?>__ttl font-ja"><?php the_sub_field('acf_faq_container');?>について</div>
          <?php if(have_rows('acf_faq_detail_group')):?>
          <ul class="<?php echo $pageName;?>__detail">
            <?php while(have_rows('acf_faq_detail_group')): the_row();?>
            <li>
              <div class="<?php echo $pageName;?>__question">
                <span><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/faq/txt_q.svg"></span>
                <?php the_sub_field('acf_faq_question');?>
                <div class="<?php echo $pageName;?>__circle"></div>
              </div>
              <div class="<?php echo $pageName;?>__answer"><?php the_sub_field('acf_faq_answer');?></div>
            </li>
            <?php endwhile;?>
          </ul>
          <?php endif;?>
      </li>
      <?php endwhile;?>
    </ul>
    <?php endif;?>
  </div>
  <div class="<?php echo $pageName;?>__sub" id="agreement">
    <ul class="<?php echo $pageName;?>__sub-list">
      <!-- 宿泊約款 -->
      <li>
        <div class="mod-ttl">宿泊約款</div>
        <?php if(have_rows('acf_agreement_group')):?>
        <ul class="<?php echo $pageName;?>__term">
          <?php while(have_rows('acf_agreement_group')): the_row();?>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_agreement_ttl');?></div>
            <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_agreement_txt');?></div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>
        <ul class="<?php echo $pageName;?>__term-shortcode">
            <li>
              <div class="<?php echo $pageName;?>__term-shortcode-ttl">別表第1　宿泊料金等の内訳(第2条第1項及び第12条第1項関係)</div>
              <div class="<?php echo $pageName;?>__term-shortcode-inner"><?php echo do_shortcode('[table id=1 /]'); ?></div>
              <div class="<?php echo $pageName;?>__term-shortcode-caution">備考1 税法が改正された場合はその改正された規定によるものとします。</div>
            </li>
            <li>
              <div class="<?php echo $pageName;?>__term-shortcode-ttl">別表第2　違約金(第6条第2項関係)</div>
              <div class="<?php echo $pageName;?>__term-shortcode-inner"><?php echo do_shortcode('[table id=2 /]'); ?></div>
              <div class="<?php echo $pageName;?>__term-shortcode-caution">(注)%は、基本宿泊料に対する違約金の比率です。</div>
            </li>
          </ul>
      </li>
      <!-- 利用規約 -->
      <li id="term">
        <div class="mod-ttl">利用規約</div>
          <div class="<?php echo $pageName;?>__term-txt"><?php the_field('acf_term_intro');?></div>
          <?php if(have_rows('acf_term_group')):?>
          <ul class="<?php echo $pageName;?>__term">
          <?php while(have_rows('acf_term_group')): the_row();?>
            <li>
              <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_term_ttl');?></div>
              <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_term_txt');?></div>
            </li>
            <?php endwhile;?>
          </ul>
          <?php endif;?>
      </li>
      <!-- プライバシーポリシー -->
      <li id="privacy">
        <div class="mod-ttl">プライバシーポリシー</div>
        <div class="<?php echo $pageName;?>__term-txt"><?php the_field('acf_privacy_intro');?></div>
        <?php if(have_rows('acf_privacy_group')):?>
        <ul class="<?php echo $pageName;?>__term">
          <?php while(have_rows('acf_privacy_group')): the_row();?>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja"><?php the_sub_field('acf_privacy_ttl');?></div>
            <div class="<?php echo $pageName;?>__term-txt"><?php the_sub_field('acf_privacy_txt');?></div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>
      </li>
    </ul>
  </div>
</section>