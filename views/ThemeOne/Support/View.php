<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=$ticketInfo->ticketTitle.langWrite('lang270')?>
        </center>
      </div>
      <div class="panel-body">
        <div class="callout callout-danger">
          <?=langWrite('lang271')?>
        </div>
        <br>
        <table height="30" cellspacing="5" cellpadding="5">
          <tbody>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang272')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$ticketInfo->ticketCategory?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang273')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$ticketInfo->ticketTitle?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang274')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$ticketInfo->ticketContent?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang275')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=DetailTurkishDate($ticketInfo->ticketInsertDate)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang276')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=DetailTurkishDate($ticketInfo->ticketUpdateDate)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang277')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?php
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
                  <th class="kontrolPaneliBilgiSol" width="184"><?=$value->replyType==1?langWrite('lang278'):langWrite('lang279')?></th>
                  <td class="kontrolPaneliBilgiSag" width="495"><?=$value->replyContent?></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
        <br>
        <?php if ($ticketInfo->ticketStatus!=3): ?>
          <form id="TicketReply">
            <label><?=langWrite('lang280')?></label>
            <textarea name="reply" rows="8" cols="80"></textarea>
            <input type="hidden" name="ticketId" value="<?=$ticketInfo->ticketId?>">
            <div class="form-group" style="display: flex;justify-content:center">
              <div class="g-recaptcha" data-theme="dark" data-sitekey="<?=googleKey?>"></div>
            </div>
            <br>
            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
            <center>
              <button type="submit" class="button button-bg"><?=langWrite('lang281')?></button>
            </center>
            <br>
          </form>
        <?php else: ?>
          <center>
            <a href="<?=base_url('Support')?>"><button class="button button-bg"><?=langWrite('lang282')?></button></a>
          </center>
        <?php endif; ?>
      </div>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
