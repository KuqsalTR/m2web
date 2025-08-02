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
            <h3>PayTR ile Ep Yükle</h3>
            <div class="trenner"></div>
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
              <input id="submitBtn" type="submit" value="Kredi Kartı İle Satın Al" class="btn-big">
            </form>
            <div class="trenner"></div>
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
              <input id="submitBtn" type="submit" value="Havale İle Satın Al" class="btn-big">
            </form>
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
