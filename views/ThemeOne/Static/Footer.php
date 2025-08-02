<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<footer class="footer">
  <div class="soc-block">
    <div class="social">
      <?=langWrite('lang55')?>
      <?php if ($links->facebook!=""): ?>
        <a href="<?=$links->facebook?>" class="fb" target="_blank"></a>
      <?php endif; ?>
      <?php if ($links->instagram!=""): ?>
        <a href="<?=$links->instagram?>" class="inst" target="_blank"></a>
      <?php endif; ?>
      <?php if ($links->facebookGroup!=""): ?>
        <a href="<?=$links->facebookGroup?>" class="fb" target="_blank"></a>
      <?php endif; ?>
    </div>
    <div class="lang-block-bottom">
      <div id="dropdown-block-b" class="dropdown-block-b" tabindex="1">
        <div>
          <?php if (get_cookie('lang')=="english"): ?>
            <span class="lang"><?=langWrite('lang3')?></span>
          <?php else: ?>
            <span class="lang"><?=langWrite('lang4')?></span>
          <?php endif; ?>
        </div>
        <ul class="dropdown">
          <li class="goLang"><a href="<?=base_url('Index/Language/TR')?>"><span class="lang"><?=langWrite('lang4')?></span></a></li>
          <li class="goLang"><a href="<?=base_url('Index/Language/EN')?>"><span class="lang"><?=langWrite('lang3')?></span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-logo">
    <img src="<?=base_url('assets/images/logo.png')?>" width="200px">
  </div>
  <br>
  <br>
  <div class="footer-menu">
    <ul>
      <li><a href="<?=base_url()?>"><?=langWrite('lang56')?></a></li>
      <li><a href="<?=base_url('Download')?>"><?=langWrite('lang57')?></a></li>
      <li><a href="<?=base_url('Forget/Password')?>"><?=langWrite('lang58')?></a></li>
      <li><a onclick='new modal("#sozlesme"); return false'><?=langWrite('lang59')?></a></li>
      <?php if ($links->wiki!=""): ?>
        <li><a href="<?=$links->wiki?>"><?=langWrite('lang60')?></a></li>
      <?php endif; ?>
      <?php if ($links->discord!=""): ?>
        <li><a href="<?=$links->discord?>"><?=langWrite('lang61')?></a></li>
      <?php endif; ?>
      <?php if ($links->facebook!=""): ?>
        <li><a href="<?=$links->facebook?>"><?=langWrite('lang62')?></a></li>
      <?php endif; ?>
      <?php if ($links->facebookGroup!=""): ?>
        <li><a href="<?=$links->facebookGroup?>"><?=langWrite('lang63')?></a></li>
      <?php endif; ?>
    </ul>
  </div>
  <div class="copyright">
    <?=$settings->settingWebFooterText?>
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
      <br><br>
      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Paywant Technology LTD.
      <br>
      Telefon: +90 850 302 38 83
      <br>
       Mail : <a href="mailto:contact@paywant.com">contact@paywant.com</a> <a href="https://paywant.com" target="_blank">paywant.com</a>
      <br><br>
    <?php endif; ?>
    <?php if (payreks['status']=="1"): ?>
      <br><br>
      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Payreks Elektronik Cüzdan
      <br>
      Telefon: +90 850 840 99 39
      <br>
       Mail : <a href="mailto:bilgi@payreks.com">bilgi@payreks.com</a> <a href="https://payreks.com" target="_blank">payreks.com</a>
      <br><br>
    <?php endif; ?>
    <?php if (payrill['status']=="1"): ?>
      <br><br>
      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Payrill Sanal Mağaza
      <br>
      Telefon: +90 850 302 38 83
      <br>
       Mail : <a href="mailto:contact@payrill.com">contact@payrill.com</a> <a href="https://payrill.com" target="_blank">payrill.com</a>
      <br><br>
    <?php endif; ?>
    <?php if (kasagame['status']=="1"): ?>
      <br><br>
      Sanal Mağaza Sağlayıcı İletişim Bilgileri: Kasagame
      <br>
       Mail : <a href="mailto:iletisim@kasagame.com">iletisim@kasagame.com</a> <a href="https://kasagame.com" target="_blank">kasagame.com</a>
      <br><br>
    <?php endif; ?>
  </div>
</footer>
</div>
<?php if ($youtubeVideo): ?>
  <?php foreach ($youtubeVideo as $key => $value): ?>
    <div class='modal_window videoModal' id="video_modal<?=$value->youtubeId?>">
      <a href="#" class='close_mw close-r'></a>
      <div class="popup-block">
        <?=$value->youtubeIframe?>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
<?php if ($membershipAgreement): ?>
  <div class='modal_window sozlesme_page' id="sozlesme">
    <a href="#" class='close_mw close-r'></a>
    <div class="popup-block">
      <div class="reg-title">
        <?=langWrite('lang84')?>
      </div>
      <div class="reg-form">
        <p><?=htmlspecialchars_decode($membershipAgreement->pageContent)?></p>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($links->discordWidget!=""): ?>
  <a class="discord-widget active" href="<?=$links->discord?>" title="Discord Adresine Giriş Yap">
    <img src="https://discordapp.com/api/guilds/<?=$links->discordServerId?>/embed.png?style=<?=$links->discordWidget?>">
  </a>
<?php endif; ?>
<script src="<?=base_url('assets/ThemeOne/js/jquery-2.1.4.min.js')?>"></script>
<script src="<?=base_url('assets/ThemeOne/js/modalx.js')?>"></script>
<script src="<?=base_url('assets/ThemeOne/js/slider.js')?>"></script>
<script src="<?=base_url('assets/ThemeOne/js/mask.js')?>"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="<?=base_url('assets/js/fancybox.js')?>"></script>
<script src="<?=base_url('assets/js/ajax.js')?>"></script>
<script src="<?=base_url('assets/js/main.js')?>"></script>
<script>
function DropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('div');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
DropDown.prototype = {
  initEvents : function() {
    var obj = this;
    obj.dd.on('click', function(event){
      $(this).toggleClass('active');
      return false;
    });
    obj.opts.on('click',function(){
      var opt = $(this);
      obj.val = opt.find('a').html();
      obj.index = opt.index();
      obj.placeholder.html(obj.val);
    });
  },
  getValue : function() {
    return this.val;
  },
  getIndex : function() {
    return this.index;
  }
}
$(function() {
  var dd = new DropDown( $('#dropdown-block') );
  $(document).click(function() {
    $('.dropdown-block').removeClass('active');
  });
});
$('.goLang a').on('click',function(){
  window.location.href = $(this).attr('href');
});
$(function() {
  var dd = new DropDown( $('#dropdown-block-b') );
  $(document).click(function() {
    $('.dropdown-block-b').removeClass('active');
  });
});
</script>
</body>
</html>
