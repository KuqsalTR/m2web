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
          <?=langWrite('lang173')?>
        </center>
      </div>
      <form id="ForgetPinChange" class="form-template">
        <label><?=langWrite('lang70')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
          <a class="btn dark icons pwcreat" data-length="<?=pinSifre['min']?>" data-type="numeric"><i class="fa fa-key"></i></a>
          <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <label><?=langWrite('lang69')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPasswordTwo" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
          <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <input type="hidden" name="token" value="<?=$token?>">
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang169')?></button>
          </center>
        </div>
        <br>
        <br>
        <p class="l15"><?=langWrite('lang95')?><a href="<?=base_url()?>Login"><?=langWrite('lang96')?></a>.</p>
        <p class="l15"><?=langWrite('lang154')?><a href="<?=base_url()?>Register"><?=langWrite('lang155')?></a>.</p>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
