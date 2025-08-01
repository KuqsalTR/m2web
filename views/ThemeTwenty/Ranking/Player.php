<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang135')?></h2>
        <div class="download-inner-content">
          <?php if(ranking['status']!="1"): ?>
            <br>
            <strong><center><br><h5><?=langWrite('lang531')?></h5><br></center></strong>
            <br>
          <?php else: ?>
            <table class="table table-striped table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th><?=langWrite('lang136')?></th>
                  <th><?=langWrite('lang140')?></th>
                  <th><?=langWrite('lang137')?></th>
                  <th>EXP</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($rankingPlayer): ?>
                  <?php foreach ($rankingPlayer as $key => $value): ?>
                    <tr>
                      <td><?=($key+1)?></td>
                      <td><a href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>"><?=$value->name?></a></td>
                      <td><img src="<?=base_url()?>assets/images/empire/<?=$value->empire?>.jpg" alt=""></td>
                      <td><?=$value->level?></td>
                      <td><?=$value->exp?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="5"><center><?=langWrite('lang141')?></center></td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
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
