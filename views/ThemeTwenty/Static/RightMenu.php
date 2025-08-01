<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<div class="col-3">
  <div class="boxes-top">&nbsp;</div>
  <div class="modul-box">
    <div class="modul-box-bg">
      <?php if (!writeSession('userId')): ?>
        <div class="modul-box-bg-bottom">
          <h3><?=langWrite('lang77')?></h3>
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
              <div style="height:40px;margin-top:10px;margin-bottom:0px;transform:scale(0.43);transform-origin:0;-webkit-transform:scale(0.43);transform:scale(0.43);-webkit-transform-origin:0 0;transform-origin:0 0;">
                <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
              </div>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              <div>
                <input type="submit" class="button btn-login" value="<?=langWrite('lang81')?>">
              </div>
              <div>
                <p class="agbok">
                  <a href="<?=base_url('Forget/Password')?>" class="lost"><?=langWrite('lang58')?></a>
                  <?php if (pinSystem['status']==1): ?>
                    <br>
                    <a href="<?=base_url('Forget/Pin')?>" class="lost pb-5"><?=langWrite('lang173')?></a>
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </form>
        </div>
      <?php else: ?>
        <div class="modul-box-bg-bottom">
          <h3><?=langWrite('lang264')?></h3>
          <center>
            <a href="<?=base_url('Market/Index')?>" class="itemshop btn itemshop-btn iframe" title="<?=langWrite('lang264')?>"></a>
          </center>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="boxes-middle">&nbsp;</div>
  <div class="modul-box modul-box-2">
    <div class="modul-box-bg">
      <div class="modul-box-bg-bottom">
        <h3><?=langWrite('lang10')?></h3>
        <a class="btn download-btn" href="<?=base_url('Download')?>" title="<?=langWrite('lang521')?>"></a>
      </div>
    </div>
  </div>
  <div class="boxes-middle">&nbsp;</div>
  <?php if (ranking['status']==1): ?>
    <div class="modul-box modul-box-2">
      <div class="modul-box-bg">
        <div class="modul-box-bg-bottom">
          <h3><?=langWrite('lang12')?></h3>
          <div class="form-score">
            <div id="highscore-player">
              <?php if ($rankPlayer): ?>
                <?php foreach ($rankPlayer as $key => $value): ?>
                  <ul>
                    <li class ="">
                      <strong><?=$key+1?></strong> - <a class="first" href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>"><?=$value->name?></a>
                      <span class='top_emp'>
                        <img src="<?=base_url('assets/images/empire/'.$value->empire.'.jpg')?>" alt="" height="16px" width="22px">
                      </span>
                      <span class='top_lvl'><?=$value->level?></span>
                    </li>
                  </ul>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div align="left">
              <a class="btn" href="<?=base_url('Ranking/Player')?>"><?=langWrite('lang29')?></a>
            </div>
          </div>
          <h3 style="margin-top:0"><?=langWrite('lang13')?></h3>
          <div class="form-score">
            <div id="highscore-guild">
              <?php if ($rankGuild): ?>
                <?php foreach ($rankGuild as $key => $value): ?>
                  <ul>
                    <li>
                      <strong><?=$key+1?></strong> - <a class="first" href="javascript:void(0)"><?=$value->name?></a>
                      <span class='top_emp'>
                        <img src="<?=base_url('assets/images/empire/'.$value->empire.'.jpg')?>" alt="" height="16px" width="22px">
                      </span>
                    </li>
                  </ul>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div align="left">
              <a class="btn" href="<?=base_url('Ranking/Guild')?>"><?=langWrite('lang29')?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="boxes-bottom"> </div>
  <?php endif; ?>
</div>
</div>
</div>
</div>
