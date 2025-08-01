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
          <h3 class="text-center"><?=langWrite('lang135')?></h3>
          <br>
          <div class="ranks-inner-content">
            <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
              <?php if ($rankingPlayer): ?>
                <thead class="text-center">
                  <tr>
                    <th class="rank-th-1">#</th>
                    <th class="rank-th-2"><?=langWrite('lang136')?></th>
                    <th class="rank-th-3"><?=langWrite('lang140')?></th>
                    <th class="rank-th-4"><?=langWrite('lang137')?></th>
                    <th class="rank-th-5">EXP</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rankingPlayer as $key => $value): ?>
                    <tr class="<?=$key%2==0?'zebra':''?>">
                      <td><?=($key+1)?></td>
                      <td><a href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>"><?=$value->name?></a></td>
                      <td><img src="<?=base_url()?>assets/images/empire/<?=$value->empire?>.jpg" alt=""></td>
                      <td><?=$value->level?></td>
                      <td><?=$value->exp?></td>
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
