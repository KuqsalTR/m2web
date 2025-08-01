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
          <?=langWrite('lang254')?>
        </center>
      </div>
      <div class="panel-body">
        <div class="callout callout-warning">
          <?=langWrite('lang240')?>
        </div>
        <br>
        <div class="callout callout-danger">
          <?=langWrite('lang255')?>
        </div>
        <br>
        <form class="form-template" id="TicketAdd">
          <label><?=langWrite('lang256')?></label>
          <select name="category">
            <option value="0"><?=langWrite('lang257')?></option>
            <?php foreach ($ticketCategory as $key => $value): ?>
              <option value="<?=$value?>"><?=$value?></option>
            <?php endforeach; ?>
          </select>
          <label><?=langWrite('lang258')?></label>
          <input type="text" name="title" value="">
          <label><?=langWrite('lang259')?></label>
          <textarea name="description" rows="8" cols="80"></textarea>
          <div class="form-group" style="display: flex;justify-content:center">
            <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
          </div>
          <br>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
          <center>
            <button class="button button-bg"><?=langWrite('lang260')?></button>
          </center>
          <br>
        </form>
      </div>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
