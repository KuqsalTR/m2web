<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeTwenty/Static/Header');
$this->load->view('ThemeTwenty/Static/LeftMenu');
?>
<div id="download" class="col-2">
  <div class="content content-last">
    <div class="content-bg">
      <div class="content-bg-bottom">
        <h2 class="pre-social"><?=langWrite('lang254')?></h2>
        <div class="download-inner-content">
          <h1 class="text-center">
            <?=langWrite('lang240')?>
            <br>
            <br>
            <?=langWrite('lang255')?>
            <br>
            <br>
          </h1>
          <form id="TicketAdd" class="registerForm">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td><?=langWrite('lang256')?></td>
                  <td>
                    <select class="selectform" name="category">
                      <?php foreach ($ticketCategory as $key => $value): ?>
                        <option value="<?=$value?>"><?=$value?></option>
                      <?php endforeach; ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><?=langWrite('lang258')?></td>
                  <td>
                    <input class="form-control" type="text" name="title" placeholder="<?=langWrite('lang258')?>">
                  </td>
                </tr>
                <tr>
                  <td><?=langWrite('lang259')?></td>
                  <td>
                    <textarea class="form-control" placeholder="<?=langWrite('lang259')?>" name="description" rows="8" cols="80"></textarea>
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
            <center>
              <input type="submit" value="<?=langWrite('lang260')?>" class="btn btn-danger btn-lg btn-block" tabindex="7">
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
