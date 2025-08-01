<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang196')?></h2>
        <div class="download-inner-content">
          <?php if ($coupons): ?>
            <table class="table table-striped table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th><?=langWrite('lang375')?></th>
                  <th><?=langWrite('lang429')?></th>
                  <th><?=langWrite('lang387')?></th>
                  <th><?=langWrite('lang388')?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($coupons as $key => $value): ?>
                  <tr>
                    <td><?=($key+1)?></td>
                    <td><?=$value->couponCode?></td>
                    <td><?=$value->couponEP." ".langWrite('lang429')?></td>
                    <td><?=DetailTurkishDate($value->couponUseDate)?></td>
                    <td><?=$value->couponUserIP?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
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
