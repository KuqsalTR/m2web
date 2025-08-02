<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang94')?>
        </center>
      </div>
      <?php if (writeSession('userId')): ?>
        <br>
        <h1 class="text-center"><?=langWrite('lang529')?></h1>
        <br><br>
      <?php elseif(registerStatus!="1"): ?>
        <br>
        <h1 class="text-center"><?=langWrite('lang530')?></h1>
        <br><br>
      <?php else: ?>
        <form id="register" class="form-template">
          <label><?=langWrite('lang65')?></label>
          <input type="text" placeholder="<?=langWrite('lang86')?>" name="realName" minlength="<?=adSoyad['min']?>" maxlength="<?=adSoyad['max']?>" required>
          <label><?=langWrite('lang66')?></label>
          <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
          <label><?=langWrite('lang67')?></label>
          <input type="text" placeholder="<?=langWrite('lang88')?>" name="e-mail" maxlength="100" required>
          <label><?=langWrite('lang68')?></label>
          <div class="form-group password-group">
            <input type="password" placeholder="<?=langWrite('lang89')?>" name="password" class="form-control" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
            <a class="btn icons pwcreat" data-length="<?=sifre['min']?>" data-type="special"><i class="fa fa-key"></i></a>
            <a class="btn icons pw2text"><i class="fa fa-eye"></i></a>
          </div>
          <label><?=langWrite('lang69')?></label>
          <div class="form-group password-group">
            <input type="password" placeholder="<?=langWrite('lang90')?>" name="passwordTwo" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
            <a class="btn icons pw2text"><i class="fa fa-eye"></i></a>
          </div>
          <?php if (pinSystem['status']==1): ?>
            <label><?=langWrite('lang70')?></label>
            <div class="form-group password-group">
              <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
              <a class="btn dark icons pwcreat" data-length="<?=pinSifre['min']?>" data-type="numeric"><i class="fa fa-key"></i></a>
              <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
            </div>
          <?php endif; ?>
          <label><?=langWrite('lang71')?></label>
          <input type="text" class="phone" placeholder="<?=langWrite('lang92')?>" name="phone" required>
          <label><?=langWrite('lang72')?></label>
          <input type="text" class="deleteCode" placeholder="<?=langWrite('lang93')?>" name="deleteCode" minlength="7" maxlength="7" required value="<?=rand(1111111,9999999)?>">
          <label><?=langWrite('lang73')?></label>
          <select name="referans">
            <option value="0">Seçiniz</option>
            <?php foreach ($reference as $key => $value): ?>
              <option value="<?=$value?>"><?=$value?></option>
            <?php endforeach; ?>
          </select>
          <br><br>
          <div class="license">
            <input id="check2" type="checkbox" name="check" value="check">
            <label for="check2">
              <a onclick='new modal("#sozlesme"); return false'>
                <font color="#de694a"><?=langWrite('lang74')?></font>
              </a><?=langWrite('lang75')?>
            </label>
          </div>
          <div class="form-group" style="display: flex;justify-content:center">
            <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
          <div class="reg-buttons" style="margin-top:10px">
            <center>
              <button class="cont button-bg button-n" type="submit"><?=langWrite('lang94')?></button>
            </center>
          </div>
          <br>
          <p class="l15"><?=langWrite('lang95')?><a href="<?=base_url()?>Login"><?=langWrite('lang96')?></a>.</p>
          <p class="l15"><?=langWrite('lang97')?><a href="<?=base_url()?>Forget/Password"><?=langWrite('lang98')?></a></p>
          <?php if (pinSystem['status']==1): ?>
            <p class="l15"><?=langWrite('lang99')?><a href="<?=base_url()?>Forget/Pin"><?=langWrite('lang100')?></a></p>
          <?php endif; ?>
        </form>
      <?php endif; ?>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
