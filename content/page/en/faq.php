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
        <ul class="<?php echo $pageName;?>__term">
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">適用範囲</div>
            <div class="<?php echo $pageName;?>__term-txt">
              第１条 当ホテル(館)が宿泊客との間で締結する宿泊契約及びこれに関連する契約は、この約款の定めるところによるものとし、この約款に定めのない事項については、法令又は一般に確立された慣習によるものとします。<br>
              2. 当ホテル(館)が、法令及び慣習に反しない範囲で特約に応じたときは、前項の規定にかかわらず、その特約が優先するものとします。
            </div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">宿泊契約の申込み</div>
            <div class="<?php echo $pageName;?>__term-txt">
              第２条 当ホテル(館)に宿泊契約の申込みをしようとする者は、次の事項を当ホテル(館)に申し出ていただきます。<br>
              (1) 宿泊者名<br>
              (2) 宿泊日及び到着予定時刻<br>
              (3) 泊料金(原則として別表第１の基本宿泊料による。)<br>
              (4) その他当ホテル(館)が必要と認める事項<br>
              2. 宿泊客が、宿泊中に前項第2号の宿泊日を超えて宿泊の継続を申し入れた場合、当ホテル(館)は、その申し出がなされた時点で新たな宿泊契約の申し込みがあったものとして処理します。
            </div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">宿泊契約の成立等</div>
            <div class="<?php echo $pageName;?>__term-txt">
              第３条 宿泊契約は、当ホテル(館)が前条の申し込みを承諾したときに成立するものとします。ただし、当ホテル(館)が承諾をしなかったことを証明したときは、この限りではありません。<br>
              2. 前項の規定により宿泊契約が成立したときは、宿泊期間(3日を超えるときは3日間)の基本宿泊料を限度として当ホテル(館)が定める申込金を、当ホテル(館)が指定する日までに、お支払いいただきます。<br>
              3. 申込金は、まず、宿泊客が最終的に支払うべき宿泊料金に充当し、第6条及び第18条の規定を適用する事態が生じたときは、違約金に次いで賠償金の順序で充当し、残額があれば、第12条の規定による料金の支払いの際に返還します。<br>
              4. 第2項の申込金を同項の規定により当ホテル(館)が指定した日までにお支払いいただけない場合は、宿泊契約はその効力を失うものとします。ただし、申込金の支払期日を指定するに当たり、当ホテル(館)がその旨を宿泊客に告知した場合に限ります。
            </div>
          </li>
        </ul>
      </li>
      <!-- 利用規約 -->
      <li id="term-en">
        <div class="mod-ttl">利用規約</div>
          <div class="<?php echo $pageName;?>__term-txt">
            この利用規約（以下，「本規約」といいます。）は，＿＿＿＿＿（以下，「当社」といいます。）がこのウェブサイト上で提供するサービス（以下，「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下，「ユーザー」といいます。）には，本規約に従って，本サービスをご利用いただきます。
          </div>
        <ul class="<?php echo $pageName;?>__term">
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">第1条（適用）</div>
            <div class="<?php echo $pageName;?>__term-txt">
              1.　本規約は，ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。<br>
              2.　当社は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。<br>
              3.　本規約の規定が前条の個別規定の規定と矛盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。
            </div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">第2条（利用登録）</div>
            <div class="<?php echo $pageName;?>__term-txt">
              本サービスにおいては，登録希望者が本規約に同意の上，当社の定める方法によって利用登録を申請し，当社がこの承認を登録希望者に通知することによって，利用登録が完了するものとします。<br>
              当社は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。<br>
              利用登録の申請に際して虚偽の事項を届け出た場合<br>
              本規約に違反したことがある者からの申請である場合<br>
              その他，当社が利用登録を相当でないと判断した場合
            </div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">第3条 (ユーザーIDおよびパスワードの管理)</div>
            <div class="<?php echo $pageName;?>__term-txt">
              ユーザーは，自己の責任において，本サービスのユーザーIDおよびパスワードを適切に管理するものとします。<br>
              ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与し，もしくは第三者と共用することはできません。当社は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。<br>
              ユーザーID及びパスワードが第三者によって使用されたことによって生じた損害は，当社に故意又は重大な過失がある場合を除き，当社は一切の責任を負わないものとします。
            </div>
          </li>
          <li>
            <div class="<?php echo $pageName;?>__term-ttl font-ja">第4条（利用料金および支払方法）</div>
            <div class="<?php echo $pageName;?>__term-txt">
              ユーザーは，本サービスの有料部分の対価として，当社が別途定め，本ウェブサイトに表示する利用料金を，当社が指定する方法により支払うものとします。<br>
              ユーザーが利用料金の支払を遅滞した場合には，ユーザーは年14．6％の割合による遅延損害金を支払うものとします。
            </div>
          </li>
        </ul>
      </li>
      <!-- プライバシーポリシー -->
      <li id="privacy-en">
        <div class="mod-ttl">プライバシーポリシー</div>
        <ul class="<?php echo $pageName;?>__term">
        <li>
          <div class="<?php echo $pageName;?>__term-ttl font-ja">適用範囲</div>
          <div class="<?php echo $pageName;?>__term-txt">
            第１条 当ホテル(館)が宿泊客との間で締結する宿泊契約及びこれに関連する契約は、この約款の定めるところによるものとし、この約款に定めのない事項については、法令又は一般に確立された慣習によるものとします。<br>
            2. 当ホテル(館)が、法令及び慣習に反しない範囲で特約に応じたときは、前項の規定にかかわらず、その特約が優先するものとします。
          </div>
        </li>
        <li>
          <div class="<?php echo $pageName;?>__term-ttl font-ja">宿泊契約の申込み</div>
          <div class="<?php echo $pageName;?>__term-txt">
            第２条 当ホテル(館)に宿泊契約の申込みをしようとする者は、次の事項を当ホテル(館)に申し出ていただきます。<br>
            (1) 宿泊者名<br>
            (2) 宿泊日及び到着予定時刻<br>
            (3) 泊料金(原則として別表第１の基本宿泊料による。)<br>
            (4) その他当ホテル(館)が必要と認める事項<br>
            2. 宿泊客が、宿泊中に前項第2号の宿泊日を超えて宿泊の継続を申し入れた場合、当ホテル(館)は、その申し出がなされた時点で新たな宿泊契約の申し込みがあったものとして処理します。
          </div>
        </li>
        <li>
          <div class="<?php echo $pageName;?>__term-ttl font-ja">宿泊契約の成立等</div>
          <div class="<?php echo $pageName;?>__term-txt">
            第３条 宿泊契約は、当ホテル(館)が前条の申し込みを承諾したときに成立するものとします。ただし、当ホテル(館)が承諾をしなかったことを証明したときは、この限りではありません。<br>
            2. 前項の規定により宿泊契約が成立したときは、宿泊期間(3日を超えるときは3日間)の基本宿泊料を限度として当ホテル(館)が定める申込金を、当ホテル(館)が指定する日までに、お支払いいただきます。<br>
            3. 申込金は、まず、宿泊客が最終的に支払うべき宿泊料金に充当し、第6条及び第18条の規定を適用する事態が生じたときは、違約金に次いで賠償金の順序で充当し、残額があれば、第12条の規定による料金の支払いの際に返還します。<br>
            4. 第2項の申込金を同項の規定により当ホテル(館)が指定した日までにお支払いいただけない場合は、宿泊契約はその効力を失うものとします。ただし、申込金の支払期日を指定するに当たり、当ホテル(館)がその旨を宿泊客に告知した場合に限ります。
          </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>