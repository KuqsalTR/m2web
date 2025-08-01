<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang161')?></h2>
        <div class="download-inner-content">
          <form id="ForgetPasswordChange" class="registerForm">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td><?=langWrite('lang219')?></td>
                  <td>
                    <input class="form-control" type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                  </td>
                </tr>
                <tr>
                  <td><?=langWrite('lang220')?></td>
                  <td>
                    <input class="form-control" type="password" placeholder="<?=langWrite('lang90')?>" name="passwordTwo" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <div class="g-recaptcha" data-sitekey="<?=googleKey?>" style="display: flex;justify-content: center;"></div>
                  </td>
                </tr>
                <input type="hidden" name="token" value="<?=$token?>">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
              </tbody>
            </table>
            <hr>
            <center>
              <input type="submit" value="<?=langWrite('lang169')?>" class="btn btn-danger btn-lg btn-block" tabindex="7">
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
