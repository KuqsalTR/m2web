<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div id="formDiv" class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <div class="inner-form-border">
          <div class="inner-form-box" style="padding:25px!important">
            <h3><?=langWrite('lang57')?></h3>
            <div class="trenner"></div>
            <div id="highscore">
              <table border="0" style="table-layout:fixed;color: #8d0404;font-size: 11px;height: 29px;width: 335px;margin-left: 15px;">
                <tbody>
                  <?php if ($downloadLink): ?>
                    <?php foreach ($downloadLink as $key => $value): ?>
                      <tr>
                        <td><?=$value->isim?></td>
                        <td><a href="<?=$value->link?>" target="_blank"><?=langWrite('lang111')?></a></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
              <br>
            </div>
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
  </div>
</div>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
