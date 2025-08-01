<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div id="formDiv" class="content">
    <div class="content-bg">
      <?php if (writeSession('userId')): ?>
        <div class="content-bg-bottom">
          <div class="inner-form-border">
            <div class="inner-form-box" style="padding:25px!important">
              <h3 class="text-center"><?=langWrite('lang94')?></h3>
              <div class="trenner"></div>
              <br>
              <h1 class="text-center"><?=langWrite('lang529')?></h1>
            </div>
          </div>
        </div>
      <?php elseif(registerStatus!="1"): ?>
        <div class="content-bg-bottom">
          <div class="inner-form-border">
            <div class="inner-form-box" style="padding:25px!important">
              <h3 class="text-center"><?=langWrite('lang94')?></h3>
              <div class="trenner"></div>
              <br>
              <h1 class="text-center"><?=langWrite('lang530')?></h1>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="content-bg-bottom">
          <div class="inner-form-border">
            <div class="inner-form-box" style="padding:25px!important">
              <h3><a id="toLogin" href="<?=base_url('Login')?>"><?=langWrite('lang538')?> <?=langWrite('lang539')?></a><?=langWrite('lang94')?></h3>
              <div class="trenner"></div>
              <form id="register" class="registerForm">
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang65')?></label>
                  <input type="text" placeholder="<?=langWrite('lang86')?>" name="realName" minlength="<?=adSoyad['min']?>" maxlength="<?=adSoyad['max']?>" required>
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang66')?></label>
                  <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang67')?></label>
                  <input type="text" placeholder="<?=langWrite('lang88')?>" name="e-mail" maxlength="100" required>
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang68')?></label>
                  <input type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang69')?></label>
                  <input type="password" placeholder="<?=langWrite('lang90')?>" name="passwordTwo" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                </div>
                <?php if (pinSystem['status']==1): ?>
                  <div class="margin-bottom-15">
                    <label for="username"><?=langWrite('lang70')?></label>
                    <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
                  </div>
                <?php endif; ?>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang71')?></label>
                  <input type="text" placeholder="<?=langWrite('lang92')?>" class="phone" name="phone" required>
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang72')?></label>
                  <input type="text" class="deleteCode" placeholder="<?=langWrite('lang93')?>" name="deleteCode" minlength="7" maxlength="7" required value="<?=rand(1111111,9999999)?>">
                </div>
                <div class="margin-bottom-15">
                  <label for="username"><?=langWrite('lang73')?></label>
                  <select class="selectform" name="referans">
                    <option value="0">Seçiniz</option>
                    <?php foreach ($reference as $key => $value): ?>
                      <option value="<?=$value?>"><?=$value?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="margin-bottom-15" style="display:flex">
                  <input id="check2" type="checkbox" name="check" value="check" style="height:15px;width:15px;">
                  <label for="check2" style="margin-left:5px;">
                    <a id="sozlesmeBtn">
                      <font color="#de694a"><?=langWrite('lang74')?></font>
                    </a><?=langWrite('lang75')?>
                  </label>
                </div>
                <div class="margin-bottom-15" style="margin-top:10px;margin-bottom:0px;transform:scale(0.9);transform-origin:0;-webkit-transform:scale(0.9);transform:scale(0.9);-webkit-transform-origin:0 0;transform-origin:0 0;">
                  <div class="g-recaptcha" data-sitekey="<?=googleKey?>"></div>
                </div>
                <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                <input id="submitBtn" type="submit" value="<?=langWrite('lang94')?>" class="btn-big">
              </form>
            </div>
          </div>
        </div>
        <br>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
