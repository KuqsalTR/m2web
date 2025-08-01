<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center><?=langWrite('lang417')?></center>
      </div>
      <br>
      <?php if ($banLog): ?>
        <div class="panel-body">
          <table height="30" cellspacing="5" cellpadding="5">
            <tbody>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang418')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$banLog->banAccount?></td>
              </tr>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang419')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$banLog->banStartTime?></td>
              </tr>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang420')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$banLog->banFinishTime?></td>
              </tr>
              <?php
              $availDt = new DateTime($banLog->banFinishTime);
              $dateTime = new DateTime(date('Y-m-d H:i:s'));
              $banDate = $availDt->diff($dateTime);
              ?>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang421')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$banDate->format(langWrite('lang424'))?></td>
              </tr>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang422')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$banLog->banDescription?></td>
              </tr>
            </tbody>
          </table>
          <br>
        </div>
        <div class="callout callout-warning"><?=langWrite('lang423')?></div>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Support/Add')?>"><?=langWrite('lang241')?></a>
      <?php endif; ?>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
