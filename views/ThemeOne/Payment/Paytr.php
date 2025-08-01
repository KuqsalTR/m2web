<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<link rel="stylesheet" href="<?=base_url('assets/css/ep.css')?>">
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>PayTR ile Ep Yükle</center>
      </div>
      <form action="<?=base_url('Payment/PaytrKredi')?>" method="post" class="form-template">
        <label>Ep Fiyatları</label>
        <select name="epMiktar" style="width:100%" class="form-control">
          <?php foreach (market['epPrice'] as $key => $value): ?>
            <option style="color:black" value="<?=$key?>"><?=$value.' | '.$key.' ₺'?></option>
          <?php endforeach; ?>
        </select>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <br><br>
        <center>
          <button class="btn-default btn-block" type="submit">Kredi Kartı İle Satın Al</button>
        </center>
      </form>
      <form action="<?=base_url('Payment/PaytrHavale')?>" method="post" class="form-template">
        <label>Ep Fiyatları</label>
        <select name="epMiktar" style="width:100%">
          <?php foreach (market['epPrice'] as $key => $value): ?>
            <option style="color:black" value="<?=$key?>"><?=$value.' | '.$key.' ₺'?></option>
          <?php endforeach; ?>
        </select>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
        <br><br>
        <center>
          <button class="btn-default btn-block" type="submit">Havale İle Satın Al</button>
        </center>
      </form>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
