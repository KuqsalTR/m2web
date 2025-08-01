<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<?php if ($membershipAgreement): ?>
  <div id="sozlesme" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2><?=langWrite('lang84')?></h2>
      <p><?=htmlspecialchars_decode($membershipAgreement->pageContent)?></p>
    </div>
  </div>
<?php endif; ?>
<?php if ($links->discordWidget!=""): ?>
  <a class="discord-widget active" href="<?=$links->discord?>" title="Discord Adresine Giriş Yap">
    <img src="https://vizyon2.com/discord7.png">
  </a>
<?php endif; ?>
<div class="footer-wrapper">
  <div id="footer">
    <div class="social-links">
      <a href="<?=$links->facebook?>" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
        </svg>
      </a>
      <a href="<?=$links->instagram?>" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <rect x="4" y="4" width="16" height="16" rx="4"></rect>
          <circle cx="12" cy="12" r="3"></circle>
          <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
        </svg>
      </a>
      <a href="<?=$links->discord?>" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-discord" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <circle cx="9" cy="12" r="1"></circle>
          <circle cx="15" cy="12" r="1"></circle>
          <path d="M7.5 7.5c3.5 -1 5.5 -1 9 0"></path>
          <path d="M7 16.5c3.5 1 6.5 1 10 0"></path>
          <path d="M15.5 17c0 1 1.5 3 2 3c1.5 0 2.833 -1.667 3.5 -3c.667 -1.667 .5 -5.833 -1.5 -11.5c-1.457 -1.015 -3 -1.34 -4.5 -1.5l-1 2.5"></path>
          <path d="M8.5 17c0 1 -1.356 3 -1.832 3c-1.429 0 -2.698 -1.667 -3.333 -3c-.635 -1.667 -.476 -5.833 1.428 -11.5c1.388 -1.015 2.782 -1.34 4.237 -1.5l1 2.5"></path>
        </svg>
      </a>
    </div>
    <ul>
      <li class="first" style="padding-top:7px;">
        <?=$settings->settingWebFooterText?>
      </li>
    </ul>
  </div>
