<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content fontSizeOnUc">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang109')?>
        </center>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <tbody>
            <?php if ($downloadLink): ?>
              <?php foreach ($downloadLink as $key => $value): ?>
                <tr>
                  <td style="color:#fff"><?=$value->isim?></td>
                  <td style="vertical-align:middle;text-align:right;"><a href="<?=$value->link?>" class="list-group-item" target="_new"><i class="glyphicon glyphicon-download-alt"></i> &nbsp; <?=langWrite('lang111')?></a></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <h3> <center><?=langWrite('lang134')?></center> </h3>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang112')?>
        </center>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td><b><?=langWrite('lang113')?></b></td>
              <td><b><?=langWrite('lang114')?></b></td>
              <td><b><?=langWrite('lang115')?></b></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?=langWrite('lang116')?></td>
              <td><?=langWrite('lang117')?></td>
              <td><?=langWrite('lang118')?></td>
            </tr>
            <tr>
              <td><?=langWrite('lang119')?></td>
              <td><?=langWrite('lang120')?></td>
              <td><?=langWrite('lang121')?></td>
            </tr>
            <tr>
              <td><?=langWrite('lang122')?></td>
              <td><?=langWrite('lang123')?></td>
              <td><?=langWrite('lang124')?></td>
            </tr>
            <tr>
              <td><?=langWrite('lang125')?></td>
              <td><?=langWrite('lang126')?></td>
              <td><?=langWrite('lang127')?></td>
            </tr>
            <tr>
              <td><?=langWrite('lang128')?></td>
              <td><?=langWrite('lang129')?></td>
              <td><?=langWrite('lang130')?>i</td>
            </tr>
            <tr>
              <td><?=langWrite('lang131')?></td>
              <td><?=langWrite('lang132')?></td>
              <td><?=langWrite('lang133')?></td>
            </tr>
          </tbody>
        </table>
        <br>
      </div>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
