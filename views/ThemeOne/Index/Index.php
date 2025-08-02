<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="news-block">
      <div class="news-top-block">
        <div class="top-news" style="background-image: url(<?=base_url('assets/ThemeOne/images/news-img-1.jpg')?>);">
          <div class="top-news-title">
            <a href="#"><?=langWrite('lang44')?></a>
          </div>
          <div class="top-news-info">
            <?=langWrite('lang45')?>
          </div>
          <?php if ($links->wiki!=""): ?>
            <div class="top-news-read-more">
              <i class="nav-icon"></i><a href="<?=$links->wiki?>"><?=langWrite('lang46')?></a>
            </div>
          <?php endif; ?>
        </div>
        <div class="top-news" style="background-image: url(<?=base_url('assets/ThemeOne/images/news-img-2.jpg')?>);">
          <div class="top-news-title">
            <a href="#"><?=langWrite('lang47')?></a>
          </div>
          <div class="top-news-info">
            <?=langWrite('lang48')?>
          </div>
          <div class="top-news-read-more">
            <i class="nav-icon"></i><a href="<?=base_url('YoutubeVideos')?>"><?=langWrite('lang49')?></a>
          </div>
        </div>
        <div class="top-news" style="background-image: url(<?=base_url('assets/ThemeOne/images/news-img-3.jpg')?>);">
          <div class="top-news-title">
            <a href="#"><?=langWrite('lang50')?></a>
          </div>
          <div class="top-news-info">
            <?=langWrite('lang51')?>
          </div>
          <?php if ($links->facebook!=""): ?>
            <div class="top-news-read-more">
              <i class="nav-icon"></i><a href="<?=$links->facebook?>"><?=langWrite('lang52')?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if ($settings->settingFacebookCode!=""): ?>
      <div class="facebook-block text-center">
        <p><?=htmlspecialchars_decode($settings->settingFacebookCode)?></p>
      </div>
    <?php endif; ?>
    <?php if ($notices): ?>
      <br>
      <h2> <center><?=langWrite('lang53')?></center> </h2>
      <hr>
      <?php foreach ($notices as $key => $value): ?>
        <div class="news-bottom-block">
          <a class="bottom-news" href="<?=base_url('Notice/Detail/'.$value->noticeSeo.'/'.$value->noticeId)?>">
            <div class="bottom-news-title">
              <?=$value->noticeTitle?>
              <div class="comments"><?=PlainTurkishDate($value->noticeDate)?></div>
            </div>
          </a>
        </div>
        <hr>
      <?php endforeach; ?>
    <?php else: ?>
      <br>
      <hr>
      <div class="news-bottom-block">
        <h2>
          <center><?=langWrite('lang54')?></center>
        </h2>
      </div>
      <hr>
    <?php endif; ?>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
