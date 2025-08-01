<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="notEnoughCash" class="contrast-box sys-message">
  <div class="dark-grey-box clearfix">
    <div class="clearfix">
      <div class="item-showcase span2">
        <div id="image" class="picture_wrapper ">
          <img class="item-thumb" src="<?=base_url('assets/market/images/icon/'.$responseData['itemIcon'])?>" width="98" height="98" alt=""/>
        </div>
      </div>
      <div class="money-showcase  span5 ">
        <h2><i class="fa fa-check"></i><?=$responseData['itemName']?></h2>
        <div class="currency_status_box" style="float: left; margin-right: 5%;">
          <p>
            <?=$responseData['itemDescription']?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="alternativ_payment clearfix">
    <div class="alternativ_payment_head">
      <a href="<?=base_url('Market/Safebox')?>">
        <div class="again-play-btn"><?=langWrite('esyaDeposunaGit')?></div>
      </a>
      <br><br><br>
      <div class="clearfix">
      </div>
    </div>
  </div>
</div>
