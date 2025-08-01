<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main" id="highscore">
  <div class="content content-last">
    <div class="content-bg">
      <?php if(ranking['status']!="1"): ?>
        <div class="content-bg-bottom">
          <div class="inner-form-border">
            <div class="inner-form-box" style="padding:25px!important">
              <h3><?=langWrite('lang135')?></h3>
              <div class="trenner"></div>
              <br>
              <h1 class="text-center"><?=langWrite('lang531')?></h1>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="content-bg-bottom">
          <br>
          <h3 class="text-center"><?=langWrite('lang143')?></h3>
          <br>
          <div class="ranks-inner-content">
            <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
              <?php if ($rankingGuild): ?>
                <thead class="text-center">
                  <tr>
                    <th class="rank-th-1">#</th>
                    <th><?=langWrite('lang144')?></th>
                    <th><?=langWrite('lang145')?></th>
                    <th><?=langWrite('lang146')?></th>
                    <th><?=langWrite('lang147')?></th>
                    <th><?=langWrite('lang148')?></th>
                    <th><?=langWrite('lang149')?></th>
                    <th><?=langWrite('lang150')?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rankingGuild as $key => $value): ?>
                    <tr class="<?=$key%2==0?'zebra':''?>">
                      <td><?=($key+1)?></td>
                      <td><?=$value->name?></td>
                      <td><?=$value->level?></td>
                      <td><?=$value->ladder_point?></td>
                      <td><img src="<?=base_url()?>assets/images/empire/<?=$value->empire?>.jpg" alt=""></td>
                      <td><?=$value->win?></td>
                      <td><?=$value->draw?></td>
                      <td><?=$value->loss?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              <?php else: ?>
                <h2> <center><?=langWrite('lang141')?></center> </h2>
              <?php endif; ?>
            </table>
          </div>
          <br><br>
        </div>
        <br>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
