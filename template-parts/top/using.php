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
          Reserve
        <?php else:?>
          予約する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
      <?php if (is_page('en')):?>
        Please select your dates and number of guests, then proceed with reservation and payment.
      <?php else:?>
        日付・人数を選択し、予約・決済を行ってください
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
          Enter the Lodge
        <?php else:?>
          入室する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
      <?php if (is_page('en')):?>
        You will find a key box attached to the entrance door.Please unlock it using the instructions sent to you in your reservation email/SNS.
      <?php else:?>
        玄関扉にキーの入ったセキュリティボックスがかかっていますので、ご自身で開錠してください。詳細はご予約メールにてお送りいたします。
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
          Enjoy Your Stay
        <?php else:?>
          過ごす
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
        <?php if (is_page('en')):?>
          We hope you enjoy your stay. If you have any questions, please feel free to contact us.
        <?php else:?>
          素敵な時間をお過ごしください。ご不明点があれば、<a href="mailto:info@ferie.jp">こちら</a>の連絡先にお問い合わせください
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
          Check Out
        <?php else:?>
          退出する
        <?php endif;?>
        </div>
      </div>
      <div class="<?php echo $secName;?>__txt">
        <?php if (is_page('en')):?>
          A security box is attached to the entrance door.Please return the key to the box when you check out.
        <?php else:?>
          玄関の扉にセキュリティーボックスがかかっておりますので、鍵をご返却ください。
        <?php endif;?>
      </div>
    </li>
  </ul>
</section>