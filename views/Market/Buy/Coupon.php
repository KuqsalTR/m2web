<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="account" class="mCSB_container row-fluid">
    <ul id="accountNav" class="span3">
      <li>
        <a href="<?=base_url()?>Market/Characters" class="btn-sideitem"><i class="icon-users"></i><span><?=langWrite('lang361')?></span></a>
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
        <a href="<?=base_url()?>Market/Coupon" class="btn-sideitem btn-sideitem-active"><i class="icon-barcode"></i><span><?=langWrite('lang363')?></span></a>
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
    <div id="accountContent" class="span11 redeem-code">
      <h2><?=langWrite('lang383')?></h2>
      <div class="scrollable_container">
        <div class="inside_scrollable_container">
          <div class="contrast-box clearfix">
            <div class="grey-box">
              <p class="code-info"><?=langWrite('lang374')?></p>
              <img class="code-avatar" src="<?=base_url()?>assets/market/images/b33.png">
              <label class="code-label"><?=langWrite('lang375')?>:</label>
              <form action="<?=base_url('Market/CouponControl')?>" method="post">
                <input type="text" name="code" id="code" class="span7" size="30" placeholder="<?=langWrite('lang376')?>"/>
                <button class="btn-default span3 " type="submit" id="submitCode"><?=langWrite('lang377')?></button>
                <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              </form>
              <div id="ajaxresult"></div>
            </div>
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
