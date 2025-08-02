<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div class="scrollable_container" style="margin-top: 30px;">
    <link rel="stylesheet" href="<?=base_url('assets/css/ep.css')?>">
    <div class="inside_scrollable_container">
      <div class="center">
        <?php if ($paymentType): ?>
          <?php foreach ($paymentType as $key => $value): ?>
            <a href="<?=$value['link']?>" style="margin: 5px;" target="_blank">
              <div class="buy-box">
                <img src="<?=$value['image']?>" style="height:35px">
              </div>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <table class="ep-list table table-hover" style="background:#eade9e repeat scroll 0 0/cover;width:33%;display: block;float: right;">
        <tbody>
          <?php if (market['happyHour']!=0): ?>
            <tr style="background: white;">
              <th colspan="2">
                <small style="display:block; text-align:center;color: red">
                  <?=langWrite('lang348')?>
                </small>
              </th>
            </tr>
          <?php endif; ?>
          <tr style="background: white;">
            <th style="width: 50%;">
              <center><?=langWrite('lang349')?></center>
            </th>
            <th>
              <center><?=langWrite('lang350')?></center>
            </th>
          </tr>
          <?php foreach (market['epPrice'] as $key => $value): ?>
            <tr>
              <td>
                <center><?=$key?> ₺</center>
              </td>
              <td>
                <?php if (market['happyHour']==0): ?>
                  <center><?=$value?></center>
                <?php else: ?>
                  <center><?=$value?> + <?=intval(substr($value,0,-3)*(market['happyHour']/100))?> EP</center>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <tr style="background: white;">
            <th colspan="2">
              <small style="display:block; text-align:center;">
                <?=langWrite('lang351')?>
              </small>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div></div><div id="overlayMask"></div>
</div>
</div>
</body>
</html>
