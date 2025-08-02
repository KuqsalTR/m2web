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
        <h3 class="text-center"><?=langWrite('lang196')?></h3>
        <br>
        <div class="ranks-inner-content">
          <table class="table-layout:fixed" cellspacing="0" cellpadding="0">
            <?php if ($coupons): ?>
              <thead class="text-center">
                <tr>
                  <th class="rank-th-1">#</th>
                  <th class="rank-th-2"><?=langWrite('lang375')?></th>
                  <th class="rank-th-3"><?=langWrite('lang429')?></th>
                  <th class="rank-th-4"><?=langWrite('lang387')?></th>
                  <th class="rank-th-4"><?=langWrite('lang388')?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($coupons as $key => $value): ?>
                  <tr class="<?=$key%2==0?'zebra':''?>">
                    <td><?=($key+1)?></td>
                    <td><?=$value->couponCode?></td>
                    <td><?=$value->couponEP." ".langWrite('lang429')?></td>
                    <td><?=DetailTurkishDate($value->couponUseDate)?></td>
                    <td><?=$value->couponUserIP?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            <?php else: ?>
              <h2> <center><?=langWrite('lang385')?></center> </h2>
            <?php endif; ?>
          </table>
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
