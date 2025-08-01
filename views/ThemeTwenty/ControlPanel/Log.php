<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang384')?></h2>
        <div class="download-inner-content">
          <?php if ($logs): ?>
            <table class="table table-striped table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th><?=langWrite('lang386')?></th>
                  <th><?=langWrite('lang387')?></th>
                  <th><?=langWrite('lang388')?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($logs as $key => $value): ?>
                  <tr>
                    <td><?=$value->logId?></td>
                    <td><?=$value->logContent?></td>
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
            <br>
            <strong><center><br><h5><?=langWrite('lang385')?></h5><br></center></strong>
            <br>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
