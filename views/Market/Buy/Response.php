<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<?php if ($errorType=="success"): ?>
  <div id="notEnoughCash" class="contrast-box sys-message">
    <div class="dark-grey-box clearfix">
      <div class="clearfix">
        <div class="item-showcase span2">
          <div id="image" class="picture_wrapper ">
            <?php if ($info['itemIcon']!=""): ?>
              <img class="item-thumb" src="<?=base_url()?>assets/market/images/icon/<?=$info['itemIcon']?>" width="98" height="98" alt=""/>
            <?php endif; ?>
          </div>
        </div>
        <div class="money-showcase  span5 ">
          <h2><?=langWrite('lang334')?></h2>
          <div class="currency_status_box" style="float: left; margin-right: 5%;">
            <p><?=langWrite('lang335')?></p>
            <ul class="currency_status clearfix">
              <li>
                <span>
                  <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/coins.png" width="16" height="16" alt="<?=langWrite('lang311')?>"/>
                  <span class="end-price" data-currency="<?=$info['accountEP']?>"><?=$info['accountEP']?></span>
                </span>
              </li>
            </ul>
          </div>
          <div class="currency_status_box">
            <p><?=langWrite('lang336')?></p>
            <ul class="currency_status clearfix">
              <li>
                <span>
                  <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/em_coins.png" width="16" height="16" alt="<?=langWrite('lang311')?>"/>
                  <span class="end-price" data-currency="<?=$info['accountEM']?>"><?=$info['accountEM']?></span>
                </span>
              </li>
            </ul>
          </div>
        </div>
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
      <div class="btn_wrapper"></div>
    </div>
  </div>
<?php endif; ?>
<?php if ($errorType=="errorTry"): ?>
<script type="text/javascript">
  window.location.href = "<?=base_url()?>";
</script>
<?php endif; ?>
