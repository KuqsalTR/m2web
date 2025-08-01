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
        <h3 class="text-center"><?=langWrite('lang238')?></h3>
        <br>
        <p class="text-center">
          <?=langWrite('lang240')?>
          <br>
          <a href="<?=base_url()?>Support/Add"><?=langWrite('lang241')?></a>
          <br>
        </p>
        <div class="ranks-inner-content">
          <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
            <?php if ($tickets): ?>
              <thead class="text-center">
                <tr>
                  <th class="rank-th-1">#</th>
                  <th class="rank-th-2"><?=langWrite('lang243')?></th>
                  <th class="rank-th-3"><?=langWrite('lang244')?></th>
                  <th class="rank-th-4"><?=langWrite('lang245')?></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tickets as $key => $value): ?>
                  <tr class="<?=$key%2==0?'zebra':''?>">
                    <td><?=$value->ticketId?></td>
                    <td class="text-ellipsis" width="150px" title="<?=$value->ticketTitle?>"><?=$value->ticketTitle?></td>
                    <td><?=DetailTurkishDate($value->ticketInsertDate)?></td>
                    <td><?php
                    switch ($value->ticketStatus) {
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
                    <td> <a href="<?=base_url()?>Support/View/<?=$value->ticketId?>"><?=langWrite('lang247')?></a> </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            <?php else: ?>
              <h2> <center><?=langWrite('lang249')?></center> </h2>
            <?php endif; ?>
          </table>
          <div class="text-center">
            <div class="pagination">
              <?=$pagination?>
            </div>
          </div>
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
