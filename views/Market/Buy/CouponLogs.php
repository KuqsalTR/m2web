<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Market/Static/Header');
?>
<div class="content clearfix" id="wt_refpoint">
  <div id="account" class="mCSB_container row-fluid">
    <ul id="accountNav" class="span3">
      <li>
        <a href="<?=base_url()?>Market/Characters" class="btn-sideitem"><i class="icon-users"></i><span><?=langWrite('lang361')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Logs" class="btn-sideitem "><i class="icon-basket"></i><span><?=langWrite('lang362')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Safebox"class="btn-sideitem ">
          <i class="icon-stack">
            <?php if ($safeboxCount): ?>
              <div class="badge"><?=$safeboxCount?></div>
            <?php endif; ?>
          </i>
          <span><?=langWrite('lang369')?></span>
        </a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/Coupon" class="btn-sideitem"><i class="icon-barcode"></i><span><?=langWrite('lang363')?></span></a>
      </li>
      <li>
        <a href="<?=base_url()?>Market/CouponLogs" class="btn-sideitem btn-sideitem-active"><i class="icon-barcode"></i><span><?=langWrite('lang382')?></span></a>
      </li>
    </ul>
    <script type="text/javascript">
    zs.data.ttip = {
      defaultPosition: 'right',
      attribute: 'tooltip-content',
      delay: 500
    }
    </script>
    <div id="accountContent" class="span11 redeem-code">
      <h2><?=langWrite('lang382')?></h2>
      <div class="scrollable_container">
        <div class="inside_scrollable_container">
          <div class="contrast-box clearfix">
            <div class="grey-box">
              <?php if ($coupons): ?>
                <table>
                  <thead>
                    <th>#</th>
                    <th>Kupon</th>
                    <th>EP</th>
                    <th>Tarih</th>
                  </thead>
                  <tbody>
                    <?php foreach ($coupons as $key => $value): ?>
                      <tr>
                        <td style="text-align:center"><?=($key+1)?></td>
                        <td style="text-align:center"><?=$value->couponCode?></td>
                        <td style="text-align:center"><?=$value->couponEP?></td>
                        <td style="text-align:center"><?=DetailTurkishDate($value->couponUseDate)?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="overlayMask"></div>
</div>
</div>
<script type="text/javascript">
$('#code').on('keyup',function(){
  var code = $(this).val();
  $('.goButton').attr('href','<?=base_url()?>Market/CouponControl/'+code+'');
});
</script>
</body>
</html>
