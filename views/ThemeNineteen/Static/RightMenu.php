<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<div class="secondary">
  <?php if (!writeSession('userId')): ?>
    <aside class="login" role="complementary">
      <h2><?=langWrite('lang77')?></h2>
      <form id="login">
        <div class="form-login">
          <label><?=langWrite('lang66')?></label>
          <div class="input">
            <input type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
          </div>
          <label><?=langWrite('lang68')?></label>
          <div class="input">
            <input type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
          </div>
          <?php if (pinSystem['status']==1): ?>
            <label><?=langWrite('lang70')?></label>
            <div class="input">
              <input type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
            </div>
          <?php endif; ?>
          <div style="height:40px;margin-top:10px;margin-bottom:0px;transform:scale(0.5);transform-origin:0;-webkit-transform:scale(0.5);transform:scale(0.5);-webkit-transform-origin:0 0;transform-origin:0 0;">
            <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
          <div>
            <input type="submit" class="button btn-login" value="<?=langWrite('lang81')?>">
          </div>
          <p class="agbok">
            <a href="<?=base_url('Forget/Password')?>" class="lost"><?=langWrite('lang58')?></a>
            <?php if (pinSystem['status']==1): ?>
              <br>
              <a href="<?=base_url('Forget/Pin')?>" class="lost pb-5"><?=langWrite('lang173')?></a>
            <?php endif; ?>
          </p>
        </div>
      </form>
    </aside>
  <?php else: ?>
    <aside class="itemshop" role="complementary">
      <h2><?=langWrite('lang264')?></h2>
      <a href="<?=base_url('Market/Index')?>" class="itemshop btn itemshop-btn iframe" title="<?=langWrite('lang264')?>"></a>
    </aside>
  <?php endif; ?>
  <aside class="download" role="complementary">
    <h2><?=langWrite('lang10')?></h2>
    <a href="<?=base_url('Download')?>" title="<?=langWrite('lang521')?>"><?=langWrite('lang521')?></a>
  </aside>
  <?php if (ranking['status']==1): ?>
    <aside class="highscore" role="complementary">
      <h2><?=langWrite('lang11')?></h2>
      <ul class="tabcontrols">
        <li class="selected">
          <a href="#players">
            <img src="<?=base_url('assets/ThemeNineteen/images/topluluk.png')?>" alt="<?=langWrite('lang12')?>" title="<?=langWrite('lang12')?>" />
          </a>
        </li>
        <li>
          <a href="#guilds">
            <img src="<?=base_url('assets/ThemeNineteen/images/guild.png')?>" alt="<?=langWrite('lang13')?>" title="<?=langWrite('lang13')?>" />
          </a>
        </li>
      </ul>

      <div class="tab players selected">
        <div id="highscore-player">
          <table>
            <?php if ($rankPlayer): ?>
              <?php foreach ($rankPlayer as $key => $value): ?>
                <tr class="<?=$key%2==0?'':'alt'?>">
                  <td class="position"><?=$key+1?></td>
                  <td class="name"><a href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>"><?=$value->name?></a></td>
                  <td class="faction" style="padding-left:10px;">
                    <img src="<?=base_url()?>assets/images/empire/<?=$value->empire?>.jpg" alt="" height="16px" width="25px">
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </table>
        </div>
        <a href="<?=base_url('Ranking/Player')?>"><?=langWrite('lang29')?></a>
      </div>
      <div class="tab guilds">
        <div id="highscore-guild">
          <table>
            <?php if ($rankGuild): ?>
              <?php foreach ($rankGuild as $key => $value): ?>
                <tr class="<?=$key%2==0?'':'alt'?>">
                  <td class="position"><?=$key+1?></td>
                  <td class="name"><a href="#"><?=$value->name?></a></td>
                  <td class="faction" style="padding-left:10px;">
                    <img src="<?=base_url()?>assets/images/empire/<?=$value->empire?>.jpg" alt="" height="16px" width="25px">
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </table>
        </div>
        <a href="<?=base_url('Ranking/Guild')?>" rel="nofollow"><?=langWrite('lang29')?></a>
      </div>
    </aside>
  <?php endif; ?>
</div>
</div>
