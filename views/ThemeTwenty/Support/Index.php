<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang238')?></h2>
        <div class="download-inner-content">
          <h1 class="text-center"><?=langWrite('lang240')?></h1>
          <center>
            <a class="btn" href="<?=base_url()?>Support/Add"><?=langWrite('lang241')?></a>
          </center>
          <br>
          <?php if ($tickets): ?>
            <table class="table table-striped table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th><?=langWrite('lang243')?></th>
                  <th><?=langWrite('lang244')?></th>
                  <th><?=langWrite('lang245')?></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tickets as $key => $value): ?>
                  <tr>
                    <td><?=$value->ticketId?></td>
                    <td><?=$value->ticketTitle?></td>
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
            </table>
            <div class="text-center">
              <div class="pagination">
                <?=$pagination?>
              </div>
            </div>
          <?php else: ?>
            <strong><center><br><h5><?=langWrite('lang249')?></h5><br></center></strong>
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
