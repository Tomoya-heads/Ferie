
</main>
<!-- ////コンテンツ -->

<!-- フッター -->
<footer class="common-footer" id="Footer">
  <span class="common-footer__pageTop" style="display:none">TOP</span>
  <div class="common-footer__inner">
    <nav class="common-footer__nav">
      <ul class="common-footer__navMenu">
        <li><a href="<?php echo home_url('/');?>">Top</a></li>
        <li><a href="<?php echo home_url('/about/');?>">About</a></li>
        <li><a href="<?php echo home_url('/service/');?>">Service</a></li>
        <li><a href="<?php echo home_url('/members/');?>">Members</a></li>
        <li><a href="<?php echo home_url('/company/');?>">Company</a></li>
        <li><a href="<?php echo home_url('/contact/');?>">Contact</a></li>
        <li><a href="<?php echo home_url('/privacy-policy/');?>">Privacy Policy</a></li>
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