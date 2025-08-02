<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2><?=langWrite('lang177')?></h2>
        <div class="administration-inner-content">
          <div class="input-data-box">
            <h4><?=langWrite('lang325')?></h4>
            <ul>
              <li><?=langWrite('lang178')?> <?=$info->login?></li>
              <li><?=langWrite('lang179')?> <?=emailHidden($info->email,3)?></li>
              <li><?=langWrite('lang180')?> <?=$info->$marketEp?></li>
              <?php if ($info->last_play): ?>
                <li><?=langWrite('lang181')?> <?=DetailTurkishDate($info->last_play)?></li>
              <?php endif; ?>
              <li><?=langWrite('lang182')?> <?=DetailTurkishDate($info->create_time)?></li>
              <li><?=langWrite('lang183')?> <?=$info->real_name?></li>
              <li><?=langWrite('lang184')?> <?=$info->status=="OK"?langWrite('lang202'):langWrite('lang203')?></li>
              <?php if (isset($info->last_ip)): ?>
                <li><?=langWrite('lang185')?> <?=$info->last_ip?></li>
              <?php endif; ?>
            </ul>
            <br>
            <?php if (market['status']==2): ?>
              <div class="administration-box">
                <a class="btn btn-danger" href="<?=base_url()?>Payment/Buy"><?=langWrite('lang194')?></a>
                <p><?=langWrite('lang194')?></p>
                <a class="btn btn-danger" href="<?=base_url()?>Coupon/Index"><?=langWrite('lang195')?></a>
                <p><?=langWrite('lang195')?></p>
                <a class="btn btn-danger" href="<?=base_url()?>Coupon/Logs"><?=langWrite('lang196')?></a>
                <p><?=langWrite('lang196')?></p>
              </div>
            <?php endif; ?>
            <?php if (market['status']==1): ?>
              <div class="administration-box">
                <a class="btn btn-danger itemshop iframe" href="<?=base_url()?>Market/Index"><?=langWrite('lang193')?></a>
                <p><?=langWrite('lang193')?></p>
                <a class="btn btn-danger itemshop iframe" href="<?=base_url()?>Market/Buy"><?=langWrite('lang194')?></a>
                <p><?=langWrite('lang194')?></p>
                <a class="btn btn-danger itemshop iframe" href="<?=base_url()?>Market/Coupon"><?=langWrite('lang195')?></a>
                <p><?=langWrite('lang195')?></p>
                <a class="btn btn-danger itemshop iframe" href="<?=base_url()?>Market/CouponLogs"><?=langWrite('lang196')?></a>
                <p><?=langWrite('lang196')?></p>
                <a class="btn btn-danger itemshop iframe" href="<?=base_url()?>Market/Logs"><?=langWrite('lang197')?></a>
                <p><?=langWrite('lang197')?></p>
              </div>
            <?php endif; ?>
            <div class="administration-box">
              <a class="btn btn-primary" href="<?=base_url()?>Support/Index"><?=langWrite('lang186')?></a>
              <p><?=langWrite('lang186')?></p>
              <a class="btn btn-primary" href="<?=base_url()?>Change/Email"><?=langWrite('lang187')?></a>
              <p><?=langWrite('lang187')?></p>
              <a class="btn btn-primary" href="<?=base_url()?>Change/Password"><?=langWrite('lang188')?></a>
              <p><?=langWrite('lang188')?></p>
              <?php if (pinSystem['status']==1): ?>
                <a class="btn btn-primary" href="<?=base_url()?>Change/Pin"><?=langWrite('lang189')?></a>
                <p><?=langWrite('lang189')?></p>
              <?php endif; ?>
              <a class="btn btn-primary" href="<?=base_url()?>Change/DeleteCode"><?=langWrite('lang190')?></a>
              <p><?=langWrite('lang190')?></p>
              <a class="btn btn-primary" href="<?=base_url()?>Change/SafeBox"><?=langWrite('lang191')?></a>
              <p><?=langWrite('lang191')?></p>
              <?php if (karakterGuvenlik['status']==1): ?>
                <a class="btn btn-primary" href="<?=base_url()?>Change/SafeBox"><?=langWrite('guvenlikSifresiDegistir')?></a>
                <p><?=langWrite('guvenlikSifresiDegistir')?></p>
              <?php endif; ?>
            </div>
            <div class="administration-box">
              <a class="btn btn-primary" href="<?=base_url()?>ControlPanel/Bug"><?=langWrite('lang192')?></a>
              <p><?=langWrite('lang192')?></p>
              <a class="btn btn-primary" href="<?=base_url()?>ControlPanel/Log"><?=langWrite('lang200')?></a>
              <p><?=langWrite('lang200')?></p>
              <a class="btn btn-primary" href="<?=base_url()?>Logout"><?=langWrite('lang201')?></a>
              <p><?=langWrite('lang201')?></p>
            </div>
          </div>
          <div class="box-foot"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
