<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <br>
    <br>
    <h2><center><?=$notice->noticeTitle?></center></h2>
    <hr>
    <div class="panel panel-buyuk" style="padding-top:15px">
      <div class="panel-body">
        <div class="callout callout-info" style="margin-bottom:0px">
          <?=htmlspecialchars_decode($notice->noticeContent)?>
          <h3 style="float:right"><?=langWrite('lang152')?> <?=DetailTurkishDate($notice->noticeDate)?></h3>
          <br>
        </div>
      </div>
    </div>
    <hr>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
