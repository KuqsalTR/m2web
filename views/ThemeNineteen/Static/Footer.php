<?php defined('BASEPATH') OR exit('No direct script access allowed')?>

<?php if ($membershipAgreement): ?>

  <div id="sozlesme" class="modal">

    <div class="modal-content">

      <span class="close">&times;</span>

      <h2><?=langWrite('lang84')?></h2>

      <p><?=htmlspecialchars_decode($membershipAgreement->pageContent)?></p>

    </div>

  </div>

<?php endif; ?>

<?php if ($links->discordWidget!=""): ?>

  <a class="discord-widget active" href="<?=$links->discord?>" title="Discord Adresine Giriş Yap">

    <img src="https://www.vizyon2.com/discord7.png">

  </a>

<?php endif; ?>

<footer role="contentinfo">

  <div class="container">

    <a class="pegi" href="javascript:void(0)">

      <img style="width: 46px;" src="<?=base_url('assets/ThemeNineteen/images/12yellow.png')?>" alt="PEGI 12">

      <img src="<?=base_url('assets/ThemeNineteen/images/online.png')?>" alt="Online">

      <img src="<?=base_url('assets/ThemeNineteen/images/play.png')?>" alt="Gewalt">

    </a>

    <a class="usk" href="javascript:void(0)">

      <img src="<?=base_url('assets/ThemeNineteen/images/12.png')?>" alt="USK 12">

    </a>

    <a class="safeplay" href="javascript:void(0)">

      <img src="<?=base_url('assets/ThemeNineteen/images/safeplay.png')?>" alt="safeplay">

    </a>

    <p>

      <?=$settings->settingWebFooterText?>

    </p>

    <?php if (paytr['status']=="1"): ?>

      <br><br>

      Sanal Mağaza Sağlayıcı İletişim Bilgileri: PayTR Ödeme ve Elektronik Para Kuruluşu A.Ş.

      <br>

      Telefon: +90 850 441 32 66

      <br>

      <a href="https://www.paytr.com" target="_blank">www.paytr.com</a>

      <br><br>

    <?php endif; ?>

    <?php if (paywant['status']=="1"): ?>

      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Paywant Technology LTD.

      <br>

      Telefon: +90 850 302 38 83

      <br>

      Mail : <a href="mailto:contact@paywant.com">contact@paywant.com</a> <a href="https://paywant.com" target="_blank">paywant.com</a>

      <br>

    <?php endif; ?>

    <?php if (payreks['status']=="1"): ?>

      <br><br>

      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Payreks Elektronik Cüzdan

      <br>

      Telefon: +90 850 840 99 39

      <br>

      Mail : <a href="mailto:bilgi@payreks.com">bilgi@payreks.com</a> <a href="https://payreks.com" target="_blank">payreks.com</a>

      <br>

    <?php endif; ?>

    <?php if (payrill['status']=="1"): ?>

      <br><br>

      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Payrill Sanal Mağaza

      <br>

      Telefon: +90 850 302 38 83

      <br>

      Mail : <a href="mailto:contact@payrill.com">contact@payrill.com</a> <a href="https://payrill.com" target="_blank">payrill.com</a>

      <br>

    <?php endif; ?>

    <?php if (kasagame['status']=="1"): ?>

      <br><br>

      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Kasagame

      <br>

      Mail : <a href="mailto:iletisim@kasagame.com">iletisim@kasagame.com</a> <a href="https://kasagame.com" target="_blank">kasagame.com</a>

      <br>

    <?php endif; ?>

  </div>

</footer>

<script src="<?=base_url('assets/ThemeNineteen/js/jquery.min.js')?>"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src="<?=base_url()?>assets/js/mask.js"></script>

<script src="<?=base_url('assets/js/fancybox.js')?>"></script>

<script src="<?=base_url('assets/js/ajax.js')?>"></script>

<script src="<?=base_url('assets/js/main.js')?>"></script>

<script type="text/javascript">

var modal = document.getElementById("sozlesme");

var btn = document.getElementById("sozlesmeBtn");

var span = document.getElementsByClassName("close")[0];

if (btn) {

  btn.onclick = function() {

    modal.style.display = "block";

  }

  span.onclick = function() {

    modal.style.display = "none";

  }

  window.onclick = function(event) {

    if (event.target == modal) {

      modal.style.display = "none";

    }

  }

}

</script>

<script type="text/javascript">

var o=$(".tabcontrols");

var l=o.find("li");

var b=l.find("a");

var m=o.parent();

var n=m.find(".tab");

if(b.length!=n.length){

  throw"tabcontrol - number of controls don't match with number of tabs!"

}

b.each(function(p){

  $(this).on("click",function(q){

    q.preventDefault();q.stopPropagation();c(p)

  })

});

function c(p){

  l.removeClass("selected");

  $(l.get(p)).addClass("selected");

  n.removeClass("selected");

  $(n.get(p)).addClass("selected")

}

</script>

</body>

</html>

