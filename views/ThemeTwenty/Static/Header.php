<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <meta property="og:url" content="<?=base_url()?>assets/images/logo.png?v1.00" />
  <meta name="viewport" content="width=1440, maximum-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/ThemeTwenty/css/reset.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/ThemeTwenty/css/style.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/ThemeTwenty/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/ThemeTwenty/css/bootstrap-table.css')?>">
  <link href="<?=base_url('assets/css/fancybox.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/ek.css')?>" rel="stylesheet">
  <link rel="shortcut icon" sizes="16x16 32x32" href="<?=base_url()?>assets/images/favicon.ico">
  <?=htmlspecialchars_decode($settings->settingWebScripts)?>
</head>
<body class="netbar" data-url="<?=base_url()?>">
  <div id="pagefoldtarget"></div>
  <div id="mmonetbar" class="mmometin2">
    <div id="mmoContent" class="mmosmallbar">
      <div id="mmoGame" class="mmoGame">
        <div class="mmoBoxLeft"></div>
        <div class="mmoBoxMiddle">
          <div id="mmoLangs">
            <label>Sitenin varsayılan dili:</label>
            <div id="mmoLangSelect" class="mmoSelectbox">
              <div id="mmoSarea1" onclick="mmoShowOptions(1)" class="mmoSelectArea">
                <div class="mmoSelectText" id="mmoMySelectContent1">
                  <?php if (get_cookie('lang')=="english"): ?>
                    <div id="mmoMySelectText1" class="mmoflag mmo_EN">İngilizce</div>
                  <?php else: ?>
                    <div id="mmoMySelectText1" class="mmoflag mmo_TR">Türk</div>
                  <?php endif; ?>
                </div>
                <div class="mmoSelectButton"></div>
              </div>
              <div class="mmoOptionsDivInvisible" id="mmoOptionsDiv1">
                <ul class="mmoLangList mmoListHeight" id="mmoList1">
                  <?php if (get_cookie('lang')=="english"): ?>
                    <li class="mmoActive"><a class="mmoflag mmo_EN">İngilizce</a></li>
                    <li><a href="<?=base_url('Index/Language/TR')?>" class="mmoflag mmo_TR">Türk</a></li>
                  <?php else: ?>
                    <li class="mmoActive"><a class="mmoflag mmo_TR">Türk</a></li>
                    <li><a href="<?=base_url('Index/Language/EN')?>" class="mmoflag mmo_EN">English</a></li>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="mmoBoxRight"></div>
        </div>
        <input id="mmoFocus" type="text" size="5" />
      </div>
    </div>
    <div id="page">
      <div class="header-wrapper">
        <div id="header">
          <a class="logo" href="<?=base_url()?>">
            <img class="logo" src="<?=base_url('assets/images/logo.png?v1.00')?>" alt="logo" style="margin-top: -97px; height: 270px; top:<?=logoTop?>px;bottom:<?=logoBottom?>px;left:<?=logoLeft?>px;right:<?=logoRight?>px">
          </a>
          <?php if (!writeSession('userId')): ?>
            <div class="header-box">
              <div id="regBtn">
                <a id="toReg" href="<?=base_url('Download')?>"><?=langWrite('ucretsizOyna')?></a>
                <div id="regSteps">
                  <a href="<?=base_url('Register')?>">
                    <span>1. <?=langWrite('lang9')?> </span> >>
                    <span>2. <?=langWrite('lang10')?> </span> >>
                    <span>3. <?=langWrite('lang81')?></span>
                  </a>
                </div>
              </div>
            </div>
          <?php else: ?>
            <center>
              <div id="userBox">
                <br>
                <div style="position=:bottom; margin-left:-155px;">
                  <h4><?=langWrite('lang536')?> <?=writeSession('userLoginName')?></h4>
                </div>
                <ul class="header-box-nav-container" style="position:left; margin-left:-153px;">
                  <?php if (market['status']==1): ?>
                    <li class="stepdown"><a id="example4" href="<?=base_url('Market/Buy')?>" class="itemshop iframe nav-box-btn nav-box-btn-1"><?=langWrite('lang194')?></a></li>
                  <?php else: ?>
                    <li class="stepdown"><a id="example4" href="<?=base_url('Payment/Buy')?>" class="nav-box-btn nav-box-btn-1"><?=langWrite('lang194')?></a></li>
                  <?php endif; ?>
                  <li class="stepdown"><a href="<?=base_url('ControlPanel/Index')?>" class="nav-box-btn nav-box-btn-2"><?=langWrite('lang159')?></a></li>
                  <li class="stepdown"><a href="<?=base_url('Logout')?>" class="nav-box-btn nav-box-btn-4"><?=langWrite('lang201')?></a></li>
                </ul>
              </div>
            </center>
          <?php endif; ?>
        </div>
      </div>
      <div class="container-wrapper">
        <div class="container">
