<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<link rel="stylesheet" href="<?=base_url('assets/css/ep.css')?>">
<div role="main" id="highscore">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <br>
        <h3 class="text-center"><?=langWrite('lang194')?></h3>
        <br>
        <div class="ranks-inner-content">
          <?php if (!writeSession('userId')): ?>
            <div class="alert alert-danger text-center">
              <strong><?=langWrite('lang528')?></strong>
            </div>
            <center>
              <a href="<?=base_url('Login')?>" class="btn btn-primary"><?=langWrite('lang81')?></a>
            </center>
          <?php else: ?>
            <center>
              <?php if ($paymentType): ?>
                <?php foreach ($paymentType as $key => $value): ?>
                  <a href="<?=$value['link']?>" style="margin: 5px;">
                    <div class="buy-box">
                      <img src="<?=$value['image']?>" style="height: 67px!important;padding:0px!important;padding-top:15px!important;padding-bottom:15px!important">
                    </div>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </center>
          <?php endif; ?>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
