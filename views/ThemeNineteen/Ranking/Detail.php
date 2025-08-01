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
        <h3 class="text-center"><?=$detail->name.' '.langWrite('lang438')?></h3>
        <br>
        <div class="ranks-inner-content">
          <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td><?=langWrite('lang439')?></td>
                <td><?=$detail->name?></td>
              </tr>
              <tr class="zebra">
                <td><?=langWrite('lang440')?></td>
                <td><?=karakterTipi($detail->job)?></td>
              </tr>
              <tr>
                <td><?=langWrite('lang441')?></td>
                <td><img src="<?=base_url()?>assets/images/empire/<?=$detail->empire?>.jpg" alt=""></td>
              </tr>
              <tr class="zebra">
                <td><?=langWrite('lang442')?></td>
                <td><?=isset($detail->guild_id)?$detail->guildName:'-'?></td>
              </tr>
              <tr>
                <td><?=langWrite('lang443')?></td>
                <td><?=timeAgo($detail->last_play)?></td>
              </tr>
              <tr class="zebra">
                <td><?=langWrite('lang444')?></td>
                <td><?=convertSeconds($detail->playtime*60)?></td>
              </tr>
              <tr>
                <td><?=langWrite('lang445')?></td>
                <td><?=$detail->level?></td>
              </tr>
              <tr class="zebra">
                <td><?=langWrite('lang446')?></td>
                <td><?=number_format($detail->exp,0)?></td>
              </tr>
            </tbody>
          </table>
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
