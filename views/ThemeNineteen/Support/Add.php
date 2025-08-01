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
            <h3 class="text-center"><?=langWrite('lang254')?></h3>
            <div class="trenner"></div>
            <p class="text-center">
              <?=langWrite('lang240')?>
              <br>
              <?=langWrite('lang255')?>
              <br>
            </p>
            <form id="TicketAdd" class="registerForm">
              <div class="margin-bottom-15">
                <label for="category"><?=langWrite('lang258')?></label>
                <select class="selectform" name="category">
                  <?php foreach ($ticketCategory as $key => $value): ?>
                    <option value="<?=$value?>"><?=$value?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="margin-bottom-15">
                <label for="title"><?=langWrite('lang258')?></label>
                <input type="text" name="title" placeholder="<?=langWrite('lang258')?>" value="">
              </div>
              <div class="margin-bottom-15">
                <label for="description"><?=langWrite('lang259')?></label>
                <textarea placeholder="<?=langWrite('lang259')?>" name="description" rows="8" cols="80" class="text-left"></textarea>
              </div>
              <div class="margin-bottom-15" style="margin-top:10px;margin-bottom:0px;transform:scale(0.9);transform-origin:0;-webkit-transform:scale(0.9);transform:scale(0.9);-webkit-transform-origin:0 0;transform-origin:0 0;">
                <div class="g-recaptcha" data-sitekey="<?=googleKey?>"></div>
              </div>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <input id="submitBtn" type="submit" value="<?=langWrite('lang260')?>" class="btn-big">
            </form>
            <br><br>
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
