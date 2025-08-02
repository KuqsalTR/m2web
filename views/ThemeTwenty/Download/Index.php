<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang57')?></h2>
        <div class="download-inner-content">
          <table class="table table-striped table-hover">
            <tbody>
              <?php if ($downloadLink): ?>
                <?php foreach ($downloadLink as $key => $value): ?>
                  <tr>
                    <td style="width: 70%"><?=$value->isim?></td>
                    <td><a class="btn btn-primary btn-sm" href="<?=$value->link?>" target="_blank"><?=langWrite('lang111')?></a></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <h2><?=langWrite('lang112')?></h2>
        <br>
        <div id="required" style="display:block">
          <table border="0" style="width:100%;">
            <caption><?=langWrite('lang114')?></caption>
            <tbody>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang116')?></td>
                <td>- <?=langWrite('lang117')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang119')?></td>
                <td>- <?=langWrite('lang120')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang122')?></td>
                <td>- <?=langWrite('lang123')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang125')?></td>
                <td>- <?=langWrite('lang126')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang128')?></td>
                <td>- <?=langWrite('lang129')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang131')?></td>
                <td>- <?=langWrite('lang132')?></td>
              </tr>
            </tbody>
          </table>
          <br>
          <table border="0" style="width:100%;">
            <caption><?=langWrite('lang115')?></caption>
            <tbody>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang116')?></td>
                <td>- <?=langWrite('lang118')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang119')?></td>
                <td>- <?=langWrite('lang121')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang122')?></td>
                <td>- <?=langWrite('lang124')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang125')?></td>
                <td>- <?=langWrite('lang127')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang128')?></td>
                <td>- <?=langWrite('lang130')?></td>
              </tr>
              <tr>
                <td class="left_td" style="width:auto"><?=langWrite('lang131')?></td>
                <td>- <?=langWrite('lang133')?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
