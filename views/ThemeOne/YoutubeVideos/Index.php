<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <?php if ($youtubeVideoAll): ?>
      <br>
      <h2> <center><?=langWrite('lang425')?></center> </h2>
      <hr>
      <div class="youtubeVideos">
        <?php foreach ($youtubeVideoAll as $key => $value): ?>
          <a onclick='new modal("#youtubeVideo_modal<?=$value->youtubeId?>"); return false'class="wallpaper-big">
            <img src="<?=base_url('assets/images/youtube/'.$value->youtubeImg)?>" alt="">
          </a>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <br>
      <hr>
      <div class="news-bottom-block">
        <h2>
          <center><?=langWrite('lang426')?></center>
        </h2>
      </div>
      <hr>
    <?php endif; ?>
  </main>
  <?php if ($youtubeVideoAll): ?>
    <?php foreach ($youtubeVideoAll as $key => $value): ?>
      <div class='modal_window videoModal' id="youtubeVideo_modal<?=$value->youtubeId?>">
        <a href="#" class='close_mw close-r'></a>
        <div class="popup-block">
          <?=$value->youtubeIframe?>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
