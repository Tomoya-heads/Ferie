<?php
$uri = $_SERVER['REQUEST_URI'];
?>
</main>
<!-- ////コンテンツ -->
<!-- フッター -->
<footer class="common-footer" id="Footer">
  <!-- 予約ボタン -->
  <div class="fixed-btn">
    <div class="fixed-btn__inner">
      <?php if (is_page('en')):?>
        <div class="fixed-btn__txt">Book<br>Now</div>
      <?php else:?>
        <div class="fixed-btn__txt">予約は<br>こちら</div>
      <?php endif;?>
      <?php if(have_rows('acf_inn_group','option')):?>
      <div class="fixed-btn__list">
        <?php
          while(have_rows('acf_inn_group','option')): the_row();
          $lodge_name = get_sub_field('acf_inn_name');
          $lodge_reserve_link = get_sub_field('acf_inn_reserve_link');
        ?>
        <a class="font-en" href="<?php echo $lodge_reserve_link;?>" target="_blank"><?php echo $lodge_name;?></a>
        <?php endwhile;?>
      </div>
      <?php endif;?>
    </div>
  </div>
  <!-- ここまで -->
  <div class="common-footer__inner">
    <div class="common-footer__logo">
      <?php if(is_page('en')):?>
        <a href="<?php echo esc_url( home_url( '/en/' ) ); ?>">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-vertical.svg" alt="<?php bloginfo('name');?>">
        </a>
      <?php else:?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-vertical.svg" alt="<?php bloginfo('name');?>">
        </a>
      <?php endif;?>
    </div>
    <div class="common-footer__sns">
      <a href="https://www.instagram.com/ferielodge/" target="_blank">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
      </a>
      <a href="https://www.facebook.com/ferievacation" target="_blank">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_facebook.svg" alt="facebook">
      </a>
    </div>
    <nav class="common-footer__nav">
      <ul class="common-footer__navMenu">
        <?php 
          if(have_rows('acf_inn_group','option')):
          while(have_rows('acf_inn_group','option')): the_row();
          $lodge_name = get_sub_field('acf_inn_name');
          $lodge_link = get_sub_field('acf_inn_link');
        ?>
        <li>
          <?php if(is_page('en')):?>
            <a class="font-en" href="/en/#<?php echo $lodge_link;?>">
              <?php echo $lodge_name;?>
            </a>
          <?php else:?>
            <a class="font-en" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#<?php echo $lodge_link;?>">
              <?php echo $lodge_name;?>
            </a>
          <?php endif;?>
        </li>
        <?php endwhile; endif;?>
      </ul>
    </nav>
    <?php if ($uri === '/en/' || $uri === '/en'|| $uri === '/en/faq' || $uri === '/en/faq/'): ?>
      <a class="common-footer__contact" href="mailto:info@ferie.jp">Contact</a>
    <?php else: ?>
      <a class="common-footer__contact" href="mailto:info@ferie.jp">お問い合わせ</a>
      <?php endif; ?>
    <div class="common-footer__low">
      <?php if ($uri === '/en/' || $uri === '/en' || $uri === '/en/faq' || $uri === '/en/faq/'): ?>
        <a href="<?php echo home_url('/en/faq/');?>">FAQ</a>
        <a href="<?php echo home_url('/en/faq/#term');?>">Terms of Use</a>
        <a href="<?php echo home_url('/en/faq/#agreement');?>">Accommodation Agreement</a>
      <?php else: ?>
        <a href="<?php echo home_url('/faq/');?>">FAQ</a>
        <a href="<?php echo home_url('/faq/#term');?>">利用規約</a>
        <a href="<?php echo home_url('/faq/#agreement');?>">宿泊約款</a>
      <?php endif; ?>
    </div>
    <div class="common-footer__sponsor">
      <?php if (is_page('en')):?>
        <p>─ Ferie Lodge proudly supports the Japan Skyrunning Association. ─</p>
      <?php else:?>
        <p>─ Ferieは日本スカイランニング協会を応援しています ─</p>
      <?php endif;?>
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/img_jsa_logo.webp">
    </div>
    <small class="common-footer__copyright">&copy; 2023 Ferie</small>
  </div>
</footer>
<!-- ////フッター -->

</div><!-- / #Wrapper-->
<?php wp_footer(); ?>

</body>
</html>