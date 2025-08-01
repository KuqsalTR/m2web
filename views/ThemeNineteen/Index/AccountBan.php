<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main" id="highscore">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <br>
        <h3 class="text-center"><?=langWrite('lang417')?></h3>
        <br>
        <div class="ranks-inner-content">
          <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td><?=langWrite('lang418')?></td>
                <td><?=$banLog->banAccount?></td>
              </tr>
              <tr class="zebra">
                <th width="184"><?=langWrite('lang419')?></th>
                <td width="495"><?=$banLog->banStartTime?></td>
              </tr>
              <tr>
                <th width="184"><?=langWrite('lang420')?></th>
                <td width="495"><?=$banLog->banFinishTime?></td>
              </tr>
              <?php
              $availDt = new DateTime($banLog->banFinishTime);
              $dateTime = new DateTime(date('Y-m-d H:i:s'));
              $banDate = $availDt->diff($dateTime);
              ?>
              <tr class="zebra">
                <th width="184"><?=langWrite('lang421')?></th>
                <td width="495"><?=$banDate->format(langWrite('lang424'))?></td>
              </tr>
              <tr>
                <th width="184"><?=langWrite('lang422')?></th>
                <td width="495"><?=$banLog->banDescription?></td>
              </tr>
            </tbody>
          </table>
          <br>
          <p>
            <?=langWrite('lang423')?>
            <a class="text-center" style="display:block" href="<?=base_url()?>Support/Add" style="width:100%"><?=langWrite('lang241')?></a>
          </p>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
