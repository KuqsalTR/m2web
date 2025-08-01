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
            <?=langWrite('lang238')?>
          </center>
        </div>
        <div class="panel-body">
          <div class="callout callout-warning">
            <?=langWrite('lang240')?>
          </div>
          <br>
          <a class="button kontrolPaneliGenislik" href="<?=base_url('Support/Add')?>"><?=langWrite('lang241')?></a>
          <br><br>
          <?php if ($tickets): ?>
            <h2 class="text-center"><?=langWrite('lang242')?></h2>
            <table class="table table-monster siralama">
              <thead>
                <tr>
                  <td>#</td>
                  <td><?=langWrite('lang243')?></td>
                  <td><?=langWrite('lang244')?></td>
                  <td><?=langWrite('lang245')?></td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tickets as $key => $value): ?>
                  <tr>
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
                    <td> <a href="<?=base_url('Support/View/'.$value->ticketId)?>"><?=langWrite('lang247')?></a> </td>
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
            <h2 class="text-center"><?=langWrite('lang249')?></h2>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
