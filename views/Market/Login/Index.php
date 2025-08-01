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
  <style media="screen">
  input{
    width: 97%
  }
  </style>
</head>
<body class="ingame metin2 tr" data-url="<?=base_url()?>">
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
            <h2><?=langWrite('lang153')?></h2>
            <br>
            <form id="login" class="form-template">
              <label><?=langWrite('lang66')?></label>
              <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
              <label><?=langWrite('lang79')?></label>
              <input type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
              <?php if (pinSystem['status']==1): ?>
                <label><?=langWrite('lang70')?></label>
                <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
              <?php endif; ?>
              <div class="form-group" style="display: flex;justify-content:center">
                <div class="g-recaptcha" data-sitekey="<?=googleKey?>"></div>
              </div>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <br>
              <center>
                <button class="btn-default " type="submit"><?=langWrite('lang81')?></button>
              </center>
              <br>
              <p class="l15"><?=langWrite('lang154')?><a href="<?=base_url()?>Register"><?=langWrite('lang155')?></a>.</p>
              <p class="l15"><?=langWrite('lang97')?><a href="<?=base_url()?>Forget/Password"><?=langWrite('lang98')?></a></p>
              <?php if (pinSystem['status']==1): ?>
                <p class="l15"><?=langWrite('lang99')?><a href="<?=base_url()?>Forget/Pin"><?=langWrite('lang100')?></a></p>
              <?php endif; ?>
            </form>
            <div class="btn_wrapper">
            </div>
          </div>
        </div>
      </div>
      <div id="overlayMask"></div>
    </div>
  </div>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    const url = $("body").data("url");
    $('#login').on('submit', function(e){
      var data = new FormData(this);
      $.ajax({
        type: "post",
        url: url+'Login/Login',
        contentType: false,
        processData: false,
        data: data,
        success: function(response){
          if (response.error) {
            Swal.fire({
              title: "Hata!",
              html: response.error,
              type: "error",
            });
          }else {
            Swal.fire({
              title: "Başarılı!",
              html: response.success,
              type: "success",
            })
            .then(function() {
              window.location.href = url+"Market/Index";
            });
            $('[name="account_name"]').val("");
            $('[name="password"]').val("");
            $('[name="pinPassword"]').val("");
          }
          grecaptcha.reset();
        },
        dataType: "json"
      });
      e.preventDefault();
    });
  });
  </script>
</body>
</html>
