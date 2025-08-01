<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=$notice->noticeTitle?></h2>
        <div class="download-inner-content">
          <br>
          <p>
            <?=htmlspecialchars_decode($notice->noticeContent)?>
          </p>
          <br>
          <p> <span style="float:right"><?=langWrite('lang152')?> <?=DetailTurkishDate($notice->noticeDate)?></span></p>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
