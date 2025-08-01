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
        <a href="<?=base_url()?>Market/Logs" class="btn-sideitem"><i class="icon-basket"></i><span><?=langWrite('lang362')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Safebox"class="btn-sideitem btn-sideitem-active">
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
      <h2><?=langWrite('lang372')?> (<?=$safeboxCount?>)</h2>
      <div class="scrollable_container">
        <?php if ($items): ?>
          <br>
          <ul class="item-list card clearfix">
            <?php foreach ($items as $key => $value): ?>
              <li class="list-item shown js_currency quickbuy" data-sort-name="<?=$value->itemName?>">
                <div class="contrast-box  item-box inner-content clearfix">
                  <div class="desc row-fluid">
                    <div class="item-description">
                      <p class="item-status js_currency_default"></p>
                      <h4 class="fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>">
                        <a class="card-heading" title="<?=$value->itemName?>"><?=$value->itemName?></a>
                      </h4>
                      <div class="item-shortdesc clearfix">
                        <a class="item-thumb fancybox fancybox.ajax" href="<?=base_url('#')?>">
                          <div class="item-thumb-container">
                            <div id="image" class="picture_wrapper_2">
                              <?php if ($value->itemIcon!="" || $value->icon!=""): ?>
                                <img class="item-thumb-63" src="<?=base_url()?>assets/market/images/icon/<?=($value->itemIcon!=""?$value->itemIcon:$value->icon)?>" alt="<?=$value->itemName?>">
                              <?php endif; ?>
                            </div>
                          </div>
                        </a>
                        <span class="category-link"></span>
                        <div class="fancybox fancybox.ajax" href="<?=base_url('#')?>">
                          <p class="item-box-description">
                            <?=langWrite('esyayiOyunaAktarNot')?>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="item-footer price_desc row-fluid js_currency_default">
                      <div class="action-box left"></div>
                      <div class="action-box right">
                        <button class="span5 right btn-price" style="width:150px!important;">
                          <span class="block-price">
                            <span id="item_price_<?=($key+1)?>" class="end-price" data-value="<?=$value->itemId?>"><?=langWrite('depoyaEkle')?></span>
                          </span>
                        </button>
                        <button class="span5 right btn-buy fancybox fancybox.ajax" style="width:150px;" href="<?=base_url()?>Market/SendSafebox/<?=$value->itemId?>"><?=langWrite('depoyaEkle')?></button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <div class="inside_scrollable_container">
            <h3><?=langWrite('lang373')?></h3>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div id="overlayMask"></div>
</div>
</div>
</body>
</html>
