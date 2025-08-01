<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<aside class="left-sidebar">
  <div class="best-price-block">
    <?php if ($links->gamePromotion!=""): ?>
      <a href="<?=$links->gamePromotion?>" class="best-price one">
        <div class="best-price-bottom">
          <br><br>
          <span><?=langWrite('lang19')?></span>
          <?=langWrite('lang20')?>
        </div>
      </a>
    <?php endif; ?>
    <?php if (ticketSystem["status"]==1): ?>
      <a href="<?=base_url('Support')?>" class="best-price two">
        <div class="best-price-bottom">
          <br>
          <span><?=langWrite('lang21')?></span>
          <?=langWrite('lang22')?>
        </div>
      </a>
    <?php endif; ?>
  </div>
  <div class="top-guilds-block">
    <?php if (ranking['status']==1): ?>
      <div class="sidebar-title sidebar-title-dark">
        <a href="<?=base_url('Ranking/Guild')?>"><?=langWrite('lang23')?></a>
        <?=langWrite('lang24')?>
      </div>
      <?php if ($rankGuild): ?>
        <div class="top-guilds">
          <div class="rankings-title">
            <div class="guild-img">#</div> <div class="clan-team"><?=langWrite('lang25')?></div> <div class="points"><?=langWrite('lang26')?></div>
          </div>
          <?php foreach ($rankGuild as $key => $value): ?>
            <div class="guilds">
              <div class="rank-number<?=$key==0?'-first':false?><?=$key==1?'-second':false?><?=$key==2?'-third':false?>"><?=($key+1)?></div>
              <div class="clan-team">
                <a onclick="return false" class="clan-team-name"><?=$value->name?></a>
                <span><?=langWrite('lang27')?> <a onclick="return false" class="clan-team-lord"><?=$value->playerName?></a></span>
              </div>
              <div class="points">
                <?=number_format(($value->ladder_point/1000),0)?>K
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <center><?=langWrite('lang28')?></center>
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($youtubeVideo): ?>
      <div class="sidebar-title sidebar-title-dark">
        <a href="<?=base_url('YoutubeVideos')?>"><?=langWrite('lang29')?></a>
        <?=langWrite('lang30')?>
      </div>
      <div class="wallpaper-block">
        <?php foreach ($youtubeVideo as $key => $value): ?>
          <a onclick='new modal("#video_modal<?=$value->youtubeId?>"); return false'class="wallpaper<?=$key==0?'-big':false?>">
            <img src="<?=base_url('assets/images/youtube/'.$value->youtubeImg)?>" alt="">
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</aside>
