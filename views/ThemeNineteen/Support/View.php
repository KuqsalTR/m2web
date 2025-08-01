<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div id="formDiv" class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <div class="inner-form-border">
          <div class="inner-form-box" style="padding:25px!important">
            <h3 class="text-center"><?=$ticketInfo->ticketTitle.langWrite('lang270')?></h3>
            <div class="trenner"></div>
            <p class="text-center">
              <?=langWrite('lang255')?>
              <br>
            </p>
            <br>
            <div id="highscore">
              <table class="table-layout:fixed" cellspacing="0" cellpadding="0" style="width:360px;">
                <tbody>
                  <tr>
                    <th width="184"><?=langWrite('lang272')?></th>
                    <td width="495"><?=$ticketInfo->ticketCategory?></td>
                  </tr>
                  <tr>
                    <th width="184"><?=langWrite('lang273')?></th>
                    <td width="495"><?=$ticketInfo->ticketTitle?></td>
                  </tr>
                  <tr>
                    <th width="184"><?=langWrite('lang274')?></th>
                    <td width="495"><?=$ticketInfo->ticketContent?></td>
                  </tr>
                  <tr>
                    <th width="184"><?=langWrite('lang275')?></th>
                    <td width="495"><?=DetailTurkishDate($ticketInfo->ticketInsertDate)?></td>
                  </tr>
                  <tr>
                    <th width="184"><?=langWrite('lang276')?></th>
                    <td width="495"><?=DetailTurkishDate($ticketInfo->ticketUpdateDate)?></td>
                  </tr>
                  <tr>
                    <th width="184"><?=langWrite('lang277')?></th>
                    <td width="495"><?php
                    switch ($ticketInfo->ticketStatus) {
                      case 0:
                      echo langWrite('lang250');
                      break;
                      case 1:
                      echo langWrite('lang251');
                      break;
                      case 2:
                      echo langWrite('lang252');
                      break;
                      case 3:
                      echo langWrite('lang253');
                      break;
                    }
                    ?></td>
                  </tr>
                  <?php if ($ticketReply): ?>
                    <?php foreach ($ticketReply as $key => $value): ?>
                      <tr>
                        <th width="184"><?=$value->replyType==1?langWrite('lang278'):langWrite('lang279')?></th>
                        <td width="495"><?=$value->replyContent?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <?php if ($ticketInfo->ticketStatus!=3): ?>
              <form id="TicketReply" class="registerForm">
                <div class="margin-bottom-15">
                  <label for="reply"><?=langWrite('lang280')?></label>
                  <textarea placeholder="<?=langWrite('lang280')?>" name="reply" rows="8" cols="80" class="text-left"></textarea>
                </div>
                <div class="margin-bottom-15" style="margin-top:10px;margin-bottom:0px;transform:scale(0.9);transform-origin:0;-webkit-transform:scale(0.9);transform:scale(0.9);-webkit-transform-origin:0 0;transform-origin:0 0;">
                  <div class="g-recaptcha" data-sitekey="<?=googleKey?>"></div>
                </div>
                <input type="hidden" name="ticketId" value="<?=$ticketInfo->ticketId?>">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                <input id="submitBtn" type="submit" value="<?=langWrite('lang281')?>" class="btn-big">
              </form>
            <?php else: ?>
              <a href="<?=base_url()?>Support" class="text-center" style="width:100%;display:block"><?=langWrite('lang282')?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
