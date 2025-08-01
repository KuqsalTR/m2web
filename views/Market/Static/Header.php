<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php require FCPATH.'application/views/Static/Title.php'?> | <?=$settings->settingWebTitle?></title>
  <meta name="generator" content="snrtr" />
  <meta name="keywords" content="<?=$settings->settingWebKeywords?>" />
  <meta name="description" content="<?=$settings->settingWebDescription?>" />
  <meta name="robots" content="index,follow" />
  <meta name="copyright" content="<?=$settings->settingWebFooterText?>" />
  <meta name="author" content="metin2hazirpanel.com" />
  <meta name="language" content="Turkish" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php require FCPATH.'application/views/Static/Title.php'?> | <?=$settings->settingWebTitle?>" />
  <meta property="og:description" content="<?=$settings->settingWebDescription?>" />
  <meta property="og:url" content="<?=base_url()?>assets/images/logo.png" />
  <link rel="shortcut icon" sizes="16x16 32x32" href="<?=base_url()?>assets/images/favicon.ico">
  <link rel="stylesheet" href="<?=base_url()?>assets/market/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" id="gameStyle" href="<?=base_url()?>assets/market/css/style.min.css" type="text/css" />
  <link rel="stylesheet" id="gameStyle" href="<?=base_url()?>assets/market/css/animate.css" type="text/css" />

  <script type="text/javascript">
  (function (wd, doc) {
    var w = wd.innerWidth || doc.documentElement.clientWidth;
    var h = wd.innerHeight || doc.documentElement.clientHeight;
    var screenSize = {w: w, h: h};
    var compareW = 801;
    if (screenSize.w > 0 && screenSize.w < compareW) {
      var cssTag = doc.createElement("link"),
      cssFile = '<?=base_url()?>assets/market/css/responsive.min.css';
      cssTag.setAttribute("id", "smallStyle");
      cssTag.setAttribute("rel", "stylesheet");
      cssTag.setAttribute("type", "text/css");
      cssTag.setAttribute("href", cssFile);
      doc.getElementsByTagName("head")[0].appendChild(cssTag);
    }
  })(window, document);
  </script>

  <!--[if lt IE 8]>
  <link rel="stylesheet" href="<?=base_url()?>assets/market/css/ie-8-1.css" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/market/css/ie-8-2.css" type="text/css" />
  <![endif]-->

  <!--[if IE 8]>
  <link rel="stylesheet" href="<?=base_url()?>assets/market/css/ie-8-3.css" type="text/css" />
  <![endif]-->

  <script type="text/javascript" src="<?=base_url()?>assets/market/js/composer.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/market/js/helper.js"></script>

  <!--[if lt IE 8]>
  <script type="text/javascript" src="<?=base_url()?>assets/market/js/ie-8.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="<?=base_url()?>assets/market/js/ie-9.js"></script>
  <![endif]-->

  <script type="text/javascript" src="<?=base_url()?>assets/market/js/main.js"></script>
