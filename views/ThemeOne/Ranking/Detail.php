<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content fontSizeOnUc">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=$detail->name.' '.langWrite('lang438')?>
        </center>
      </div>
      <div class="panel-body no-padding">
        <table height="30" cellspacing="5" cellpadding="5">
          <tbody>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang439')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$detail->name?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang440')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=karakterTipi($detail->job)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang441')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><img src="<?=base_url('assets/ThemeOne/images/empire/'.$detail->empire.'.jpg')?>" alt=""></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang442')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=isset($detail->guild_id)?$detail->guildName:'-'?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang443')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=timeAgo($detail->last_play)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang444')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=convertSeconds($detail->playtime*60)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang445')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$detail->level?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang446')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=number_format($detail->exp,0)?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
