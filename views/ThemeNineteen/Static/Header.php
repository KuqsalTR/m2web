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
  <meta property="og:url" content="<?=base_url()?>assets/images/logo.png" />
  <meta name="viewport" content="width=1440, maximum-scale=1">
  <link href="<?=base_url('assets/ThemeNineteen/css/style.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>assets/css/fancybox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/ek.css" rel="stylesheet">
  <link rel="shortcut icon" sizes="16x16 32x32" href="<?=base_url()?>assets/images/favicon.ico">
  <?=htmlspecialchars_decode($settings->settingWebScripts)?>
</head>
<body data-url="<?=base_url()?>">
  <ul class="languagepicker roundborders large">
    <?php if (get_cookie('lang')!="english"): ?>
      <a href="<?=base_url()?>/Index/Language/TR"><li><img src="<?=base_url()?>assets/images/tr.png"></li></a>
      <a href="<?=base_url()?>/Index/Language/EN"><li><img src="<?=base_url()?>assets/images/en.png"></li></a>
    <?php else: ?>
      <a href="<?=base_url()?>/Index/Language/EN"><li><img src="<?=base_url()?>assets/images/en.png"></li></a>
      <a href="<?=base_url()?>/Index/Language/TR"><li><img src="<?=base_url()?>assets/images/tr.png"></li></a>
    <?php endif; ?>
  </ul>

  <div class="netbarslot">
    <div id="pagefoldtarget"></div>
    <div class="netbarslot">
      <div id="pagefoldtarget"></div>
      <div id="mmonetbar" class="mmometin2" style="display: block;">
        <div id="mmoContent" class="mmonewsout">
          <div id="mmoNews">
            <div class="mmoBoxLeft"></div>
            <div class="mmoBoxMiddle" onmouseover="mmoTickHalt=true;" onmouseout="mmoTickHalt=false;">
              <div class="mmoNewsContent">
                <div id="mmoNewsticker" style="opacity: 1;">
                  <ul>
                    <li class="">
                      <?php if (isset($notices[0])): ?>
                        <a target="_top" href="<?=base_url('Notice/Detail/'.$notices[0]->noticeSeo.'/'.$notices[0]->noticeId)?>"><?=$notices[0]->noticeTitle?></a>
                      <?php else: ?>
                        <a target="_top" href="#"><?=langWrite('lang54')?></a>
                      <?php endif; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mmoBoxRight"></div>
          </div>
          <div style="margin: 4px 4px 0 0; float: left;">
            <div class="mmoBoxLeft"></div>
            <div class="mmoBoxMiddle">
              <div id="mmoLangs" style="width: 158px;">
                <label><?=langWrite('lang7')?></label> <?=$countOnline?>
              </div>
            </div>
            <div class="mmoBoxRight"></div>
          </div>
          <?php if (kayitSayisi['durum']==1): ?>
            <div style="margin: 4px 4px 0 0; float: left;">
              <div class="mmoBoxLeft"></div>
              <div class="mmoBoxMiddle">
                <div id="mmoLangs" style="width: 158px;">
                  <label><?=langWrite('lang437')?>:</label> <?=$registerCount?>
                </div>
              </div>
              <div class="mmoBoxRight"></div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div style="display:flex">
    <a href="<?=base_url()?>" style="margin:auto">
      <img class="logo" src="<?=base_url('assets/images/logo.png')?>" alt="logo" style="width:<?=logoWidth?>px;top:<?=logoTop?>px;bottom:<?=logoBottom?>px;left:<?=logoLeft?>px;right:<?=logoRight?>px">
    </a>
  </div>
  <?php if (!writeSession('userId')): ?>
    <header role="banner">
      <div class="ui container" style="margin-top:-200px">
        <a class="playfree" role="button" href="<?=base_url('Register')?>"><?=langWrite('ucretsizOyna')?></a>
      </div>
    </header>
  <?php else: ?>
    <header role="banner">
      <div class="ui container loggedin" style="margin-top:-200px">
        <div class="userinfo">
          <div class="welcome-text-left">
            <?=langWrite('lang536')?> <?=writeSession('userLoginName')?>
          </div>
          <div class="header-box-nav-container">
            <ul class="header-box-nav-login">
              <li class="stepdown">
                <a href="<?=base_url('ControlPanel/Index')?>" class="nav-box-btn nav-box-btn-2"><?=langWrite('lang159')?></a>
              </li>
              <li class="stepdown">
                <?php if (market['status']==1): ?>
                  <a href="<?=base_url('Market/Buy')?>" class="itemshop iframe ayment nav-box-btn nav-box-btn-1"><?=langWrite('lang194')?></a>
                <?php else: ?>
                  <a href="<?=base_url('Payment/Buy')?>" class="ayment nav-box-btn nav-box-btn-1"><?=langWrite('lang194')?></a>
                <?php endif; ?>
              </li>
              <li class="stepdown">
                <a href="<?=base_url('Logout')?>" class="nav-box-btn nav-box-btn-4"><?=langWrite('lang201')?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  <?php endif; ?>
  <div class="container">
