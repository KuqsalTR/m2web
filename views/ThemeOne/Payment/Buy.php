<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<link rel="stylesheet" href="<?=base_url('assets/css/ep.css')?>">
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang194')?>
        </center>
      </div>
      <?php if (!writeSession('userId')): ?>
        <div class="alert alert-danger text-center">
          <strong><?=langWrite('lang528')?></strong>
        </div>
        <center>
          <a href="<?=base_url('Login')?>" class="button"><?=langWrite('lang81')?></a>
        </center>
      <?php else: ?>
        <center>
          <?php if ($paymentType): ?>
            <?php foreach ($paymentType as $key => $value): ?>
              <a href="<?=$value['link']?>" style="margin: 5px;" target="_blank">
                <div class="buy-box">
                  <img src="<?=$value['image']?>" height="35px">
                </div>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </center>
      <?php endif; ?>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
