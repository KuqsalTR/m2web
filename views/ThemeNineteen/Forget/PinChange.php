<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div id="formDiv" class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <div class="inner-form-border">
          <div class="inner-form-box" style="padding:25px!important">
            <h3><?=langWrite('lang173')?></h3>
            <div class="trenner"></div>
            <form id="ForgetPinChange" class="registerForm">
              <div class="margin-bottom-15">
                <label for="username"><?=langWrite('lang219')?></label>
                <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
              </div>
              <div class="margin-bottom-15">
                <label for="username"><?=langWrite('lang220')?></label>
                <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPasswordTwo" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
              </div>
              <div class="margin-bottom-15" style="margin-top:10px;margin-bottom:0px;transform:scale(0.9);transform-origin:0;-webkit-transform:scale(0.9);transform:scale(0.9);-webkit-transform-origin:0 0;transform-origin:0 0;">
                <div class="g-recaptcha" data-sitekey="<?=googleKey?>"></div>
              </div>
              <input type="hidden" name="token" value="<?=$token?>">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <input id="submitBtn" type="submit" value="<?=langWrite('lang169')?>" class="btn-big">
            </form>
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
