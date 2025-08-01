<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="account" class="row-fluid">
    <div id="accountContent" class="span12 redeem-code" style="padding:25px;">
      <h2>Vallet ile Ep Yükle</h2>
      <div class="scrollable_container">
        <div class="inside_scrollable_container">
          <div class="contrast-box clearfix">
            <form action="<?=base_url('Market/SendVallet')?>" method="post">
              <label>Ep Fiyatları</label>
              <select name="epMiktar" style="width:100%" >
                <?php foreach (market['epPrice'] as $key => $value): ?>
                  <option style="color:black" value="<?=$key?>"><?=$value.' | '.$key.' ₺'?></option>
                <?php endforeach; ?>
              </select>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <br>
              <div class="reg-buttons">
                <center>
                  <button class="btn-default btn-block" type="submit">Satın Al</button>
                </center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="overlayMask"></div>
</div>
</div>
</body>
</html>
