<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div class="col-2">
  <div class="shadow"> </div>
  <?php if ($settings->settingFacebookCode!=""): ?>
    <div class="content content-last">
      <div class="content-bg">
        <div class="content-bg-bottom">
          <div class="inner-content">
            <br>
            <?=htmlspecialchars_decode($settings->settingFacebookCode)?>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow"> </div>
  <?php endif; ?>
  <?php if ($notices): ?>
    <?php foreach ($notices as $key => $value): ?>
      <div class="content content-last">
        <div class="content-bg">
          <div class="content-bg-bottom">
            <h2>
              <a href="<?=base_url('Notice/Detail/'.$value->noticeSeo.'/'.$value->noticeId)?>"><?=$value->noticeTitle?></a>
              <span class="pull-right news-time"><?=PlainTurkishDate($value->noticeDate)?></span>
            </h2>
            <div class="inner-content">
              <br>
              <p><?=mb_substr(strip_tags($value->noticeContent),0,220,'UTF-8')?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="shadow"> </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="content content-last">
      <div class="content-bg">
        <div class="content-bg-bottom">
          <div class="inner-content">
            <p style="text-align:center;padding-top:35px;"><?=langWrite('lang54')?></p>
          </div>

	 			<h2>Vizyon2 - Videolar</h2>
				<div class="inner-content_video">
					<iframe width="480" height="315" src="https://www.youtube.com/embed/rBIe63JzE7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

	 			<h2>Vizyon2 - Oldschool MMORPG Deneyimi</h2>
				<div class="inner-content">
					<p>
						Gerçek 1-99 Hardschool tarzı ile sizi büyüleyen, Vizyon2 sizlere 
						<strong>adaletli</strong> ve eşit bir oyun ortamı sunuyor. Uzun ömürlü ve kalıcı 
						sunucu mantığı ile ilerleyen Vizyon2, bugüne kadar oynadığınız tüm sunuculardan 
						daha gerçekçi bir maziyi sundurmayı hedefliyoruz. Sizler de Vizyon2'i oynayarak 
						<strong>1-99'un ilk ve has halinin</strong> geri dönüşüne şahit olabilirsiniz!
					</p>

					<h4><font color="7b1300">Genel özellikler;</font></h4><br>
					<ul>
						<li>Vizyon2 gerçekten zor bir oyun. İlk sürümün zorluğu örnek alınarak hazırlandı ve bu sunucuda ilerlemek için çoğu zaman taktiksel davranmalısınız.</li>
						<li>Tekdüze ve yapay bir oynanış yerine, gerçek bir farm deneyimi ile çeşitli savaş etkinlikleri Vizyon2'de karakterinizi geliştirmeniz için özel olarak hazırlanmıştır.</li>
						<li>P2W olmayan, gerçek bir emek sunucu hissiyatını oyunculara hissettirmek için çoğu güçlendiriciyi kaldırdık. Nesne Market üzerinden hızlı ilerleme mantığını tamamen ortadan kaldırdık.</li>
						<li>Sizlere özlem duyduğunuz 2008 yıllarını tekrar yaşatmaya geliyoruz.</li>
						<li>Ekran Kartı olmayan cihazlar için oyun yapısını baştan aşağı değiştirerek yüksek FPS ve kusursuz optimizasyon sağladık. Bu sayede aynı haritada binlerce oyuncu kasmadan savaşabilir.</li>
						<li>Sahte pazar ve bot oyuncular gibi gerçek dışı unsurları ortadan kaldırarak oyuncularımıza dürüst ve adil bir oyun ortamı sunduk.</li>
						<li>Hile ve bot kullanımının önüne geçmek için özel bir Anti-Hile yazılımı geliştirdik. Taktiksel savaş ve farm dinamikleri bu sunucuda ön plandadır.</li>
						<li>Ticareti aktif tutabilmek adına birçok eşyayı değerli kıldık ve gereksiz craft mantığını sunucudan uzak tuttuk. Kalıcı bir Hard Emek sunucu mantığını hayata geçirdik.</li>
						<br/>
					</ul>

				</div>

        </div>
      </div>
    </div>
    <div class="shadow"> </div>
  <?php endif; ?>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
