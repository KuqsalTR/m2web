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
            <?=langWrite('lang196')?>
          </center>
        </div>
        <div class="panel-body">
          <?php if ($coupons): ?>
            <table class="table table-monster siralama">
              <thead>
                <tr>
                  <td>#</td>
                  <td><?=langWrite('lang375')?></td>
                  <td><?=langWrite('lang429')?></td>
                  <td><?=langWrite('lang387')?></td>
                  <td><?=langWrite('lang388')?></td>
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
            <h2 class="text-center"><?=langWrite('lang385')?></h2>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
