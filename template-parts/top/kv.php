<?php $secName = "top-kv";?>
<section class="<?php echo $secName;?>">
  <div class="<?php echo $secName;?>__inner">
    <!-- 01 -->
    <div class="<?php echo $secName;?>__sec">
      <?php if(is_page('en')): ?>
        <div class="<?php echo $secName;?>__ttl font-en"><small>A getaway just for you<br>in the serene forest</small></div>
      <?php else:?>
        <div class="<?php echo $secName;?>__ttl font-ja">森の中<small>で</small><br>あなただけ<small>の</small><br>休暇<small>を</small></div>
      <?php endif;?>
    </div>
    <!-- 02 -->
    <div class="<?php echo $secName;?>__sec">
      <div class="<?php echo $secName;?>__container">
        <?php if(is_page('en')): ?>
          <div class="<?php echo $secName;?>__ttl font-en">
            <small>Relax and unwind,<br>surrounded by the serene nature<br>of the Asama Highlands.</small></div>
          Escape the hustle and bustle of the city and enjoy slow, meaningful moments with your loved ones at Felie Lodge embraced by nature.
        <?php else:?>
          <div class="<?php echo $secName;?>__ttl font-ja">浅間高原<small>の</small>自然<small>に</small><br>包まれてすごす</div>
          都会の喧騒から離れ、自然に囲まれたロッジで、大切な人と大切な時間をゆっくり過ごしてください<br>
          浅間高原の大自然が温かく迎えてくれます
        <?php endif;?>
      </div>
    </div>
    <!-- 03 -->
    <div class="<?php echo $secName;?>__sec">
      <div class="<?php echo $secName;?>__container">
        <?php if(is_page('en')): ?>
          <div class="<?php echo $secName;?>__ttl font-en"><small>Savor precious moments<br>in a private space</small></div>
          In the lodge’s outdoor garden, you’ll find a private zone reserved exclusively for you and your loved ones. 
          Enjoy the barrel sauna or a BBQ with family and friends, and why not try some fun activities on the log steps made from locally sourced wood with your children or group members?
        <?php else:?>
          <div class="<?php echo $secName;?>__ttl font-ja">プライベート<small>な</small>空間<small>で</small><br>大切<small>な</small>時間<small>を</small>愉しむ</div>
          ロッジの外庭には、大切な人たちだけで愉しめるプライベートゾーンがあります<br>
          バレルサウナやBBQを、ご家族やお仲間で楽しんでいただけるほか、地元の木材で作った丸太ステップで、お子さまやお仲間とのアクティビティはいかがでしょうか
        <?php endif;?>
      </div>
    </div>
    <?php /*
    <div class="<?php echo $secName;?>__scroll">
      scroll
      <div class="<?php echo $secName;?>__scroll-circle">
        <div id="counter">0%</div>
        <div class="circle" id="circle01"></div>
        <div class="circle" id="circle02"></div>
        <div class="circle" id="circle03"></div>
      </div>
    </div>
    */?>
  </div>
</section>