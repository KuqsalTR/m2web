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
          <?=langWrite('lang161')?>
        </center>
      </div>
      <form id="ForgetPassword" class="form-template">
        <label><?=langWrite('lang66')?></label>
        <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
        <label><?=langWrite('lang67')?></label>
        <input type="mail" placeholder="<?=langWrite('lang88')?>" name="e-mail" maxlength="100" required>
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang160')?></button>
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
