<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<div id="notEnoughCash" class="contrast-box sys-message">
  <div class="dark-grey-box clearfix">
    <div class="clearfix">
      <div class="item-showcase span2">
        <div id="image" class="picture_wrapper ">
          <?php if ($info['itemIcon']!=""): ?>
            <img class="item-thumb" src="<?=base_url()?>assets/market/images/icon/<?=$info['itemIcon']?>" width="98" height="98" alt=""/>
          <?php endif; ?>
        </div>
      </div>
      <div class="money-showcase  span5 ">
        <br><br>
        <h2 style="text-align:center"><?=langWrite('lang469')?></h2>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function reload() {
    location.reload();
  }
  setInterval(reload,1000);
</script>
