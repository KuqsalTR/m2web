<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="account" class="mCSB_container row-fluid">
    <ul id="accountNav" class="span3">
      <li>
        <a href="<?=base_url()?>Market/Characters" class="btn-sideitem btn-sideitem-active"><i class="icon-users"></i><span><?=langWrite('lang361')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Logs" class="btn-sideitem "><i class="icon-basket"></i><span><?=langWrite('lang362')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Safebox"class="btn-sideitem ">
          <i class="icon-stack">
            <?php if ($safeboxCount): ?>
              <div class="badge"><?=$safeboxCount?></div>
            <?php endif; ?>
          </i>
          <span><?=langWrite('lang369')?></span>
        </a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Coupon" class="btn-sideitem "><i class="icon-barcode"></i><span><?=langWrite('lang363')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/CouponLogs" class="btn-sideitem"><i class="icon-barcode"></i><span><?=langWrite('lang382')?></span></a>
      </li>
    </ul>
    <script type="text/javascript">
    zs.data.ttip = {
      defaultPosition: 'right',
      attribute: 'tooltip-content',
      delay: 500
    }
    </script>
    <div id="accountContent" class="span11 players">
      <h2><?=langWrite('lang364')?></h2>
      <div class="scrollable_container">
        <div class="inside_scrollable_container">
          <ul class="character_list clearfix playerSelection">
            <?php foreach ($characters as $key => $value): ?>
              <li class="no-margin">
                <div class="inner_box clearfix">
                  <img src="<?=base_url()?>assets/market/images/chrs/<?=$value->job?>.png" alt="<?=$value->name?>" style="height: 80px;"/>
                  <p class="left">
                    <span><strong><?=langWrite('lang365')?>:</strong> <?=$value->name?></span>
                    <strong><?=langWrite('lang366')?>:</strong> <?=karakterTipi($value->job)?><br>
                    <strong><?=langWrite('lang367')?>:</strong> <?=$value->level?><br>
                    <strong><?=langWrite('lang368')?>:</strong> <?=$settings->settingWebTitle?>
                  </p>
                  <span class="checked"><i class="icon-checkmark"></i></span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
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
