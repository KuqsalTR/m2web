<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <article>
    <?php if ($settings->settingFacebookCode!=""): ?>
      <div style="padding-left:70px;">
        <?=htmlspecialchars_decode($settings->settingFacebookCode)?>
      </div>
    <?php endif; ?>
  </article>

  <div class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2><?=langWrite('lang53')?></h2>
        <div class="inner-content" id="news">
          <table width="100%">
            <tbody>
              <?php if ($notices): ?>
                <?php foreach ($notices as $key => $value): ?>
                  <tr>
                    <td>
                      <p class="message"><?=$value->noticeTitle?></p>
                      <p class="message"><?=mb_substr(strip_tags($value->noticeContent),0,220,'UTF-8')?></p>
                      <p class="message"><?=PlainTurkishDate($value->noticeDate)?> - <a href="<?=base_url('Notice/Detail/'.$value->noticeSeo.'/'.$value->noticeId)?>" class="button"><?=langWrite('lang482')?></a></p>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td>
                    <p class="message"><?=langWrite('lang54')?></p>
                  </td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
