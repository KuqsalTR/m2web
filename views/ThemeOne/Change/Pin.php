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
          <?=langWrite('lang223')?>
        </center>
      </div>
      <form id="ChangePin" class="form-template">
        <label><?=langWrite('lang224')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinNow" class="form-control" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
          <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <label><?=langWrite('lang225')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="newPin" class="form-control" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
          <a class="btn dark icons pwcreat" data-length="<?=pinSifre['min']?>" data-type="numeric"><i class="fa fa-key"></i></a>
          <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <label><?=langWrite('lang226')?></label>
        <div class="form-group password-group">
          <input type="password" placeholder="<?=langWrite('lang91')?>" name="newPinTwo" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
          <a class="btn dark icons pw2text"><i class="fa fa-eye"></i></a>
        </div>
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang223')?></button>
          </center>
        </div>
        <br>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
