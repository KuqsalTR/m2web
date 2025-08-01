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
          <?=langWrite('lang217')?>
        </center>
      </div>
      <form id="ChangePassword" class="form-template">
        <label><?=langWrite('lang218')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang89')?>" name="passwordNow" class="form-control" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
          <a class="btn icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <label><?=langWrite('lang219')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang89')?>" name="newPassword" class="form-control" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
          <a class="btn icons pwcreat" data-length="<?=sifre['min']?>" data-type="special"><i class="fa fa-key"></i></a>
          <a class="btn icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <label><?=langWrite('lang220')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang90')?>" name="newPasswordTwo" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
          <a class="btn icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang217')?></button>
          </center>
        </div>
        <br>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
