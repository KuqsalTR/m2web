<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang177')?>
        </center>
      </div>
      <div class="panel-body">
        <table height="30" cellspacing="5" cellpadding="5">
          <tbody>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang178')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$info->login?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang179')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=emailHidden($info->email,3)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang180')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$info->$marketEp?></td>
            </tr>
            <?php if ($info->last_play): ?>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang181')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"> 	<?=DetailTurkishDate($info->last_play)?></td>
              </tr>
            <?php endif; ?>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang182')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"> 	<?=DetailTurkishDate($info->create_time)?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang183')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$info->real_name?></td>
            </tr>
            <tr>
              <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang184')?></th>
              <td class="kontrolPaneliBilgiSag" width="495"><?=$info->status=="OK"?langWrite('lang202'):langWrite('lang203')?></td>
            </tr>
            <?php if (isset($info->last_ip)): ?>
              <tr>
                <th class="kontrolPaneliBilgiSol" width="184"><?=langWrite('lang185')?></th>
                <td class="kontrolPaneliBilgiSag" width="495"><?=$info->last_ip?></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <br>
        <?php if (market['status']==2): ?>
          <a class="button kontrolPaneliGenislik" style="background:#b70606;" href="<?=base_url('Payment/Buy')?>"><?=langWrite('lang194')?></a>
          <a class="button kontrolPaneliGenislik" style="background:#b70606;" href="<?=base_url('Coupon/Index')?>"><?=langWrite('lang195')?></a>
          <a class="button kontrolPaneliGenislik" style="background:#b70606;" href="<?=base_url('Coupon/Logs')?>"><?=langWrite('lang196')?></a>
        <?php endif; ?>
        <?php if (market['status']==1): ?>
          <a class="button kontrolPaneliGenislik itemshop iframe" style="background:#b70606;" href="<?=base_url('Market/Index')?>"><?=langWrite('lang193')?></a>
          <a class="button kontrolPaneliGenislik itemshop iframe" style="background:#b70606;" href="<?=base_url('Market/Buy')?>"><?=langWrite('lang194')?></a>
          <a class="button kontrolPaneliGenislik itemshop iframe" style="background:#b70606;" href="<?=base_url('Market/Coupon')?>"><?=langWrite('lang195')?></a>
          <a class="button kontrolPaneliGenislik itemshop iframe" style="background:#b70606;" href="<?=base_url('Market/CouponLogs')?>"><?=langWrite('lang196')?></a>
          <a class="button kontrolPaneliGenislik itemshop iframe" style="background:#b70606;" href="<?=base_url('Market/Logs')?>"><?=langWrite('lang197')?></a>
        <?php endif; ?>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Support/Index')?>"><?=langWrite('lang186')?></a>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/Email')?>"><?=langWrite('lang187')?></a>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/Password')?>"><?=langWrite('lang188')?></a>
        <?php if (pinSystem['status']==1): ?>
          <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/Pin')?>"><?=langWrite('lang189')?></a>
        <?php endif; ?>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/DeleteCode')?>"><?=langWrite('lang190')?></a>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/SafeBox')?>"><?=langWrite('lang191')?></a>
        <?php if (karakterGuvenlik['status']==1): ?>
          <a class="button kontrolPaneliGenislik" href="<?=base_url('Change/SecurityPassword')?>"><?=langWrite('guvenlikSifresiDegistir')?></a>
        <?php endif; ?>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('ControlPanel/Bug')?>"><?=langWrite('lang192')?></a>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('ControlPanel/Log')?>"><?=langWrite('lang200')?></a>
        <a class="button kontrolPaneliGenislik" href="<?=base_url('Logout')?>"><?=langWrite('lang201')?></a>
      </div>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
