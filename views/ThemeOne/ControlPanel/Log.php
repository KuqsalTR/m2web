<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <main class="content">
      <div class="panel panel-buyuk">
        <div class="panel-heading">
          <center>
            <?=langWrite('lang384')?>
          </center>
        </div>
        <div class="panel-body">
          <?php if ($logs): ?>
            <table class="table table-monster siralama">
              <thead>
                <tr>
                  <td>#</td>
                  <td><?=langWrite('lang386')?></td>
                  <td><?=langWrite('lang387')?></td>
                  <td><?=langWrite('lang388')?></td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($logs as $key => $value): ?>
                  <tr>
                    <td><?=$value->logId?></td>
                    <td class="text-ellipsis" width="200px" title="<?=$value->logContent?>"><?=$value->logContent?></td>
                    <td><?=DetailTurkishDate($value->logDate)?></td>
                    <td><?=$value->logIP?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="text-center">
              <div class="pagination">
                <?=$pagination?>
              </div>
            </div>
          <?php else: ?>
            <h2 class="text-center"><?=langWrite('lang385')?></h2>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
