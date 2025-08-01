<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <script type="text/javascript">var dir = zs.data.dir || {};</script>
  <script type="text/javascript" src="<?=base_url('assets/market/js/wheel-1.js')?>"></script>
  <link rel="stylesheet" id="gameStyle" href="<?=base_url('assets/market/css/wheel.min.css')?>" type="text/css">
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
      <ul class="wheel-menu" style="z-index:99999999999">
        <li>
          <a id="wheel-prices" class="btn-navitem">
            <span><?=langWrite('olasiOduller')?></span>
          </a>
        </li>
      </ul>
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
            <div id="teaser1" class="teaser wheel-items">
              <?php $say = 1; ?>
              <?php foreach ($wheelItems as $key => $value): ?>
                <?php if ($value->itemLevel==1): ?>
                  <img class="wheel-item-<?=$say++?> teaser" src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" alt="<?=$value->itemName?>" >
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <?php if ($wheel->wheelLevel>1): ?>
              <?php $say = 1; ?>
              <div id="teaser2" class="teaser wheel-items">
                <?php foreach ($wheelItems as $key => $value): ?>
                  <?php if ($value->itemLevel==2): ?>
                    <img class="wheel-item-<?=$say++?> teaser" src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" alt="<?=$value->itemName?>">
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <?php if ($wheel->wheelLevel>2): ?>
              <?php $say = 1; ?>
              <div id="teaser3" class="teaser wheel-items">
                <?php foreach ($wheelItems as $key => $value): ?>
                  <?php if ($value->itemLevel==3): ?>
                    <img class="wheel-item-<?=$say++?> teaser" src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" alt="<?=$value->itemName?>">
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <?php if ($user->$marketEp>=$wheelEP): ?>
              <div id="wheel-spinner">
                <div class="wheel-btn _wl-sprite ">
                  <a href="<?=base_url('Market/WheelTurn/'.$wheel->wheelId)?>" class="play">
                    <div id="spinButton">
                      <table>
                        <tbody>
                          <tr>
                            <td>
                              <?=langWrite('cevir')?>!<br>(<?=$wheelEP?>&nbsp;<img class="ttip" src="<?=base_url('assets/market/images/coins.png')?>">)
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </a>
                </div>
              </div>
            <?php else: ?>
              <div id="wheel-info" class="span2 small" style="width:100%;top:150px;bottom:0px;height:45px;z-index:9999999999999">
                <p style="text-align:center!important;font-weight:bold">
                  <?=langWrite('carkiCevirebilmekIcinGrekenEp')?> <img class="ttip" src="<?=base_url('assets/market/images/coins.png')?>"> <?=$wheelEP?>
                </p>
              </div>
              <a href="<?=base_url('Market/Buy')?>">
                <div id="again-play-btn" class="again-play-btn" style="display: block;">  <?=langWrite('lang341')?></div>
              </a>
              <div id="again-play-bg" class="again-play-bg" style="display:block;left:-124px"></div>
            <?php endif; ?>
          </div>
        <?php else: ?>
          <div id="wheel-info" class="span2 small" style="width:100%;top:200px;bottom:0px;height:45px;">
            <p style="text-align:center!important;font-weight:bold">
              <?=langWrite('carkCalismaNot')?>
            </p>
          </div>
        <?php endif; ?>
      </div>
      <?php if (count($wheelItems)>=16): ?>
        <div id="wheel-info" class="span2 small">
          <p style="text-align:center"><?=langWrite('carkiyalnizca')?><?=$wheelEP?> <img class="ttip" src="<?=base_url('assets/market/images/coins.png')?>"> <?=langWrite('karsiligindaCevir')?></p>
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
      <?php endif; ?>
      <div id="fancybox-help" class="fancyboxContentContainer" style="display: none;">
        <div id="wheel-help" class="contrast-box">
          <h2><i class="icon-info"></i>&nbsp;<?=langWrite('yardimVeBilgi')?></h2>
          <div class="grey-box ">
            <h3><?=langWrite('carkNedir')?></h3>
            <p><?=langWrite('carkBilgi')?></p>
          </div>
        </div>
      </div>
      <div id="wheel-special-stage" class="wheel-special-stage-articles mg-possible-rewards rewards-panel" style="display: none;z-index:999999999999">
        <i title="Kapat" class="icon-close close-panel" onclick="hideRewardsPanel()"></i>
        <div class="contrast-box tabbable">
          <h2 class="reward-title"><?=langWrite('tumOduller')?></h2>
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="active">
              <a class="heading-tab" data-toggle="tab" href="#special-rewards">
                <?=langWrite('olasiOduller')?>
              </a>
            </li>
          </ul>
        </div>
        <style media="screen">

        table.wheel_table tr {
          background: none;
        }

        table.wheel_table tr td {
          background: url('<?=base_url('assets/market/images/b18.jpg')?>') left center;
          background-position-x: -4px;
          border: 1px solid #9c9371;
          color: #7b1818;
          font-weight: bold;
        }
        </style>
        <div class="tab-content">
          <div class="tab-pane active scrollable_container mCustomScrollbar" id="special-rewards">
            <div class="contrast-box" id="reward-1">
              <div class="grey-box">
                <h3 class="title-reward">1. <?=langWrite('setOdulleri')?></h3>
                <?php if (!empty($wheelItems)): ?>
                  <div class="card" style="display:flex;flex-wrap:wrap;justify-content:space-around">
                    <div class="grey-box">
                      <table class="wheel_table">
                        <tbody>
                          <?php $counter = 0; ?>
                          <?php foreach ($wheelItems as $key => $value): ?>
                            <?php if ($value->itemLevel==1): ?>
                              <?php if ($counter%3==0): ?>
                                <tr class="tr-odd">
                                <?php endif; ?>
                                <td width="40px;" style="box-shadow: inset 0px 0px 90px rgba(64, 17, 17, 0.68);border-right: none;border-bottom: none;">
                                  <center><img src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" style="width:32px;height:32px;"></center>
                                </td>
                                <td width="186,667px;"><?=$value->itemName?> <small>x<?=$value->itemCount?></small></td>
                                <?php if (($counter+1)%3==0): ?>
                                </tr>
                              <?php endif; ?>
                              <?php $counter++; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if ($wheel->wheelLevel>1): ?>
              <div class="contrast-box" id="reward-2">
                <div class="grey-box">
                  <h3 class="title-reward">2. <?=langWrite('setOdulleri')?></h3>
                  <?php if (!empty($wheelItems)): ?>
                    <div class="card" style="display:flex;flex-wrap:wrap;justify-content:space-around">
                      <div class="grey-box">
                        <table class="wheel_table">
                          <tbody>
                            <?php $counter = 0; ?>
                            <?php foreach ($wheelItems as $key => $value): ?>
                              <?php if ($value->itemLevel==2): ?>
                                <?php if ($counter%3==0): ?>
                                  <tr class="tr-odd">
                                  <?php endif; ?>
                                  <td width="40px;" style="box-shadow: inset 0px 0px 90px rgba(64, 17, 17, 0.68);border-right: none;border-bottom: none;">
                                    <center><img src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" style="width:32px;height:32px;"></center>
                                  </td>
                                  <td width="186,667px;"><?=$value->itemName?> <small>x<?=$value->itemCount?></small></td>
                                  <?php if (($counter+1)%3==0): ?>
                                  </tr>
                                <?php endif; ?>
                                <?php $counter++; ?>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if ($wheel->wheelLevel>2): ?>
              <div class="contrast-box" id="reward-3">
                <div class="grey-box">
                  <h3 class="title-reward">3. <?=langWrite('setOdulleri')?></h3>
                  <?php if (!empty($wheelItems)): ?>
                    <div class="card" style="display:flex;flex-wrap:wrap;justify-content:space-around">
                      <div class="grey-box">
                        <table class="wheel_table">
                          <tbody>
                            <?php $counter = 0; ?>
                            <?php foreach ($wheelItems as $key => $value): ?>
                              <?php if ($value->itemLevel==3): ?>
                                <?php if ($counter%3==0): ?>
                                  <tr class="tr-odd">
                                  <?php endif; ?>
                                  <td width="40px;" style="box-shadow: inset 0px 0px 90px rgba(64, 17, 17, 0.68);border-right: none;border-bottom: none;">
                                    <center><img src="<?=base_url('assets/market/images/icon/'.($value->itemIcon!=""?$value->itemIcon:$value->icon))?>" style="width:32px;height:32px;"></center>
                                  </td>
                                  <td width="186,667px;"><?=$value->itemName?> <small>x<?=$value->itemCount?></small></td>
                                  <?php if (($counter+1)%3==0): ?>
                                  </tr>
                                <?php endif; ?>
                                <?php $counter++; ?>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
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