</div>
<script src="<?=base_url('assets/ThemeTwenty/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/ThemeTwenty/js/tether.min.js')?>"></script>
<script src="<?=base_url('assets/ThemeTwenty/js/bootstrap.min.js')?>"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="<?=base_url()?>assets/js/mask.js"></script>
<script src="<?=base_url('assets/js/fancybox.js')?>"></script>
<script src="<?=base_url('assets/js/ajax.js')?>"></script>
<script src="<?=base_url('assets/js/main.js')?>"></script>
<script type="text/javascript">
var mmoCSS = ' body {margin:0; padding:0;} div.openX_interstitial div.openX_int_closeButton a { text-indent:-4000px; float:right; height:23px; width:23px; display:block; background:transparent url(//gf2.geo.gfsrv.net/cdn14/7618d1159940178a2e53a8be22710a.png) repeat-x; } #mmonetbar { background:transparent url(//gf2.geo.gfsrv.net/cdnd2/1827413436ef920e672f084c7d75c3.png) repeat-x; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; height:32px; left:0; padding:0; position:absolute; text-align:center; top:0; width:100%; z-index:3000; } #mmonetbar #mmoContent { height:32px; margin:0 auto; width:1024px; position: relative; } #mmonetbar .mmosmallbar {width:585px !important;} #mmonetbar .mmosmallbar div.mmoBoxMiddle { width: 290px; } #mmonetbar .mmonewsout {width:800px !important;} #mmonetbar .mmouseronlineout {width:768px !important;} #mmonetbar .mmolangout {width:380px !important;} #mmonetbar .mmolangout .mmoGame { width: 265px; } #mmonetbar #mmoContent.mmoingame { width: 533px; } #mmonetbar #mmoContent.mmoingame .mmoGame { width: auto; } #mmonetbar a { color:#666; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; outline: none; text-decoration:none; white-space:nowrap; } #mmonetbar select { background-color:#611200 !important; border:1px solid #000 !important; color:#d0b88c !important; font:normal 11px Verdana, Arial, Helvetica, sans-serif; height:18px; margin-top:3px; width:100px; } #mmonetbar .mmoGames select {width:80px;} #mmonetbar option { background-color:#611200 !important; color:#d0b88c !important; } #mmonetbar option:hover { background-color:#7a1801 !important; } #mmonetbar select#mmoCountry {width:120px;} #mmonetbar .mmoSelectbox { background-color:#611200; float:left; margin:3px 0 0 3px; float: right; position:relative; } * html #mmonetbar .mmoSelectbox {position:static;} *+html #mmonetbar .mmoSelectbox {position:static;} #mmonetbar #mmoOneGame {cursor:default; height:14px; margin-top:3px; padding-left:5px; width:80px;} #mmonetbar .label {float:left; font-weight:bold; margin-right:4px; overflow:hidden !important;} #mmonetbar #mmoUsers .label {font-size:10px;} #mmonetbar .mmoBoxLeft, #mmonetbar .mmoBoxRight { background:transparent url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat -109px -4px; float:left; width:5px; height:24px; } #mmonetbar .mmoBoxRight {background-position:-126px -4px;} #mmonetbar .mmoBoxMiddle { background:transparent url(//gf2.geo.gfsrv.net/cdnd2/1827413436ef920e672f084c7d75c3.png) repeat-x 0 -36px; color:#d0b88c !important; float:left; height:24px; line-height:22px; text-align:left; white-space:nowrap; position: relative; z-index: 10000; } #mmonetbar #mmoGames, #mmonetbar #mmoLangs {margin:0px 4px 0 0;} #mmonetbar #mmoNews, #mmonetbar #mmoUsers, #mmonetbar #mmoGame, #mmonetbar .nojsGame {margin:4px 4px 0 140px;} #mmonetbar #mmoLogo { background:transparent url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat top left; float:left; display:block; height:32px; width:108px; text-indent: -9999px; position: relative; z-index: 1 } #mmonetbar #mmoNews {float:left; width:252px;} #mmonetbar #mmoNews #mmoNewsContent {text-align:left; width:200px;} #mmonetbar #mmoNews #mmoNewsticker {overflow:hidden; width:240px;} #mmonetbar #mmoNews #mmoNewsticker ul { margin: 0; padding: 0; list-style: none; } #mmonetbar #mmoNews #mmoNewsticker ul li { font:normal 11px/22px Tahoma, Arial, Helvetica, sans-serif !important; color:#d0b88c !important; padding: 0; margin: 0; background: none; display: none; } #mmonetbar #mmoNews #mmoNewsticker ul li.mmoTickShow { display: block; } #mmonetbar #mmoNews #mmoNewsticker ul li a img {border:0;} #mmonetbar #mmoNews #mmoNewsticker ul li a {color:#d0b88c !important;display:block;height:24px;line-height:23px;} #mmonetbar #mmoNews #mmoNewsticker ul li a:hover {text-decoration:underline;} #mmonetbar #mmoUsers {float:left; width:178px;} #mmonetbar #mmoUsers .mmoBoxLeft {width:17px;} #mmonetbar #mmoUsers .mmoBoxMiddle {padding-left:3px; width:150px;} #mmonetbar .mmoGame {display:none; float:left; width:320px;} #mmonetbar .mmoGame #mmoGames {float:left; width:206px;} #mmonetbar .mmoGame #mmoLangs {float:left; margin:0; width:290px;} #mmonetbar .mmoGame label { color:#d0b88c !important; float:left; font-weight:400 !important; line-height:22px; margin:0px; text-align:right !important; width:144px; font-size: 11px !important; } #mmonetbar .nojsGame {display:block; width:470px;} #mmonetbar .nojsGame .mmoBoxMiddle {width:450px;} #mmonetbar .nojsGame .mmoSelectbox {margin:0px 0 0 3px;} *+html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} * html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} #mmonetbar .nojsGame .mmoGameBtn { background:transparent url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat -162px -7px; border:none; cursor:pointer; float:left; height:18px; margin:3px 0 0 7px; padding:0; width:18px; } #mmonetbar .mmoSelectArea { border:1px solid #000; color:#d0b88c !important; display:block !important; float:none; font-weight:400 !important; font-size:11px; height:16px; line-height:13px; -moz-box-sizing: content-box; overflow:hidden !important; width:90px; } #mmonetbar #mmoLangSelect .mmoSelectArea {width:129px;} #mmonetbar #mmoLangSelect .mmoOptionsDivVisible {min-width:129px;} #mmonetbar .mmoSelectArea .mmoSelectButton { background: url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat -141px -8px; float:right; width:17px; height:16px; } #mmonetbar .mmoSelectText {cursor:pointer; float:left; overflow:hidden; padding:1px 2px; width:68px;} #mmonetbar #mmoLangSelect .mmoSelectText {width:107px;} #mmonetbar #mmoOneLang {cursor:default; height:14px;} #mmonetbar div.mmoOneLang { background: none; } #mmonetbar div.mmoOneLang #mmoOneLang { border: none; padding: 2px 3px; } #mmonetbar .mmoOptionsDivInvisible, #mmonetbar .mmoOptionsDivVisible { background-color: #611200 !important; border: 1px solid #000; position: absolute; min-width:90px; z-index: 3100; } * html #mmonetbar .mmoOptionsDivVisible .highlight {background-color:#7a1801 !important} #mmonetbar .mmoOptionsDivInvisible {display: none;} #mmonetbar .mmoOptionsDivVisible ul { border:0; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; list-style: none; margin:0; padding:2px; overflow:auto; overflow-x:hidden; } #mmonetbar #mmoLangs .mmoOptionsDivVisible ul {min-width:125px;} #mmonetbar .mmoOptionsDivVisible ul li { background-color: #611200; height:14px; padding:2px 0; } #mmonetbar .mmoOptionsDivVisible a { color: #d0b88c !important; display: block; font-weight:400 !important; height:16px !important; min-width:80px; text-decoration: none; white-space:nowrap; width:100%; } #mmonetbar #mmoContent .mmoLangList a {min-width:102px;} #mmonetbar .mmoOptionsDivVisible li:hover {background-color: #7a1801;} #mmonetbar .mmoOptionsDivVisible li a:hover {color: #d0b88c !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive {background-color: #7a1801 !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive a {color: #d0b88c !important;} #mmonetbar .mmoOptionsDivVisible ul.mmoListHeight {height:240px} #mmonetbar .mmoOptionsDivVisible ul.mmoLangList.mmoListHeight li {padding-right:15px !important; width:100%;} #mmonetbar #mmoGameSelect ul.mmoListHeight a {min-width:85px;} #mmonetbar #mmoLangSelect ul.mmoListHeight a {min-width:105px;} #mmonetbar #mmoFocus {position:absolute;left:-2000px;top:-2000px;} #mmonetbar #mmoLangs .mmoSelectText span, #mmonetbar #mmoLangs .mmoflag { background: transparent url(//gf3.geo.gfsrv.net/cdn28/0fa15cfe12b31b8e79f9598f106bfd.png) no-repeat; height:14px !important; padding-left:23px; } .mmo_AE {background-position:left 0px !important} .mmo_AR {background-position:left -14px !important} .mmo_BE {background-position:left -28px !important} .mmo_BG {background-position:left -42px !important} .mmo_BR {background-position:left -56px !important} .mmo_BY {background-position:left -70px !important} .mmo_CA {background-position:left -84px !important} .mmo_CH {background-position:left -98px !important} .mmo_CL {background-position:left -112px !important} .mmo_CN {background-position:left -126px !important} .mmo_CO {background-position:left -140px !important} .mmo_CZ {background-position:left -154px !important} .mmo_DE {background-position:left -168px !important} .mmo_DK {background-position:left -182px !important} .mmo_EE {background-position:left -196px !important} .mmo_EG {background-position:left -210px !important} .mmo_EN {background-position:left -224px !important} .mmo_ES {background-position:left -238px !important} .mmo_EU {background-position:left -252px !important} .mmo_FI {background-position:left -266px !important} .mmo_FR {background-position:left -280px !important} .mmo_GR {background-position:left -294px !important} .mmo_HK {background-position:left -308px !important} .mmo_HR {background-position:left -322px !important} .mmo_HU {background-position:left -336px !important} .mmo_ID {background-position:left -350px !important} .mmo_IL {background-position:left -364px !important} .mmo_IN {background-position:left -378px !important} .mmo_INTL {background-position:left -392px !important} .mmo_IR {background-position:left -406px !important} .mmo_IT {background-position:left -420px !important} .mmo_JP {background-position:left -434px !important} .mmo_KE {background-position:left -448px !important} .mmo_KR {background-position:left -462px !important} .mmo_LT {background-position:left -476px !important} .mmo_LV {background-position:left -490px !important} .mmo_ME {background-position:left -504px !important} .mmo_MK {background-position:left -518px !important} .mmo_MX {background-position:left -532px !important} .mmo_NL {background-position:left -546px !important} .mmo_NO {background-position:left -560px !important} .mmo_PE {background-position:left -574px !important} .mmo_PH {background-position:left -588px !important} .mmo_PK {background-position:left -602px !important} .mmo_PL {background-position:left -616px !important} .mmo_PT {background-position:left -630px !important} .mmo_RO {background-position:left -644px !important} .mmo_RS {background-position:left -658px !important} .mmo_RU {background-position:left -672px !important} .mmo_SE {background-position:left -686px !important} .mmo_SI {background-position:left -700px !important} .mmo_SK {background-position:left -714px !important} .mmo_TH {background-position:left -728px !important} .mmo_TR {background-position:left -742px !important} .mmo_TW {background-position:left -756px !important} .mmo_UA {background-position:left -770px !important} .mmo_UK {background-position:left -784px !important} .mmo_US {background-position:left -798px !important} .mmo_VE {background-position:left -812px !important} .mmo_VN {background-position:left -826px !important} .mmo_YU {background-position:left -840px !important} .mmo_ZA {background-position:left -854px !important} .mmo_WW {background-position:left -392px !important} .mmo_AU {background-position:left -868px !important} div#mmonetbar a:active { top: 0; } div#mmoGamesOverviewPanel { width: 582px; position: absolute; top: 0; right: 0; font: 12px Arial, sans-serif; } div#mmoGamesOverviewPanel h4, div#mmoGamesOverviewPanel h5 { margin: 0; font-size: 12px; font-weight: bold; text-align: left; } div#mmoGamesOverviewPanel a { text-decoration: none; } div#mmoGamesOverviewPanel a img { border: none; } div#mmoGamesOverviewToggle { width: 168px; padding: 4px 0 4px 414px; } div#mmoGamesOverviewToggle h4 { height: 18px; position: relative; background: url(//gf2.geo.gfsrv.net/cdnd2/1827413436ef920e672f084c7d75c3.png) repeat-x 0 -36px; top: 0px; padding: 3px 20px; -moz-box-sizing: content-box; } div#mmoGamesOverviewToggle h4 a { display: block; width: 116px; height: 16px; line-height: 14px; text-align: left; font-weight: normal; outline: none; color: #d0b88c !important; font-size: 11px !important; position: relative; border: 1px solid #000; padding: 0 0 0 10px; background: #611200; -moz-box-sizing: content-box; } div#mmoGamesOverviewToggle h4 a.gameCountZero { cursor: default; text-align: center; padding: 0; width: 126px; } div#mmoGamesOverviewToggle h4 a span.mmoNbPseudoSelect_icon { display: block; position: absolute; top: 0; right: 0; width: 17px; height: 16px; background: url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat -141px -8px; } span.iconTriangle { display: block; position: absolute; top: 5px; right: 10px; width: 0px; border: 5px solid transparent; border-bottom-color: #d0b88c; } div#mmoGamesOverviewToggle h4 a.toggleHidden { } div#mmoGamesOverviewToggle h4 a.toggleHidden span.iconTriangle { top: 10px; border: 5px solid transparent; border-top-color: #d0b88c; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge { display: block; width: 5px; height: 24px; background: url(//gf3.geo.gfsrv.net/cdn8a/cd9ddb0a812d2a0e7ebcd5a5aaf754.png) no-repeat -109px -4px; position: absolute; top: 0; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge_left { left: 0; } div#mmoGamesOverviewToggle h4 span.mmoNbBoxEdge_right { right: 0; background-position: -126px -4px; } div#mmoGamesOverviewLists { clear: both; background: #611200; width: 580px; border: 1px solid #000; float: left; position: relative; top: 0px; -moz-box-sizing: content-box; } div#mmoGamesOverviewLists h5 { clear: both; width: 544px; margin: 0; padding: 0 18px; height: 27px; line-height: 27px; color: #d0b88c; border-bottom: 1px solid #000; background: url(//gf2.geo.gfsrv.net/cdnd2/1827413436ef920e672f084c7d75c3.png) repeat-x 0 -3px; font-family: inherit; -moz-box-sizing: content-box; } #mmoGamesOverviewLists #mmoGamesOverview_featured li { width: auto; } #mmoGamesOverviewLists #mmoGamesOverview_featured span { display: block; width: 560px; height: 180px; margin: 0; } #mmoGamesOverviewLists #mmoGamesOverview_featured span.gameName { display: none; } #mmoGamesOverview_featured img { display: block; } div#mmoGamesOverviewLists ul { margin: 0; padding: 5px 5px; list-style: none; width: 570px; float: left; text-align: left; -moz-box-sizing: content-box; } div#mmoGamesOverviewLists ul li { margin: 0; padding: 0; list-style: none; width: 190px; float: left; background: none; } div#mmoGamesOverviewLists ul li a { display: block; padding: 5px; font-weight: bold; line-height: 1; color: #d0b88c !important; font-size: 11px !important; } div#mmoGamesOverviewLists ul li a:focus, div#mmoGamesOverviewLists ul li a:hover { background-color: #7a1801; } div#mmoGamesOverviewLists ul li a span.gameImgTarget { display: block; width: 180px; height: 90px; background: none; margin: 0 0 4px 0; } div#mmoGamesOverviewLists ul li a span img { display: block; } div#mmoGamesOverviewLists div#mmoGamesOverviewCountry { width: 20px; height: 14px; position: absolute; top: 6px; right: 12px; background-image: url(//gf3.geo.gfsrv.net/cdn28/0fa15cfe12b31b8e79f9598f106bfd.png); background-repeat: no-repeat; } #mmonetbar div.nojsGame { width: 432px !important; } #mmonetbar div.nojsGame div.mmoBoxMiddle { width: 422px; } #mmonetbar div.nojsGame label { width: 105px; } #pagefoldtarget .nbPF { position: absolute; top: 0; z-index: 999999; text-indent: -9999px; width: 125px; height: 120px; } #pagefoldtarget .nbPFLeft { left: 0px; } #pagefoldtarget .nbPF.nbPFRight { right: 0px; background-position: right 0px } #pagefoldtarget .nbPFDark.nbPFRight { background-image: url(//gf1.geo.gfsrv.net/cdn37/45cd40084fbd85deb0bbd141a182d4.png); _background-image: url(//gf3.geo.gfsrv.net/cdn21/2ac8c866dd437d374bddae90352182.gif); } #pagefoldtarget .nbPFDark.nbPFLeft { background-image: url(//gf2.geo.gfsrv.net/cdn7a/ac8b49aea9f6640b9c2aa05826cf7e.png); _background-image: url(//gf3.geo.gfsrv.net/cdnb1/0d6041fc3b795c456c06798d691c0a.gif); } #pagefoldtarget .nbPFLight.nbPFRight { background-image: url(//gf3.geo.gfsrv.net/cdn27/6af7f589ac3e8285f4dbe8d6016068.png); _background-image: url(//gf2.geo.gfsrv.net/cdn14/c6c431101736ce8fe2fc7066deda22.gif); } #pagefoldtarget .nbPFLight.nbPFLeft { background: url(//gf2.geo.gfsrv.net/cdn74/8b1d6e7fe60aa56ad56a9ef6ca670d.png) no-repeat; _background-image: url(//gf2.geo.gfsrv.net/cdn73/0f237da9ad7d278f76da13604d9626.gif); } #pagefoldtarget .nbPF a{ text-indent: -9999px; display: block; width: 110px; height: 95px; } #pagefoldtarget .nbPF.nbPFRight a{ float:right; } #pagefoldtarget .nbPF.nbPFHover a{ width:358px; height: 320px; } #pagefoldtarget .nbPF.nbPFHover { background-position: left -129px !important; width:400px; height: 400px; } #pagefoldtarget .nbPF.nbPFRight.nbPFHover { background-position: right -129px !important; } ';
  var mmostyle = document.createElement('style');
  if (navigator.appName == "Microsoft Internet Explorer") {
    mmostyle.setAttribute("type", "text/css");
    mmostyle.styleSheet.cssText = mmoCSS;
  } else {
    var mmostyleTxt = document.createTextNode(mmoCSS);
    mmostyle.type = 'text/css';
    mmostyle.appendChild(mmostyleTxt);
  }
  document.getElementsByTagName('head')[0].appendChild(mmostyle);

  var mmoActive_select = null;

  function mmoInitSelect() {
    if (!document.getElementById) return false;
    document.getElementById('mmonetbar').style.display = 'block';
    document.getElementById('mmoGame').style.display = 'block';
    document.getElementById('mmoFocus').onkeyup = function(e) {
      mmo_selid = mmoActive_select.id.replace('mmoOptionsDiv', '');
      var e = e || window.event;
      if (e.keyCode) var thecode = e.keyCode;
      else if (e.which) var thecode = e.which;
      mmoSelectMe(mmo_selid, thecode);
    }
  }

  function mmoSetActive(selid, itemid) {
    mmoActive_select = null;
    var mmolist = document.getElementById('mmoList' + selid);
    var mmoitems = mmolist.getElementsByTagName('li');
    mmoActive_select = document.getElementById('mmoOptionsDiv' + selid);;
    mmoActive_select.selid = selid;
    if (itemid != undefined) {
      var _a = mmoitems[itemid].getElementsByTagName('a');
      var textVar = document.getElementById("mmoMySelectText" + selid);
      textVar.innerHTML = _a[0].innerHTML;
      if (selid == 1) textVar.className = _a[0].className;
      mmoitems[itemid].className = 'mmoActive';
    }
    for (var i = 0; i < mmoitems.length; i++) {
      if (mmoitems[i].className == 'mmoActive') {
        mmoActive_select.activeit = mmoitems[i];
        mmoActive_select.activeid = i;
        mmoActive_select.url = (mmoitems[i].getElementsByTagName('a')) ? mmoitems[i].getElementsByTagName('a')[0].href : null;
      }
    }
    return mmoActive_select;
  }

  function mmoShowOptions(g) {
    var _elem = document.getElementById("mmoOptionsDiv" + g);
    if ((mmoActive_select) && (mmoActive_select != _elem)) {
      mmoActive_select.className = "mmoOptionsDivInvisible";
      document.getElementById('mmonetbar').focus();
    }
    if (_elem.className == "mmoOptionsDivInvisible") {
      document.getElementById('mmoFocus').focus();
      mmoActive_select = mmoSetActive(g);
      if (document.documentElement) {
        document.documentElement.onclick = mmoHideOptions;
      } else {
        window.onclick = mmoHideOptions;
      }
      _elem.className = "mmoOptionsDivVisible";
    } else if (_elem.className == "mmoOptionsDivVisible") {
      _elem.className = "mmoOptionsDivInvisible";
      document.getElementById('mmonetbar').focus();
    }
  }

  function mmoHideOptions(e) {
    if (mmoActive_select) {
      if (!e) e = window.event;
      var _target = (e.target || e.srcElement);
      if ((_target.id.indexOf('mmoOptionsDiv') != -1)) return false;
    } else {
      if (document.documentElement) document.documentElement.onclick = function() {};
      else window.onclick = null;
    }
  }
  mmoInitSelect();
</script>
</script>
<script type="text/javascript">
var modal = document.getElementById("sozlesme");
var btn = document.getElementById("sozlesmeBtn");
var span = document.getElementsByClassName("close")[0];
if (btn) {
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
</script>
</body>
</html>
