<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang94')?></h2>
        <div class="download-inner-content">
          <?php if (writeSession('userId')): ?>
            <br>
            <strong><center><br><h5><?=langWrite('lang529')?></h5><br></center></strong>
            <br>
          <?php elseif(registerStatus!="1"): ?>
            <br>
            <strong><center><br><h5><?=langWrite('lang530')?></h5><br></center></strong>
            <br>
          <?php else: ?>
            <form id="register" class="registerForm">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td><?=langWrite('lang65')?></td>
                    <td>
                      <input class="form-control" type="text" placeholder="<?=langWrite('lang86')?>" name="realName" minlength="<?=adSoyad['min']?>" maxlength="<?=adSoyad['max']?>" required>
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang66')?></td>
                    <td>
                      <input class="form-control" type="text" placeholder="<?=langWrite('lang87')?>" name="account_name" minlength="<?=hesapAdi['min']?>" maxlength="<?=hesapAdi['max']?>" required>
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang67')?></td>
                    <td>
                      <input class="form-control" type="text" placeholder="<?=langWrite('lang88')?>" name="e-mail" maxlength="100" required>
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang68')?></td>
                    <td>
                      <input class="form-control" type="password" placeholder="<?=langWrite('lang89')?>" name="password" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang69')?></td>
                    <td>
                      <input class="form-control" type="password" placeholder="<?=langWrite('lang90')?>" name="passwordTwo" minlength="<?=sifre['min']?>" maxlength="<?=sifre['max']?>" required>
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
                    <td><?=langWrite('lang71')?></td>
                    <td>
                      <input class="form-control phone" type="text" placeholder="<?=langWrite('lang92')?>" name="phone" required>
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang72')?></td>
                    <td>
                      <input class="form-control deleteCode" type="text" placeholder="<?=langWrite('lang93')?>" name="deleteCode" minlength="7" maxlength="7" required value="<?=rand(1111111,9999999)?>">
                    </td>
                  </tr>
                  <tr>
                    <td><?=langWrite('lang73')?></td>
                    <td>
                      <select class="form-control selectform" name="referans">
                        <option value="0">Seçiniz</option>
                        <?php foreach ($reference as $key => $value): ?>
                          <option value="<?=$value?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td colspan="2" style="position:relative">
                      <input id="check2" type="checkbox" name="check" value="check" style="position: absolute;top:8px;height:15px;width:15px;">
                      <label for="check2" style="margin-left:25px;">
                        <a id="sozlesmeBtn">
                          <font color="#de694a"><?=langWrite('lang74')?></font>
                        </a><?=langWrite('lang75')?>
                      </label>
                    </td>
                  </tr>
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
                <input type="submit" value="<?=langWrite('lang94')?>" class="btn btn-danger btn-lg btn-block" tabindex="7">
              </center>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('ThemeTwenty/Static/RightMenu');
$this->load->view('ThemeTwenty/Static/Footer');
?>
