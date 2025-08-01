<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeNineteen/Static/Header');
$this->load->view('ThemeNineteen/Static/LeftMenu');
?>
<div role="main">
  <div class="content">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <div class="inner-form-border">
          <div class="inner-form-box" style="padding:25px!important">
            <h3 class="text-center"><?=langWrite('lang425')?></h3>
            <div class="trenner"></div>
            <?php if ($youtubeVideoAll): ?>
              <div style="display: flex;flex-wrap: wrap;">
                <?php foreach ($youtubeVideoAll as $key => $value): ?>
                  <div style="flex: 0 0 auto;width: 48%;padding-right:10px;">
                    <a id="outubeVideo_modal<?=$value->youtubeId?>">
                      <img src="<?=base_url()?>assets/images/youtube/<?=$value->youtubeImg?>" alt="" style="max-width:100%">
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php else: ?>
              <h2>
                <center><?=langWrite('lang426')?></center>
              </h2>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if ($youtubeVideoAll): ?>
  <?php foreach ($youtubeVideoAll as $key => $value): ?>
    <div id="youtubeVideo_modal<?=$value->youtubeId?>" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2><?=$value->youtubeTitle?></h2>
        <p>
          <?=$value->youtubeIframe?>
        </p>
      </div>
    </div>
    <script type="text/javascript">
    var modal<?=$value->youtubeId?> = document.getElementById("youtubeVideo_modal<?=$value->youtubeId?>");
    var btn = document.getElementById("outubeVideo_modal<?=$value->youtubeId?>");
    var span = document.getElementsByClassName("close")[0];
    if (btn) {
      btn.onclick = function() {
        modal<?=$value->youtubeId?>.style.display = "block";
      }
      span.onclick = function() {
        modal<?=$value->youtubeId?>.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    }
    </script>
  <?php endforeach; ?>
<?php endif; ?>
<?php
$this->load->view('ThemeNineteen/Static/RightMenu');
$this->load->view('ThemeNineteen/Static/Footer');
?>
