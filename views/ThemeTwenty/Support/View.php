<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=$ticketInfo->ticketTitle.langWrite('lang270')?></h2>
        <div class="download-inner-content">
          <h1 class="text-center">
            <?=langWrite('lang255')?>
            <br>
            <br>
          </h1>
          <table class="table table-striped table-hover">
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
          <?php if ($ticketInfo->ticketStatus!=3): ?>
            <form id="TicketReply" class="registerForm">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td><?=langWrite('lang280')?></td>
                    <td>
                      <textarea class="form-control" placeholder="<?=langWrite('lang280')?>" name="reply" rows="8" cols="80"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="g-recaptcha" data-sitekey="<?=googleKey?>" style="display: flex;justify-content: center;"></div>
                    </td>
                  </tr>
                  <input type="hidden" name="ticketId" value="<?=$ticketInfo->ticketId?>">
                  <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                </tbody>
              </table>
              <center>
                <input type="submit" value="<?=langWrite('lang281')?>" class="btn btn-danger btn-lg btn-block" tabindex="7">
              </center>
            </form>
          <?php else: ?>
            <a href="<?=base_url()?>Support" class="text-center" style="width:100%;display:block"><?=langWrite('lang282')?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
