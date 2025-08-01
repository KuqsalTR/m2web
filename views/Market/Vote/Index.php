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
  <link rel="stylesheet" href="<?=base_url('assets/css/ep.css')?>">
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
            <h2 class="text-center"><?=langWrite('oyVer')?></h2>
            <br>
            <h3 class="text-center"><?=langWrite('oyVerAciklama')?></h3>
            <?php if (voteSystem['metin2pserverInfo']['status']=="1" && (empty($voteRecordCheckMetin2pserverInfo) || $voteRecordCheckMetin2pserverInfo=="-")): ?>
              <a href="<?=base_url('Market/VoteInfo')?>" style="margin: 5px;display:flex;justify-content:center;text-decoration:none" target="_blank">
                <div class="buy-box" style="display:flex;justify-content:center;align-items:center;font-size:22px;">
                  <?=langWrite('oyVer')?> - Metin2PserverInfo
                </div>
              </a>
            <?php endif; ?>
            <?php if (voteSystem['metin2pserverNet']['status']=="1" && (empty($voteRecordCheckMetin2pserverNet) || $voteRecordCheckMetin2pserverNet=="-")): ?>
              <a href="https://metin2pserver.net/vote/<?=voteSystem['metin2pserverNet']['serverTitle']?>/<?=writeSession('userId')?>" style="margin: 5px;display:flex;justify-content:center;text-decoration:none" target="_blank">
                <div class="buy-box" style="display:flex;justify-content:center;align-items:center;font-size:22px;">
                  <?=langWrite('oyVer')?> - Metin2pserverNet
                </div>
              </a>
            <?php endif; ?>
            <?php if (voteSystem['metin2vote']['status']=="1" && (empty($voteRecordCheckMetin2Vote) || $voteRecordCheckMetin2Vote=="-")): ?>
              <a href="https://www.metin2vote.com/PvP/Vote/<?=voteSystem['metin2vote']['serverTitle']?>/<?=voteSystem['metin2vote']['serverId']?>/<?=writeSession('userId')?>" style="margin: 5px;display:flex;justify-content:center;text-decoration:none" target="_blank">
                <div class="buy-box" style="display:flex;justify-content:center;align-items:center;font-size:22px;">
                  <?=langWrite('oyVer')?> - Metin2Vote
                </div>
              </a>
            <?php endif; ?>
            <?php if (!empty($voteRecordCheckMetin2pserverInfo) && $voteRecordCheckMetin2pserverInfo!="-" && !empty($voteRecordCheckMetin2pserverNet) && $voteRecordCheckMetin2pserverNet!="-" && !empty($voteRecordCheckMetin2Vote) && $voteRecordCheckMetin2Vote!="-"): ?>
              <div class="text-center">
                <h3><?=langWrite('bugunOyKullandiniz')?></h3>
              </div>
            <?php endif; ?>
            <br>
            <?php if (!empty($voteRecords) && $voteRecords!="-"): ?>
              <table class="ep-list table table-hover">
                <tbody>
                  <tr style="background: white;">
                    <th colspan="2" style="text-align:center"><?=langWrite('oyGecmisim')?></th>
                  </tr>
                  <?php foreach ($voteRecords as $key => $value): ?>
                    <tr>
                      <td style="text-align:center"><?=$value->voteType?></td>
                      <td style="text-align:center"><?=DetailTurkishDate($value->voteDate)?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            <?php else: ?>
              <div class="text-center">
                <h3><?=langWrite('henuzOyVermediniz')?></h3>
              </div>
            <?php endif; ?>
            <div class="btn_wrapper"></div>
          </div>
        </div>
      </div>
      <div id="overlayMask"></div>
    </div>
  </div>
</body>
</html>
