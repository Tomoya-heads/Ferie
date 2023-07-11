<?php $secName = "top-using";?>
<section class="<?php echo $secName;?>">
  <div class="mod-ttl">
    <?php
      if(is_page('en')) {
        echo 'How to use';
      } else {
        echo 'ご利用方法';
      }
    ?>
  </div>
  <ul class="<?php echo $secName;?>__list">
    <!-- 01 -->
    <li>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/using/icn_step01.svg">
      </div>
      <div class="<?php echo $secName;?>__group">
        <div class="<?php echo $secName;?>__step font-en">STEP1</div>
        <div class="<?php echo $secName;?>__ttl font-ja">
        <?php if (is_page('en')):?>
          Deserve
        <?php else:?>
          予約する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
      <?php if (is_page('en')):?>
        英語の文章が入ります。
      <?php else:?>
        ご自身合った宿をお選びいただき、プランを選択してください。
      <?php endif;?>
      </div>
    </li>
    <!-- 02 -->
    <li>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/using/icn_step02.svg">
      </div>
      <div class="<?php echo $secName;?>__group">
        <div class="<?php echo $secName;?>__step font-en">STEP2</div>
        <div class="<?php echo $secName;?>__ttl font-ja">
        <?php if (is_page('en')):?>
          Entering
        <?php else:?>
          入室する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
      <?php if (is_page('en')):?>
        英語の文章が入ります。
      <?php else:?>
        扉にキーの入ったボックスがかかっていますのでご自身で開錠してください。詳細はご予約メールにてお送りいたします。
      <?php endif;?>
      </div>
    </li>
    <!-- 03 -->
    <li>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/using/icn_step03.svg">
      </div>
      <div class="<?php echo $secName;?>__group">
        <div class="<?php echo $secName;?>__step font-en">STEP3</div>
        <div class="<?php echo $secName;?>__ttl font-ja">
        <?php if (is_page('en')):?>
          Spend
        <?php else:?>
          過ごす
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
        <?php if (is_page('en')):?>
          英語の文章が入ります。
        <?php else:?>
          素敵な時間をお過ごしください。ご不明点があれば、<a href="#">こちら</a>の連絡先にお問い合わせください。
        <?php endif;?>
      </div>
    </li>
    <!-- 04 -->
    <li>
      <div class="<?php echo $secName;?>__img">
        <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/using/icn_step04.svg">
      </div>
      <div class="<?php echo $secName;?>__group">
        <div class="<?php echo $secName;?>__step font-en">STEP4</div>
        <div class="<?php echo $secName;?>__ttl font-ja">
        <?php if (is_page('en')):?>
          Leaving
        <?php else:?>
          退出する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
        <?php if (is_page('en')):?>
          英語の文章が入ります。
        <?php else:?>
          玄関の扉にセキュリティーボックスがかかっておりますので、鍵をご返却ください。詳細はご予約メールにてお送りいたします。
        <?php endif;?>
      </div>
    </li>
  </ul>
</section>