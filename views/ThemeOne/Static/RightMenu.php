<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<aside class="right-sidebar">
  <div class="dowload-button">
    <a href="<?=base_url('Download')?>"><?=langWrite('lang31')?></a>
  </div>
  <?php if ($links->wiki!=""): ?>
    <a href="<?=$links->wiki?>" class="hero-guides-block">
      <div class="block-info">
        <span><?=langWrite('lang32')?></span>
        <?=langWrite('lang33')?>
      </div>
    </a>
  <?php endif; ?>
  <?php if (ranking['status']==1): ?>
    <div class="rankings-block">
      <div class="sidebar-title sidebar-title-light">
        <a href="<?=base_url('Ranking/Player')?>"><?=langWrite('lang34')?></a>
        <?=langWrite('lang35')?> <br>
      </div>
      <?php if ($rankPlayer): ?>
        <div class="rankings">
          <div class="rankings-title">
            <div class="rank-number">#</div> <div class="rank-name"><?=langWrite('lang36')?></div> <div class="rank-lvl"><?=langWrite('lang37')?></div>
          </div>
          <?php foreach ($rankPlayer as $key => $value): ?>
            <a href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>" title="<?=$value->name?>" class="rankings-title-block <?=$key==0?'first':false?><?=$key==1?'second':false?><?=$key==2?'third':false?>">
              <div class="rank-number"><?=($key+1)?></div> <div class="rank-name"><?=$value->name?></div> <div class="rank-lvl"><span class="purple"><?=$value->level?> Lv.</span></div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <center><?=langWrite('lang38')?></center>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <?php if ($eventCalendar): ?>
    <div class="facebook-block">
      <div class="sidebar-title sidebar-title-dark facebbok-title">
        <?=langWrite('lang39')?>
      </div>
      <div class="block-p">
        <ul class="events">
          <center>
            <?php foreach ($eventCalendar as $key => $value): ?>
              <li>
                <a href="#">
                  <?=$value->eventTitle?>
                </a>
                <span> <span class="renkli"><?=writeEventDay($value->eventDay)?></span> <span class="renkli"><?=substr($value->eventStartTime,0,-3).' - '.substr($value->eventFinishTime,0,-3)?></span></span>
              </li>
            <?php endforeach; ?>
          </center>
        </ul>
      </div>
    </div>
  <?php endif; ?>
</aside>
