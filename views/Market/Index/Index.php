<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="landing" class="scrollable_container">
    <div class="row-fluid">
      <?php if ($sliders || market['happyHour']!=0): ?>
        <div class="span12">
          <div class="row-fluid">
            <?php if ($sliders): ?>
              <div id="prmo-area" class="span12">
                <div id="zs-prmo-slider" class="span8">
                  <div id="prmoSlider" class="royalSlider rsMinW">
                    <?php foreach ($sliders as $key => $value): ?>
                      <div class="rsContent slide">
                        <div class="bContainer">
                          <img src="<?=base_url()?>assets/market/images/slider/<?=$value->sliderImage?>">
                          <div class="slider_banner">
                            <h3><?=$value->sliderName?></h3>
                            <p><?=htmlspecialchars_decode($value->sliderDescription)?></p>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>
              <?php if (market['happyHour']!=0): ?>
                <div id="zs-prmo-ad" class="span4">
                  <div class="call-to-action contrast-box">
                    <div id="happy-hour">
                      <img src="<?=base_url()?>assets/market/images/happy-hour-table.png">
                      <a class="hh-content" href="<?=base_url()?>Market/Buy">
                        <div class="hh-box">
                          <p class="hh-text"><?=langWrite('lang309')?></p>
                        </div>
                        <div class="hh-box-btn" style="width: 50px;margin-top: -138px;transform: rotate(-45deg);-webkit-transform: rotate(43deg);margin-right: 10px;font-size: 17px;font-weight: 700;color: #f6b509;text-shadow: 1px 1px 2px black, 0 0 22px #3a5f1f, 0 0 11px #54b10e;">
                          <?=langWrite('lang310')?>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($items): ?>
        <br class="clearfloat">
        <div class="row-fluid">
          <div class="item-sample span12">
            <h2 class="heading-cat">
              <a class="text-link" href="<?=base_url('Market/Popular')?>"><?=langWrite('lang345')?></a><?=langWrite('lang346')?></h2>
              <div class="carousell royalSlider contentslider rsDefault visibleNearby card">
                <?php foreach ($items as $key => $value): ?>
                  <div class="span4 list-item quickbuy">
                    <div class="contrast-box  item-box inner-content clearfix" >
                      <div class="desc row-fluid">
                        <div class="item-description">
                          <p class="item-status js_currency_default">
                          </p>
                          <h4 class="fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>">
                            <a class="card-heading" title="<?=$value->itemName?>"><?=$value->itemName?></a>
                          </h4>
                          <div class="item-shortdesc clearfix">
                            <a class="item-thumb fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>">
                              <div class="item-thumb-container">
                                <div id="image" class="picture_wrapper_2">
                                  <?php if ($value->itemIcon!="" || $value->icon!=""): ?>
                                    <img class="item-thumb-63" src="<?=base_url()?>assets/market/images/icon/<?=($value->itemIcon!=""?$value->itemIcon:$value->icon)?>" alt="<?=$value->itemName?>">
                                  <?php endif; ?>
                                </div>
                              </div>
                            </a>
                            <span class="category-link"></span>
                            <div class="fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>">
                              <p class="item-box-description">
                                <?=$value->itemDescription?>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="item-footer price_desc row-fluid js_currency_default">
                          <div class="action-box left">
                          </div>
                          <div class="action-box right">
                            <button class="span5 right btn-price">
                              <span class="block-price">
                                <img class="ttip" tooltip-content="Ejderha Parası" src="<?=base_url()?>assets/market/images/coins.png" alt="Ejderha Parası"/>
                                <?php if ($value->itemPriceDiscountEP>0): ?>
                                  <span id="item_price_<?=($key+1)?>" class="end-price" data-value="<?=$value->itemPriceDiscountEP?>"><?=$value->itemPriceDiscountEP?> <small> <del><?=$value->itemPriceEP?></del> </small> </span>
                                <?php else: ?>
                                  <span id="item_price_<?=($key+1)?>" class="end-price" data-value="<?=$value->itemPriceEP?>"><?=$value->itemPriceEP?></span>
                                <?php endif; ?>
                              </span>
                            </button>
                            <button class="span5 right btn-buy fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>"><?=langWrite('lang347')?></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <script>
  function changePrice2(item_id,num) {
    var url = "product/price_change.html";
    var data = {item_id:item_id,num:num};
    $.post(url,data,function (rsp) {
      console.log(rsp);
      if (rsp.status === true)
      {
        $("#item_price_" + item_id).text(rsp.price);
        $("#item_price_" + item_id).attr("data-value",rsp.price);
      }
    },"json");
  }
  </script>
  <div id="overlayMask"></div>
</div><!-- close contentContainer -->
</div>
</body>
</html>
