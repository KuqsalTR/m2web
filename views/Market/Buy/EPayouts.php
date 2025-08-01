<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="account" class="row-fluid">
    <div id="accountContent" class="span12 redeem-code" style="padding:25px;">
      <h2>EPayouts ile Ep Yükle</h2>
      <div class="scrollable_container">
        <div class="inside_scrollable_container">
          <div class="contrast-box clearfix">
            <?php foreach (epayouts['epPrice'] as $key => $value): ?>
              <a class="btn-default btn-block" href="https://paymentbox.e-payouts.com/?uid=<?=epayouts['uid']?>&mid=<?=epayouts['mid']?>&ucode=<?=$user->id?>&title=<?=$settings->settingWebTitle?>%20-%20ItemShop&price=<?=$key?>"><?=$value.' EP  | '.$key.' €'?></a>
            <?php endforeach; ?>
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
