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
          <?=langWrite('lang192')?>
        </center>
      </div>
      <?php if ($characters): ?>
        <div class="callout callout-info">
          <center>
            <?=langWrite('lang404')?>
          </center>
        </div>
        <br>
        <form id="SaveBug" class="form-template">
          <label><?=langWrite('lang402')?></label>
          <select class="form-control" name="characters">
            <option value="0"><?=langWrite('lang257')?></option>
            <?php foreach ($characters as $key => $value): ?>
              <option value="<?=$value->id?>"><?=$value->name?></option>
            <?php endforeach; ?>
          </select>
          <br><br>
          <div class="form-group" style="display: flex;justify-content:center">
            <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
          <div class="reg-buttons" style="margin-top:10px">
            <center>
              <button class="button-bg button-n" type="submit"><?=langWrite('lang403')?></button>
            </center>
          </div>
          <br>
        </form>
      <?php else: ?>
        <h3> <center><?=langWrite('lang405')?></center> </h3>
      <?php endif; ?>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
