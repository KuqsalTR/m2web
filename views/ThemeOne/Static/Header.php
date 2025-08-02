<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--[if lt IE 9]><script src="https:.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <meta property="og:url" content="<?=base_url('assets/images/logo.png')?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https:.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="<?=base_url('assets/ThemeOne/css/css-reset.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/ThemeOne/css/main.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/ThemeOne/css/snrtr.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/fancybox.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/ek.css')?>" rel="stylesheet">
  <link rel="shortcut icon" sizes="16x16 32x32" href="<?=base_url('assets/images/favicon.ico')?>">
  <?=htmlspecialchars_decode($settings->settingWebScripts)?>
</head>
<body data-url="<?=base_url()?>">
  <div class="top-panel">
    <div class="wrap">
      <div class="lang-block">
        <div id="dropdown-block" class="dropdown-block" tabindex="1">
          <div>
            <?php if (get_cookie('lang')=="english"): ?>
              <img src="<?=base_url('assets/ThemeOne/images/flag-english.png')?>" alt="<?=langWrite('lang4')?>"> <span class="lang"><?=langWrite('lang3')?></span>
            <?php else: ?>
              <img src="<?=base_url('assets/ThemeOne/images/flag-turkish.png')?>" alt="<?=langWrite('lang3')?>"> <span class="lang"><?=langWrite('lang4')?></span>
            <?php endif; ?>
          </div>
          <ul class="dropdown">
            <li class="goLang"><a href="<?=base_url('Index/Language/TR')?>"><img src="<?=base_url('assets/ThemeOne/images/flag-turkish.png')?>" alt="<?=langWrite('lang4')?>"> <span class="lang"><?=langWrite('lang4')?></span></a></li>
            <li class="goLang"><a href="<?=base_url('Index/Language/EN')?>"><img src="<?=base_url('assets/ThemeOne/images/flag-english.png')?>" alt="<?=langWrite('lang3')?>"> <span class="lang"><?=langWrite('lang3')?></span></a></li>
          </ul>
        </div>
      </div>
      <?php if (!writeSession('userId')): ?>
        <div class="login-panel">
          <a href="<?=base_url('Login')?>" class="button"><?=langWrite('lang5')?></a>
          <?php if (registerStatus==1): ?>
            <a href="<?=base_url('Register')?>" class="button button-bg"><?=langWrite('lang6')?></a>
          <?php endif; ?>
        </div>
      <?php else: ?>
        <div class="login-panel">
          <a href="<?=base_url('ControlPanel')?>" class="button"><?=writeSession('userLoginName')?></a>
          <a href="<?=base_url('Logout')?>" class="button button-bg"><?=langWrite('lang158')?></a>
        </div>
      <?php endif; ?>
      <div class="top-panel-status">
        <?=langWrite('lang7')?> <span class="progress-bar-bg"><span id="progressBar" data-limit="<?=online['limit']?>" class="progress-bar" style="width: <?=(($countOnline*100)/online['limit'])?>%;"></span></span> <span></span> <span class="online-users"><i class="user-icon"></i> <span id="onlineCount"><?=($countOnline)?></span> </span>
      </div>
      <?php if (kayitSayisi['durum']==1): ?>
        <div class="top-panel-status">
          <?=langWrite('lang437')?> : <span class="online-users" style="margin-left:5px;"><i class="user-icon"></i> <?=$registerCount?></span>
        </div>
      <?php endif; ?>
      <div class="top-menu">
        <ul>
          <li <?=($this->router->fetch_class().'/'.$this->router->fetch_method())=="Index/index"?'class="active"':false?>>
            <a href="<?=base_url()?>"><?=langWrite('lang8')?></a>
          </li>
          <li <?=webTitleCheck('Register')?'class="active"':false?>><a href="<?=base_url('Register')?>"><?=langWrite('lang9')?></a></li>
          <li <?=webTitleCheck('Download')?'class="active"':false?>><a href="<?=base_url('Download')?>"><?=langWrite('lang10')?></a></li>
          <li <?=webTitleCheck('Ranking')?'class="active"':false?>>
            <a href="#"><?=langWrite('lang11')?></a>
            <ul>
              <li><a href="<?=base_url('Ranking/Player')?>"><?=langWrite('lang12')?></a></li>
              <li><a href="<?=base_url('Ranking/Guild')?>"><?=langWrite('lang13')?></a></li>
            </ul>
          </li>
          <?php if (ticketSystem["status"]==1): ?>
            <li <?=webTitleCheck('Support')?'class="active"':false?>><a href="<?=base_url('Support')?>"><?=langWrite('lang14')?></a></li>
          <?php endif; ?>
          <?php if ($links->wiki!=""): ?>
            <li><a href="<?=$links->wiki?>"><?=langWrite('lang15')?></a></li>
          <?php endif; ?>
          <?php if ($links->gamePromotion!="" && kayitSayisi['durum']==0): ?>
            <li><a href="<?=$links->gamePromotion?>"><?=langWrite('lang16')?></a></li>
          <?php endif; ?>
          <?php if ($links->facebook!=""): ?>
            <li>
              <a href="<?=$links->facebook?>"><?=langWrite('lang17')?></a>
              <?php if ($links->facebookGroup!=""): ?>
                <ul>
                  <li><a href="<?=$links->facebookGroup?>"><?=langWrite('lang18')?></a></li>
                </ul>
              <?php endif; ?>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <header class="header">
      <div class="logo">
        <a href="<?=base_url()?>">
          <img src="<?=base_url('assets/images/logo.png')?>" alt="logo" style="position: absolute;width:<?=logoWidth?>px;top:<?=logoTop?>px;bottom:<?=logoBottom?>px;left:<?=logoLeft?>px;right:<?=logoRight?>px">
        </a>
      </div>
      <div class="glare-red glare"></div>
      <div class="glare-blue glare"></div>
      <div class="glare-yellow"></div>
      <div class="light"></div>
    </header>
