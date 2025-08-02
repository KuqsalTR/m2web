<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=$detail->name.' '.langWrite('lang438')?></h2>
        <div class="download-inner-content">
          <table class="table table-striped table-hover">
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
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
