<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social">PayTR ile Ep Yükle</h2>
        <div class="download-inner-content">
          <form action="<?=base_url('Payment/PaytrKredi')?>" method="post" class="registerForm">
            <div class="margin-bottom-15">
              <label>Ep Fiyatları</label>
              <select class="selectform" name="epMiktar" style="width:100%">
                <?php foreach (market['epPrice'] as $key => $value): ?>
                  <option style="color:black" value="<?=$key?>"><?=$value.' | '.$key.' ₺'?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
            <input id="submitBtn" type="submit" value="Kredi Kartı İle Satın Al" class="btn">
          </form>
          <br>
          <form action="<?=base_url('Payment/PaytrHavale')?>" method="post" class="registerForm">
            <div class="margin-bottom-15">
              <label>Ep Fiyatları</label>
              <select class="selectform" name="epMiktar" style="width:100%">
                <?php foreach (market['epPrice'] as $key => $value): ?>
                  <option style="color:black" value="<?=$key?>"><?=$value.' | '.$key.' ₺'?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
            <input id="submitBtn" type="submit" value="Havale İle Satın Al" class="btn">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
