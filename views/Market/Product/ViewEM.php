<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<div id="item-fancybox" class="scrollable_container_fancy">
  <div id="itemDetails" class="contrast-box row-fluid contrast-box">
    <div class="span12">
      <div class="meta-infos clearfix">
        <h2 id="name" class="left ">
          <span id="selectionNameMain"><?=$itemInfo->itemName?></span>
        </h2>
        <div class="meta-prop">
          <div class="price">
            <span class="price-label">Fiyat:</span>
            <span class="amount js_currency">
              <span class="block-price">
                <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/em_coins.png" alt="<?=langWrite('lang311')?>"/>
                <span id="end-price" class="end-price old-price"><?=isset($itemPriceDiscountEM)?$itemPriceDiscountEM.' <small><del>'.$itemInfo->itemPriceEM.'</del></small>':$itemInfo->itemPriceEM?></span>
              </span>
            </span>
          </div>
        </div>
        <div class="breadcrumb">
          <span><a href="<?=base_url()?>"><?=langWrite('lang324')?></a>&rsaquo;</span>
          <?php if (isset($upperCategory)): ?>
            <span><a href="<?=base_url()?>Market/CategoryEM/<?=$upperCategory->categorySeo?>/<?=$upperCategory->categoryId?>"><?=$upperCategory->categoryName?></a>&rsaquo;</span>
          <?php endif; ?>
          <span><a href="<?=base_url()?>Market/CategoryEM/<?=$category->categorySeo?>/<?=$category->categoryId?>"><?=$category->categoryName?></a>&rsaquo;</span>
          <span class="active"><?=$itemInfo->itemName?></span>
        </div>
      </div>
      <div id="pictureShowcase">
        <div class="item-info clearfix">
          <div class="item-showcase grey-box  span4">
            <div id="image" class="picture_wrapper">
              <?php if ($itemInfo->itemIcon!="" || $itemInfo->icon!=""): ?>
                <img id="selectionImageMain" class="image" src="<?=base_url()?>assets/market/images/icon/<?=($itemInfo->itemIcon!=""?$itemInfo->itemIcon:$itemInfo->icon)?>" alt="<?=$itemInfo->itemName?> (<?=isset($itemPriceDiscountEM)?$itemPriceDiscountEM.' <small><del>'.$itemInfo->itemPriceEM.'</del></small>':$itemInfo->itemPriceEM?>)"/>
              <?php endif; ?>
            </div>
          </div>
          <div class="tabbable item-description span8">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#info" data-toggle="tab">
                <?=langWrite('lang325')?>
              </a></li>
              <li ><a href="#description" data-toggle="tab"><?=langWrite('lang326')?></a></li>
            </ul>
            <div class="tab-content ">
              <div class="tab-pane scrollable_container_fancy grey-box active" id="info">
                <p id="selectionShortMain">
                  <?=$itemInfo->itemDescription?>
                </p>
              </div>
              <div class="tab-pane scrollable_container_fancy grey-box " id="description">
                <?=$itemInfo->itemDescription?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="itemBuy" class="contrast-box volume_discount contrast-box">
    <div class="grey-box clearfix">
      <div class=" dark-grey-box clearfix">
        <div class="contrast-box 1 ">
          <div class="amount clearfix js_currency" data-currency="1" style="padding: 20px;">
            <label><?=langWrite('lang327')?></label>
            <ul id="js_button_container" class="clearfix ">
              <li>
                <button type="button" class="btn-discount _5 btn-active btn1" onclick="changePrice(<?=$itemPriceEM?>,1,'.btn1')">1</button>
                <button type="button" class="btn-discount _1 btn2" onclick="changePrice(<?=$itemPriceEM?>,2,'.btn2')">2</button>
                <button type="button" class="btn-discount _1 btn3" onclick="changePrice(<?=$itemPriceEM?>,3,'.btn3')">3</button>
                <button type="button" class="btn-discount _1 btn5" onclick="changePrice(<?=$itemPriceEM?>,5,'.btn5')">5</button>
                <button type="button" class="btn-discount _1 btn7" onclick="changePrice(<?=$itemPriceEM?>,7,'.btn7')">7</button>
                <button type="button" class="btn-discount _1 btn10" onclick="changePrice(<?=$itemPriceEM?>,10,'.btn10')">10</button>
              </li>
            </ul>
          </div>
          <div class="arrow"></div>
        </div>
        <div id="buy" class="">
          <form>
            <p><?=langWrite('lang328')?></p>
            <p class="bill_price block-price">
              <img class="ttip" tooltip-content="Ejderha Parası" src="<?=base_url()?>assets/market/images/em_coins.png" alt="Ejderha Parası" />
              <span id="end-price_1" class="end-price"><?=isset($itemPriceDiscountEM)?$itemPriceDiscountEM.' <small><del>'.$itemInfo->itemPriceEM.'</del></small>':$itemInfo->itemPriceEM?></span>
            </p>
            <div class="buy-btn-box clearfix">
              <div class="btn-group ">
                <a id="buyItem" href="<?=base_url()?>Market/ItemBuyEM/<?=$itemInfo->itemId?>/1" class="fancybox fancybox.ajax"><button type="button" class="btn-price"><?=langWrite('lang329')?></button></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function changePrice(price,num,button) {
  $('.btn-active').removeClass('btn-active');
  $('._5').addClass('_1');
  $('._5').removeClass('_5');
  $(button).removeClass('_1');
  $(button).addClass('_5');
  $(button).addClass('btn-active');
  $('#end-price').text(price*num);
  $('#end-price_1').text(price*num);
  $('#end-mileage').text(price*num);
  var buyUrl = "<?=base_url()?>Market/ItemBuyEM/<?=$itemInfo->itemId?>/"+num;
  $('#buyItem').attr('href',buyUrl);
}
</script>
