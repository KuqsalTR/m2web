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
    <?php if ($errorType=="success"): ?>
      <div id="error" class="contrast-box">
        <div class="dark-grey-box">
          <div class="clearfix">
            <center>
              <div class="money-showcase span5" style="width:100%">
                <h2><?=langWrite('lang334')?></h2>
                <table>
                  <thead>
                    <th><?=langWrite('lang335')?></th>
                    <th><?=langWrite('lang336')?></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center">
                        <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/coins.png" width="16" height="16" alt="<?=langWrite('lang311')?>"/>
                        <span class="end-price" data-currency="<?=$info['accountEP']?>"><?=$info['accountEP']?></span>
                      </td>
                      <td style="text-align:center">
                        <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/em_coins.png" width="16" height="16" alt="<?=langWrite('lang311')?>"/>
                        <span class="end-price" data-currency="<?=$info['accountEM']?>"><?=$info['accountEM']?></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </center>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
        $('#balances1').text(<?=$info['accountEP']?>);
        $('#balances2').text(<?=$info['accountEM']?>);
      });
      </script>
    <?php endif; ?>
    <?php if ($errorType=="error" || $errorType=="errorTry"): ?>
      <div id="error" class="contrast-box">
        <div class="dark-grey-box">
          <br>
          <h4> <center><?=$info['errorMessage']?></center> </h4>
          <br>
          <center>
            <a href="<?=base_url('Market/Coupon')?>" class="btn-default span3" style="width:100%;"><?=langWrite('lang282')?></a>
          </center>
          <br><br>
          <div class="btn_wrapper"></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<div id="overlayMask"></div>
</div>
</div>
</body>
</html>
