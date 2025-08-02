<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <?php if (($this->uri->segment(2)=="EmailStatus")&&($this->uri->segment(3)=="Success")): ?>
      <div class="callout callout-success" style="margin-bottom:0px">
        <center>E-Posta değiştirme İşlemi Başarılı</center>
      </div>
    <?php endif; ?>
    <?php if (($this->uri->segment(2)=="EmailStatus")&&($this->uri->segment(3)=="Error")): ?>
      <div class="callout callout-danger" style="margin-bottom:0px">
        <center>E-Posta değiştirme işleminde hata meydana geldi!<br>Tekrar deneyiniz!</center>
      </div>
    <?php endif; ?>
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang153')?>
        </center>
      </div>
      <form id="login" class="form-template">
        <label><?=langWrite('lang66')?></label>
        <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
        <label><?=langWrite('lang79')?></label>
        <input type="password" placeholder="<?=langWrite('lang89')?>" name="password" class="form-control" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
        <?php if (pinSystem['status']==1): ?>
          <label><?=langWrite('lang70')?></label>
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
        <?php endif; ?>
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang81')?></button>
          </center>
        </div>
        <br>
        <p class="l15"><?=langWrite('lang154')?><a href="<?=base_url()?>Register"><?=langWrite('lang155')?></a>.</p>
        <p class="l15"><?=langWrite('lang97')?><a href="<?=base_url()?>Forget/Password"><?=langWrite('lang98')?></a></p>
        <?php if (pinSystem['status']==1): ?>
          <p class="l15"><?=langWrite('lang99')?><a href="<?=base_url()?>Forget/Pin"><?=langWrite('lang100')?></a></p>
        <?php endif; ?>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
