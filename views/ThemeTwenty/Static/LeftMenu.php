<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<div class="col-1">
  <div class="boxes-top">&nbsp;</div>
  <div class="modul-box">
    <div class="modul-box-bg">
      <div class="modul-box-bg-bottom">
        <ul class="main-nav">
          <li><a href="<?=base_url()?>"><?=langWrite('lang1')?></a></li>
          <li><a href="<?=base_url('Download')?>"><?=langWrite('lang109')?></a></li>
          <li><a href="<?=base_url('Register')?>"><?=langWrite('lang9')?></a></li>
          <li><a href="<?=base_url('Ranking/Player')?>"><?=langWrite('lang12')?></a></li>
          <li><a href="<?=base_url('Ranking/Guild')?>"><?=langWrite('lang13')?></a></li>
          <li><a href="<?=base_url('Support')?>"><?=langWrite('lang14')?></a></li>
          <?php if ($links->wiki!=""): ?>
            <li><a href="<?=$links->wiki?>"><?=langWrite('lang15')?></a></li>
          <?php endif; ?>
          <?php if ($links->gamePromotion!=""): ?>
            <li><a href="<?=$links->gamePromotion?>"><?=langWrite('lang16')?></a></li>
          <?php endif; ?>
          <?php if ($links->facebook!=""): ?>
            <li><a href="<?=$links->facebook?>">Facebook</a></li>
          <?php endif; ?>
          <?php if ($links->facebookGroup!=""): ?>
            <li><a href="<?=$links->facebookGroup?>">Facebook Grup</a></li>
          <?php endif; ?>
          <?php if ($links->instagram!=""): ?>
            <li><a href="<?=$links->instagram?>">İnstagram</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="boxes-middle">&nbsp;</div>
  <div class="modul-box modul-box-2">
    <div class="modul-box-bg">
      <div class="modul-box-bg-bottom">
        <h3><?=langWrite('lang520')?></h3>
        <div class="form-score" style="width: 138px;">
          <div id="highscore-player">
            <ul>
              <li><center><a class="first"><?=langWrite('lang7')?></a></center></li>
              <li class="light"><center><strong><?=$countOnline?></strong></center></li>
            </ul>
            <?php if (kayitSayisi['durum']==1): ?>
              <ul>
                <li><center><a class="first"><?=langWrite('lang437')?>:</a></center></li>
                <li class="light"><center><strong><?=$registerCount?></strong></center></li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if ($eventCalendar): ?>
    <div class="boxes-middle">&nbsp;</div>
    <div class="modul-box modul-box-2">
      <div class="modul-box-bg">
        <div class="modul-box-bg-bottom">
          <h3><?=langWrite('lang39')?></h3>
          <div class="form-score" style="width: 138px;">
            <div id="highscore-player">
              <?php foreach ($eventCalendar as $key => $value): ?>
                <ul>
                  <li><center><a class="first"><?=$value->eventTitle?></a></center></li>
                  <li class="light"><center><strong><?=writeEventDay($value->eventDay).' - '.substr($value->eventStartTime,0,-3).'-'.substr($value->eventFinishTime,0,-3)?></strong></center></li>
                </ul>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class='boxes-bottom'></div>
</div>
