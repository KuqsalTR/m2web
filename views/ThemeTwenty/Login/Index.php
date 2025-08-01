<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang81')?></h2>
        <div class="download-inner-content">
          <?php if (($this->uri->segment(2)=="EmailStatus")&&($this->uri->segment(3)=="Success")): ?>
            <br>
            <h1 class="text-center">E-Posta değiştirme İşlemi Başarılı</h1>
            <br><br>
          <?php endif; ?>
          <?php if (($this->uri->segment(2)=="EmailStatus")&&($this->uri->segment(3)=="Error")): ?>
            <br>
            <h1 class="text-center">E-Posta değiştirme işleminde hata meydana geldi!<br>Tekrar deneyiniz!</h1>
            <br><br>
          <?php endif; ?>
          <form id="loginForm" class="registerForm">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td><?=langWrite('lang66')?></td>
                  <td>
                    <input class="form-control" type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
                  </td>
                </tr>
                <tr>
                  <td><?=langWrite('lang68')?></td>
                  <td>
                    <input class="form-control" type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                  </td>
                </tr>
                <?php if (pinSystem['status']==1): ?>
                  <tr>
                    <td><?=langWrite('lang70')?></td>
                    <td>
                      <input class="form-control" type="password" placeholder="<?=langWrite('lang91')?>" name="pinPassword" minlength="<?=pinSifre['min']?>" maxlength="<?=pinSifre['max']?>" required>
                    </td>
                  </tr>
                <?php endif; ?>
                <tr>
                  <td colspan="2">
                    <div class="g-recaptcha" data-sitekey="<?=googleKey?>" style="display: flex;justify-content: center;"></div>
                  </td>
                </tr>
                <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              </tbody>
            </table>
            <hr>
            <center>
              <input type="submit" value="<?=langWrite('lang81')?>" class="btn btn-danger btn-lg btn-block" tabindex="7">
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
