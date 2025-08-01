<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="category">
    <h2>
      <ul class="breadcrumb">
        <li>
          <?php if (isset($category)): ?>
            <a href="#" title="<?=$category->categoryName?>"><?=$category->categoryName?></a>
          <?php else: ?>
            <a href="#" title="<?=langWrite('lang313')?>"><?=langWrite('lang313')?></a>
          <?php endif; ?>
          <span class="item_count">(<?=count($items)?>)</span>
        </li>
      </ul>
      <div class="drop-sort-by">
        <form method="post" id="formArticlesSort" action="#">
          <label> <?=langWrite('lang314')?>:</label>
          <div id="searchDropdown" class="dropdown">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="buttonText"><?=langWrite('lang315')?></span>
              <span class="btn-default"><span class="caret"></span></span>
            </button>
            <ul class="dropdown-menu">
              <li class="dropdown-header">
                <i class="icon-loop3"></i><?=langWrite('lang316')?>
              </li>
              <li>
                <a class="sort-option" href="javascript:void(0);" data-value="standardArticleSort"><?=langWrite('lang317')?></a>
              </li>
              <li>
                <a class="sort-option" href="javascript:void(0);" data-value="upNameArticleSort"><?=langWrite('lang318')?></a>
              </li>
              <li>
                <a class="sort-option" href="javascript:void(0);" data-value="downNameArticleSort"><?=langWrite('lang319')?></a>
              </li>
              <li>
                <a class="sort-option" href="javascript:void(0);" data-value="upPriceArticleSort"><?=langWrite('lang320')?></a>
              </li>
              <li>
                <a class="sort-option" href="javascript:void(0);" data-value="downPriceArticleSort"><?=langWrite('lang321')?></a>
              </li>
            </ul>
          </div>
          <input type="hidden" name="selectComboName" id="selectComboName_hidden" value="standardArticleSort">
          <input type="hidden" name="filterOption" id="filterOptionHidden" value="">
        </form>

        <script type="text/javascript">
        $(document).ready(function () {
          var sortValue = 'standardArticleSort';
          $('#searchDropdown').find('.dropdown-menu a.sort-option[data-value=' + sortValue + ']').addClass('active');
          $('#searchDropdown .dropdown-toggle').dropdown();
          $('#searchDropdown').find('.dropdown-menu').find('a.sort-option').click(function () {
            sortArticlesBy($(this).data('value'));
            $('li.list-item.last-in-line').each(function () {
              $(this).removeClass('last-in-line');
            });
            cardMargin();
            var anchor = $(this);
            anchor.parents('#searchDropdown').find('.active').each(function () {
              $(this).removeClass('active');
            });
            anchor.addClass('active');
            anchor.parents('#searchDropdown').find('.buttonText').text($.trim(anchor.text()));
          });
          $('#searchDropdown').find('.dropdown-menu').find('a.filter-option').click(function () {
            var value = $(this).data('value');
            var elem = $('#filterOptionHidden');
            elem.val(value);
            $(this).closest('form').trigger('submit');
            setTimeout(function () {
              window.location.href = window.location.href;
            }, 500);
          });
          $('#searchDropdown').find('.dropdown-menu').find('a.filter-option').each(function () {
            if ($('#filterOptionHidden').val() == $(this).data('value')) {
              $(this).find('i').removeClass('icon-radio-unchecked').addClass('icon-radio-checked');
            }
          });
          setSortDropdownText();
        });
        function setSortDropdownText() {
          var selectedValue = $('#selectComboName_hidden').val();
          $('#searchDropdown').find('.dropdown-menu').find('a.sort-option').each(function () {
            var val = $(this).data('value');
            if (!val) {
              return;
            }
            if (val === selectedValue) {
              var dropdownText = $.trim($(this).text());
              $('#searchDropdown').find('button.dropdown-toggle').find('.buttonText').text(dropdownText);
            }
          });
        }
        </script>
      </div>
    </h2>
    <div class="tabbable tabs-left">
      <?php if ($categories): ?>
        <ul id="subnavi" class="nav nav-tabs">
          <?php foreach ($categories as $key => $value): ?>
            <li class="has-subnavi" >
              <a class="btn-catitem <?=(isset($category) && (($value->categoryId==$category->categoryId) || ($value->categoryId==$category->categoryUpperId))?'btn-catitem-active':false)?>" href="<?=base_url()?>Market/<?=webTitleCheck('Discount')?'CategoryDiscount':'Category'?>/<?=$value->categorySeo?>/<?=$value->categoryId?>">
                <img width="32" height="32" src="<?=base_url()?>assets/market/images/categoryIcon/<?=$value->categoryIcon?>" class="icon">
                <br><?=$value->categoryName?>
              </a>
              <?php $subCategories = $this->market_model->getMarketSubCategories($value->categoryId) ?>
              <?php if ($subCategories): ?>
                <ul class="dropdown-menu">
                  <?php foreach ($subCategories as $key => $value): ?>
                    <li class="has-subnavi">
                      <a class="btn-subcatitem" href="<?=base_url()?>Market/<?=webTitleCheck('Discount')?'CategoryDiscount':'Category'?>/<?=$value->categorySeo?>/<?=$value->categoryId?>"><?=$value->categoryName?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <div class="tab-content">
        <div class="scrollable_container row-fluid">
          <?php if (webTitleCheck('Products')): ?>
            <br>
            <div style="clear:both;"></div>
            <div id="error" class="contrast-box" style="width: calc(100% - 40px) !important;padding-top: 5px;padding-bottom: 0px;margin-top: -19px !important;margin-left: 0px !important;text-align: center;line-height: 16px;background: rgb(68, 29, 16);">
              <div class="dark-grey-box" style="background: none;color: #f9e9c0;">
                <p><?=langWrite('lang533')?></p>
              </div>
              <div>
              </div>
            </div>
          <?php endif; ?>
          <ul class="item-list card clearfix">
            <?php if ($items): ?>
              <?php foreach ($items as $key => $value): ?>
                <li class="list-item shown js_currency quickbuy" data-sort-price="<?=$value->itemPriceDiscountEP>0?$value->itemPriceDiscountEP:$value->itemPriceEP?>" data-sort-name="<?=$value->itemName?>">
                  <div class="contrast-box  item-box inner-content clearfix">
                    <div class="desc row-fluid">
                      <div class="item-description">
                        <p class="item-status js_currency_default"></p>
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
                      <!-- Buttons -->
                      <div class="item-footer price_desc row-fluid js_currency_default">
                        <div class="action-box left">
                          <?php if ($value->itemTimeType!=0 && $value->itemTime!=0): ?>
                            <i class="zicon-hd-time-ingame ttip" style="font-size:34px" tooltip-content="<?=SecondsToDay($value->itemTime)?>"></i>
                          <?php endif; ?>
                        </div>
                        <div class="action-box right">
                          <button class="span5 right btn-price">
                            <span class="block-price">
                              <img class="ttip" tooltip-content="<?=langWrite('lang311')?>" src="<?=base_url()?>assets/market/images/coins.png" alt="<?=langWrite('lang311')?>"/>
                              <?php if ($value->itemPriceDiscountEP>0): ?>
                                <span id="item_price_<?=($key+1)?>" class="end-price" data-value="<?=$value->itemPriceDiscountEP?>"><?=$value->itemPriceDiscountEP?> <small> <del><?=$value->itemPriceEP?></del> </small> </span>
                              <?php else: ?>
                                <span id="item_price_<?=($key+1)?>" class="end-price" data-value="<?=$value->itemPriceEP?>"><?=$value->itemPriceEP?></span>
                              <?php endif; ?>
                            </span>
                          </button>
                          <button class="span5 right btn-buy fancybox fancybox.ajax" href="<?=base_url()?>Market/ItemDetail/<?=$value->itemId?>"><?=langWrite('lang312')?></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
            <?php else: ?>
              <div id="error" class="contrast-box">
                <div class="dark-grey-box">
                  <br>
                  <h4> <center><?=langWrite('lang308')?></center> </h4>
                  <div class="btn_wrapper"></div>
                </div>
              </div>
            <?php endif; ?>
          </ul>
          <br class="clearfloat">
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
