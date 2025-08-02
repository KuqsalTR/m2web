<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('ThemeOne/Static/Header');
?>
<div class="container">
  <?php $this->load->view('ThemeOne/Static/LeftMenu') ?>
  <main class="content fontSizeOnUc">
    <div class="panel panel-buyuk">
      <div class="panel-heading">
        <center>
          <?=langWrite('lang135')?>
        </center>
      </div>
      <?php if(ranking['status']!="1"): ?>
        <br>
        <h1 class="text-center"><?=langWrite('lang531')?></h1>
        <br><br>
      <?php else: ?>
        <?php if ($rankingPlayer): ?>
          <div class="panel-body no-padding">
            <table class="table table-monster siralama">
              <thead>
                <tr>
                  <td>#</td>
                  <td><?=langWrite('lang136')?></td>
                  <td><?=langWrite('lang137')?></td>
                  <td class="hidden-xs"><?=langWrite('lang138')?></td>
                  <td class="hidden-xs"><?=langWrite('lang139')?></td>
                  <td class="hidden-xs"><?=langWrite('lang140')?></td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rankingPlayer as $key => $value): ?>
                  <tr class="<?=($key>2?'renk-purple':'renk-pink')?>">
                    <td>
                      <?php switch ($key) {
                        case 0:
                        echo '<img src="'.base_url('assets/ThemeOne/images/top-one-icon.png').'"/>';
                        break;
                        case 1:
                        echo '<img src="'.base_url('assets/ThemeOne/images/top-two-icon.png').'"/>';
                        break;
                        case 2:
                        echo '<img src="'.base_url('assets/ThemeOne/images/top-three-icon.png').'"/>';
                        break;
                        default:
                        echo ($key+1);
                        break;
                      } ?>
                    </td>
                    <td> <a href="<?=karakterDetay==1?base_url('Ranking/Detail/'.$value->name):'#'?>"><?=$value->name?></a> </td>
                    <td><?=$value->level?></td>
                    <td class="hidden-xs"><?=isset($value->guild_id)?$value->guildName:'-'?></td>
                    <td class="hidden-xs"><?=convertSeconds($value->playtime*60)?></td>
                    <td class="hidden-xs"><img src="<?=base_url('assets/ThemeOne/images/empire/'.$value->empire.'.jpg')?>" alt=""></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <h2> <center><?=langWrite('lang141')?></center> </h2>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </main>
  <?php $this->load->view('ThemeOne/Static/RightMenu'); ?>
</div>
<?php $this->load->view('ThemeOne/Static/Footer'); ?>
