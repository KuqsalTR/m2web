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
          <?=langWrite('lang204')?>
        </center>
      </div>
      <form id="ChangeEmail" class="form-template">
        <label><?=langWrite('lang205')?></label>
        <input type="mail" placeholder="<?=langWrite('lang205')?>" name="emailNow" maxlength="100" required>
        <label><?=langWrite('lang206')?></label>
        <input type="mail" placeholder="<?=langWrite('lang206')?>" name="newEmail" maxlength="100" required>
        <label><?=langWrite('lang207')?></label>
        <input type="mail" placeholder="<?=langWrite('lang207')?>" name="newEmailTwo" maxlength="100" required>
        <div class="form-group" style="display: flex;justify-content:center">
          <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
        </div>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <div class="reg-buttons" style="margin-top:10px">
          <center>
            <button class="button-bg button-n" type="submit"><?=langWrite('lang208')?></button>
          </center>
        </div>
        <br>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
