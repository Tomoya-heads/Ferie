
</main>
<!-- ////コンテンツ -->

<!-- フッター -->
<footer class="common-footer" id="Footer">
  <span class="common-footer__pageTop" style="display:none">TOP</span>
  <div class="common-footer__inner">
    <div class="common-footer__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-vertical.svg" alt="<?php bloginfo('name');?>">
      </a>
    </div>
    <div class="common-footer__sns">
      <a class="#">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
      </a>
      <a class="#">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_facebook.svg" alt="facebook">
      </a>
    </div>
    <nav class="common-footer__nav">
      <ul class="common-footer__navMenu">
        <li><a class="font-en" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#villa1"><span>Ferie</span>Lodge 1st</a></li>
      </ul>
    </nav>
    <a class="common-footer__contact">お問い合わせ</a>
    <div class="common-footer__low">
      <a class="#">FAQ</a>
      <a class="#">利用規約</a>
      <a class="#">宿泊約款</a>
    </div>
    <small class="common-footer__copyright">&copy; 2023 Ferie</small>
  </div>
</footer>
<!-- ////フッター -->

</div><!-- / #Wrapper-->
<?php wp_footer(); ?>

</body>
</html>