<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <div class="inner-form-border">
          <div class="inner-form-box" style="padding:25px!important">
            <h3 class="text-center"><?=$notice->noticeTitle?></h3>
            <div class="trenner"></div>
            <br>
            <p>
              <?=htmlspecialchars_decode($notice->noticeContent)?>
            </p>
            <br>
            <p> <span style="float:right"><?=langWrite('lang152')?> <?=DetailTurkishDate($notice->noticeDate)?></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
