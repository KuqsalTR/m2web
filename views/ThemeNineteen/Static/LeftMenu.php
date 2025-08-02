<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<div role="navigation">
  <nav>
    <ul>
      <li>
        <a href="<?=base_url()?>">Menu</a>
        <ul>
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
        </ul>
      </li>
      <li>
        <a href="javascript:void(0)"><?=langWrite('lang53')?></a>
        <ul>
          <li><a href="<?=base_url()?>"><?=langWrite('lang53')?></a></li>
        </ul>
      </li>
      <li><a href="javascript:void(0)"><?=langWrite('lang50')?></a>
        <ul>
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
      </li>
    </ul>
  </nav>
  <?php if ($eventCalendar): ?>
    <nav>
      <ul>
        <li class="etkinlikTakvim">
          <a><?=langWrite('lang39')?></a>
          <?php foreach ($eventCalendar as $key => $value): ?>
            <div class="etkinlikElement">
              <span><?=$value->eventTitle?></span>
              <small><?=writeEventDay($value->eventDay).' - '.substr($value->eventStartTime,0,-3).'-'.substr($value->eventFinishTime,0,-3)?></small>
            </div>
          <?php endforeach; ?>
        </li>
      </ul>
    </nav>
  <?php endif; ?>
</div>