</head>
<body class="website">
  <div id="page" class="row-fluid">
    <div id="header" class="header clearfix">
      <div class="span5  logo-block">
        <h1>
          <a style="background: url(<?=base_url()?>assets/images/logo.png) 0 50% no-repeat;background-size: contain;" href="<?=base_url()?>Market"><?=$settings->settingWebTitle?></a>
        </h1>
        <div class="welcome">
          <i class="icon-user"></i><span><?=writeSession('userLoginName')?></span>
          <i class="icon-earth"></i><span><?=$settings->settingWebTitle?></span>
        </div>
      </div>
      <div class="span7 payment-block">
        <a href="<?=base_url()?>Market/Buy">
          <button class="btn-price premium">
            <img class="ttip" tooltip-content="Ejderha Parası" src="<?=base_url()?>assets/market/images/coins.png"/>
            <?php if (market['happyHour']!=0): ?>
              <span class="premium-name"><?=langWrite('lang294').'(+%'.market['happyHour'].')'?></span>
            <?php else: ?>
              <span class="premium-name"><?=langWrite('lang294')?></span>
            <?php endif; ?>
          </button>
        </a>
        <ul class="currency_status currency-amount-2">
          <li data-currency="1">
            <span class="ttip" tooltip-content="Ejderha Parası">
              <span class="block-price">
                <img src="<?=base_url()?>assets/market/images/coins.png" width="16" height="16" alt="Ejderha Parası"/>
                <span id="balances1" class="end-price" data-currency="<?=$user->$marketEp?>"><?=$user->$marketEp?></span>
              </span>
            </span>
          </li>
          <li data-currency="2">
            <span class="ttip" tooltip-content="Ejderha Markası">
              <span class="block-price">
                <img src="<?=base_url()?>assets/market/images/em_coins.png" width="16" height="16" alt="Ejderha Markası" />
                <span id="balances2" class="end-price" data-currency="<?=$user->$marketEm?>"><?=$user->$marketEm?></span>
              </span>
            </span>
          </li>
        </ul>
        <button id="showRightPush" class="account-push" ><i class="icon-menu2"></i></button>
      </div>
    </div>
    <div id="contentContainer">
      <nav id="slideMenu" class="clearfix">
        <h2><i class="icon-user"></i> <?=langWrite('lang295')?></h2>
        <div class="account-infos">
          <img class="avatar" height="45" width="45" src="<?=base_url()?>assets/market/images/chrs/0.png" alt="" />
          <span class="buy-for"><?=langWrite('lang296')?></span>
          <p class="selected-player">
            <?=langWrite('lang297')?> <?=writeSession('userLoginName')?><br>
            <?=langWrite('lang298')?> <?=$settings->settingWebTitle?>
          </p>
        </div>
        <ul class="nav nav-tabs nav-stacked">
          <li>
            <a class="btn-sideitem"  href="<?=base_url()?>Market/Characters"><i class="icon-users"></i> <?=langWrite('lang299')?></a>
          </li>
          <li>
            <a class="btn-sideitem"  href="<?=base_url()?>Market/Logs"><i class="icon-basket"></i> <?=langWrite('lang300')?></a>
          </li>
          <li>
            <a class="btn-sideitem"  href="<?=base_url()?>Market/Safebox"><i class="icon-stack"></i> <?=langWrite('lang301')?></a>
          </li>
          <li>
            <a class="btn-sideitem"  href="<?=base_url()?>Market/Coupon"><i class="icon-barcode"></i> <?=langWrite('lang302')?></a>
          </li>
          <li>
            <a class="btn-sideitem"  href="<?=base_url()?>Market/CouponLogs"><i class="icon-barcode"></i> <?=langWrite('lang381')?></a>
          </li>
        </ul>
        <?php if (!empty($wheels)): ?>
          <h2><i class="icon-smile"></i> <?=langWrite('maceraVeEglence')?></h2>
          <ul class="nav nav-tabs nav-stacked">
            <?php foreach ($wheels as $key => $value): ?>
              <li>
                <a class="btn-sideitem" id="Xmas2017" href="<?=base_url()?>Market/Wheel/<?=$value->wheelId?>">
                  <i class="zicon-wheel"></i>
                  <span><?=$value->wheelName?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </nav>
      <div id="navigation" class="navbar">
        <div class="container">
          <ul class="nav nav-tabs  search">
            <li class="active">
              <a class="btn-navitem icon-home <?=(($this->router->fetch_class().'/'.$this->router->fetch_method())=="Market/index") || (($this->router->fetch_class().'/'.$this->router->fetch_method())=="Market/Index")?' btn-navitem-active':false?>"  href="<?=base_url()?>Market"></a>
            </li>
            <li class="">
              <a href="<?=base_url()?>Market/Products" title="" class="btn-navitem <?=webTitleCheck('Market') && webTitleCheck('Products')?' btn-navitem-active':false?>"><?=langWrite('lang303')?></a>
            </li>
            <?php if (!empty($checkDiscountItem)): ?>
              <li>
                <a href="<?=base_url()?>Market/Discount" title="" class="btn-navitem <?=webTitleCheck('Market') && webTitleCheck('Discount')?' btn-navitem-active':false?>"><?=langWrite('lang304')?></a>
              </li>
            <?php endif; ?>
            <li>
              <a href="<?=base_url()?>Market/Popular" title="" class="btn-navitem <?=webTitleCheck('Market') && webTitleCheck('Popular')?' btn-navitem-active':false?>"><?=langWrite('lang346')?></a>
            </li>
            <li>
              <a href="<?=base_url()?>Market/ProductsEM" title="" class="btn-navitem <?=webTitleCheck('Market') && webTitleCheck('ProductsEM')?' btn-navitem-active':false?>"><?=langWrite('lang305')?></a>
            </li>
            <?php if (!empty($wheels)): ?>
              <?php foreach ($wheels as $key => $value): ?>
                <li class="special-category">
                  <a href="<?=base_url()?>Market/Wheel/<?=$value->wheelId?>" title="" class="btn-navitem <?=webTitleCheck('Wheel') && webTitleCheck($value->wheelId)?'btn-navitem-active':false?>"><?=$value->wheelName?></a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
            <li class="">
              <a href="<?=base_url('Market/Vote')?>" title="" class="btn-navitem btn-navitem-active"><?=langWrite('oyVer')?></a>
            </li>
          </ul>
          <div id="searchBar" class="input-append">
            <i class="icon-search"></i>
            <form id="searchForm" data-url="<?=base_url()?>" method="post" action="<?=base_url()?>Market/Search">
              <input name="itemName" class="search-input span2" type="text" placeholder="<?=langWrite('lang306')?>" value="">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <button class="btn-default btn-search"  type="submit"><?=langWrite('lang307')?></button>
            </form>
          </div>
          <ul id="SearchResult"></ul>
          <div class="nav-collapse collapse">

          </div>
        </div>
      </div>
