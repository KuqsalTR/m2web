<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <script type="text/javascript">var dir = zs.data.dir || {};</script>
  <script type="text/javascript" src="<?=base_url('assets/market/js/wheel-2.js')?>"></script>
  <style media="screen">
  ._pointer-sprite,
  #wheel-game #spinner-pointer {
    background: url('<?=base_url('assets/market/images/dondurgec2.png')?>') no-repeat;
    background-size: cover;
  }
  </style>
  <link rel="stylesheet" id="gameStyle" href="<?=base_url('assets/market/css/wheel.min.css')?>" type="text/css">
  <script>
  function buyFancyBox() {
    var videourl = '<?=base_url('Market/WheelResponse/'.$responseData)?>';
    $.fancybox.open({
      tpl: {closeBtn: '<button title="Kapat" class="fancybox-item fancybox-close btn-default" href="javascript:;"></button>'},
      href: videourl,
      type: 'ajax',
      autoDimensions: false,
      width: 340,
      height: "auto",
      overlayOpacity: 0.6,
      showCloseButton: true,
      enableEscapeButton: false,
      hideOnOverlayClick: false,
      hideOnContentClick: false,
      padding: 10,
      beforeShow: function () {
        initRoyalSlider(".carousell-reward", zs.module.small ? 0.52 : 0.46)
      }
    });
  }
  </script>
  <script type="text/javascript">var dir = zs.data.dir || {};</script>
  <div class="content clearfix" id="wt_refpoint">
    <div class="mg-breadcrumb-container row-fluid">
      <h2>
        <ul class="breadcrumb">
          <li><?=$wheel->wheelName?></li>
        </ul>
      </h2>
      <a class="wheel-help minigames-help ttip" href="javascript:void(0)"><i class="icon-book"></i><?=langWrite('yardimVeBilgi')?></a>
    </div>
    <div id="wheel-game" class="wheel lvl-1" style="background-image:url(<?=base_url('assets/market/images/wheel/'.$wheel->wheelBackground)?>)">
      <?php if ($wheel->wheelLevel>1): ?>
        <div id="wheel-stages" class="span2 scrollable_container mCustomScrollbar _mCS_1 mCS_no_scrollbar rendered full-size" style="bottom: -186px;">
          <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
            <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0; left: 0;" dir="ltr">
              <ul class="wheel-stages">
                <?php if ((writeSession('wheelLevel'))!=$wheel->wheelLevel): ?>
                  <li id="stage-<?=writeSession('wheelLevel')+1?>" class="lvl star-<?=writeSession('wheelLevel')+1?> ttip icon-lock-wheel">
                    <i class="before _wl-sprite"></i>
                    <span class="_wl-sprite"><?=writeSession('wheelLevel')+1?></span>
                    <i class="after _wl-sprite"></i>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=6?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=5?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=4?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=3?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=2?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite <?=writeSession('wheelKey')>=1?'stg-'.writeSession('wheelLevel'):false?>"></span>
                  </li>
                  <li id="stage-<?=writeSession('wheelLevel')?>" class="lvl star-<?=writeSession('wheelLevel')?> ttip current">
                    <i class="before _wl-sprite"></i>
                    <span class="_wl-sprite"><?=writeSession('wheelLevel')?></span>
                    <i class="after _wl-sprite"></i>
                  </li>
                <?php else: ?>
                  <li id="stage-<?=$wheel->wheelLevel?>" class="lvl star-<?=$wheel->wheelLevel?> ttip current">
                    <i class="before _wl-sprite"></i>
                    <span class="_wl-sprite"><?=$wheel->wheelLevel?></span>
                    <i class="after _wl-sprite"></i>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <li class="stg">
                    <span class="_wl-sprite stg-<?=$wheel->wheelLevel-1?>"></span>
                  </li>
                  <br><br>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div id="wheel-container" class="span8">
        <?php if (count($wheelItems)>=16): ?>
          <div id="wheel" class="_wl-sprite clockwise">
            <?php if ($wheel->wheelLevel>1 && writeSession('wheelLevel')!=$wheel->wheelLevel): ?>
              <div class="wheel-keys">
                <i id="key-3" class="key icon-key-wheel _wl-sprite"><i class="before"></i></i>
                <i id="key-7" class="key icon-key-wheel _wl-sprite"><i class="before"></i></i>
                <i id="key-11" class="key icon-key-wheel _wl-sprite"><i class="before"></i></i>
                <i id="key-15" class="key icon-key-wheel _wl-sprite"><i class="before"></i></i>
              </div>
            <?php endif; ?>
            <div class="wheel-ring _wl-sprite"></div>
            <div id="spinner-pointer" style="background-position: -872px 0px;">
              <div id="wheel-spinner" style="background-position: 0px 0px;">
                <div class="wheel-btn">
                  <a id="spinButton" class="play">
                    <table>
                      <tbody>
                        <tr>
                          <td><span class="pulse2"><?=langWrite('donuyor')?></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </a>
                </div>
              </div>
            </div>
            <div class="wheel-items">
              <script>
              spin(1, <?=33+$kazanilanItemKey?>, 10000);
              </script>
              <?php $say = 1; ?>
              <?php foreach ($wheelItems as $key => $value): ?>
                <img id="pos<?=$say?>" class="wheel-item-<?=$say++?> reward" src="<?=base_url('assets/market/images/icon/'.($value['itemIcon']!=""?$value['itemIcon']:$value['icon']))?>" alt="<?=$value['itemName']?>">
              <?php endforeach; ?>
            </div>
            <a href="<?=base_url('Market/Wheel/'.$wheel->wheelId)?>">
              <div id="again-play-btn" class="again-play-btn" style="display: none;"><?=langWrite('geriDon')?></div>
            </a>
            <div id="again-play-bg" class="again-play-bg" style="display:none;<?=$wheel->wheelLevel>1?'left:-268px':false?>"></div>
          </div>
        <?php endif; ?>
      </div>
      <div id="wheel-info" class="span2 small">
        <p style="text-align:center"><?=langWrite('carkDonuyorNot')?></p>
        <?php if (writeSession('wheelTime')): ?>
          <h5 style="text-align:center">1.kata dönüş sürei</h5>
          <div class="" style="background:#0000007a">
            <h2 id="time" style="text-align:center!important"><?=convertSeconds(writeSession('wheelTime')-time(),'lang465')?></h2>
            <script type="text/javascript">
            function startTimer(duration, display) {
              var timer = duration, minutes, seconds;
              setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                  timer = duration;
                }
              }, 1000);
            }
            window.onload = function () {
              var fiveMinutes = <?=writeSession('wheelTime')-time()?>,
              display = document.querySelector('#time');
              startTimer(fiveMinutes, display);
            };
            </script>
          </div>
        <?php endif; ?>
      </div>
      <div id="fancybox-help" class="fancyboxContentContainer" style="display: none;">
        <div id="wheel-help" class="contrast-box">
          <h2><i class="icon-info"></i>&nbsp;<?=langWrite('yardimVeBilgi')?></h2>
          <div class="grey-box ">
            <h3><?=langWrite('carkNedir')?></h3>
            <p><?=langWrite('carkBilgi')?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="overlayMask"></div>
</div>
</div>
</div>
<div id="overlayMask"></div>
</div>
</div>
</body>
</html>
