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
<body class="ingame metin2 tr">
  <div id="page" class="row-fluid">
    <div id="header" class="header clearfix">
      <div class="span5">
        <h1>
          <a style="background: url(<?=base_url()?>assets/images/logo.png) 0 50% no-repeat;background-size: contain;" href="<?=base_url()?>"></a>
        </h1>
      </div>
    </div>
    <div id="contentContainer">
      <div class="content clearfix">
        <div id="error" class="contrast-box">
          <div class="dark-grey-box">
            <h2><i class="icon-info left"></i><?=langWrite('lang288')?></h2>
            <br>
            <h3><?=langWrite('lang289')?></h3>
            <ul class="clearfix" style="list-style: disc">
              <li style="margin-top: 5px;"><?=langWrite('lang290')?></li>
              <li style="margin-top: 5px;"><?=langWrite('lang291')?></li>
              <li style="margin-top: 5px;"><?=langWrite('lang292')?></li>
            </ul>
            <h4><?=langWrite('lang293')?></h4>
            <?php if (!writeSession('userId') && market['status']==1): ?>
              <br>
              <center>
                <a href="<?=base_url('Market/Login')?>" class="btn-default" style="height:100%"><?=langWrite('lang81')?></a>
              </center>
            <?php endif; ?>
            <div class="btn_wrapper">
            </div>
          </div>
        </div>
      </div>
      <div id="overlayMask"></div>
    </div>
  </div>
</body>
</html>
