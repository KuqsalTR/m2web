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
        <h3 class="text-center"><?=langWrite('lang384')?></h3>
        <br>
        <div class="ranks-inner-content">
          <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
            <?php if ($logs): ?>
              <thead class="text-center">
                <tr>
                  <th class="rank-th-1">#</th>
                  <th class="rank-th-2"><?=langWrite('lang386')?></th>
                  <th class="rank-th-3"><?=langWrite('lang387')?></th>
                  <th class="rank-th-4"><?=langWrite('lang388')?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($logs as $key => $value): ?>
                  <tr class="<?=$key%2==0?'zebra':''?>">
                    <td><?=$value->logId?></td>
                    <td class="text-ellipsis" width="300px" title="<?=$value->logContent?>"><?=$value->logContent?></td>
                    <td><?=DetailTurkishDate($value->logDate)?></td>
                    <td><?=$value->logIP?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            <?php else: ?>
              <h2> <center><?=langWrite('lang141')?></center> </h2>
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
      <br>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
