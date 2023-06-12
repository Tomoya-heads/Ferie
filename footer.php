
</main>
<!-- ////コンテンツ -->

<!-- フッター -->
<footer class="common-footer" id="Footer">
  <span class="common-footer__pageTop" style="display:none">TOP</span>
  <div class="common-footer__inner">
    <nav class="common-footer__nav">
      <ul class="common-footer__navMenu">
        <li><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#villa1">Villa1</a></li>
        <li><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#villa1">Villa2</a></li>
        <li><a href="<?php echo home_url( '/faq/' ); ?>">FAQ</a></li>
        <li><a href="<?php echo home_url( '/faq/' ); ?>">利用規約</a></li>
        <li><a href="<?php echo home_url( '/faq/' ); ?>">宿泊約款</a></li>
        <li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
      </ul>
    </nav>
    <small class="common-footer__copyright">Copyright &copy; サイト名</small>
  </div>
</footer>
<!-- ////フッター -->

</div><!-- / #Wrapper-->
<?php wp_footer(); ?>

</body>
</html>