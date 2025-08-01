<?php
if (webTitleCheck('index')) {
  echo langWrite('lang1');
}else if (webTitleCheck('PageNotFound')) {
  echo langWrite('lang2');
}else if (webTitleCheck('Register')) {
  echo langWrite('lang94');
}else if (webTitleCheck('Download')) {
  echo langWrite('lang109');
}else if (webTitleCheck('Ranking') && webTitleCheck('Player')) {
  echo langWrite('lang135');
}else if (webTitleCheck('Ranking') && webTitleCheck('Guild')) {
  echo langWrite('lang143');
}else if (webTitleCheck('Notice')) {
  echo $notice->noticeTitle.' | '.langWrite('lang151');
}else if (webTitleCheck('Login')) {
  echo langWrite('lang153');
}else if (webTitleCheck('Forget') && (webTitleCheck('Password') || webTitleCheck('PasswordChange'))) {
  echo langWrite('lang161');
}else if (webTitleCheck('Forget') && (webTitleCheck('Pin') || webTitleCheck('PinChange'))) {
  echo langWrite('lang173');
}else if (webTitleCheck('ControlPanel') && webTitleCheck('Log')) {
  echo langWrite('lang384');
}else if (webTitleCheck('ControlPanel') && webTitleCheck('Bug')) {
  echo langWrite('lang403');
}else if (webTitleCheck('ControlPanel')) {
  echo langWrite('lang177');
}else if (webTitleCheck('Change') && webTitleCheck('Email')) {
  echo langWrite('lang204');
}else if (webTitleCheck('Change') && webTitleCheck('Password')) {
  echo langWrite('lang217');
}else if (webTitleCheck('Change') && webTitleCheck('Pin')) {
  echo langWrite('lang223');
}else if (webTitleCheck('Change') && webTitleCheck('DeleteCode')) {
  echo langWrite('lang227');
}else if (webTitleCheck('Change') && webTitleCheck('SafeBox')) {
  echo langWrite('lang234');
}else if (webTitleCheck('Change') && webTitleCheck('SecurityPassword')) {
  echo langWrite('guvenlikSifresiDegistir');
}else if (webTitleCheck('Coupon') && webTitleCheck('Logs')) {
  echo langWrite('lang196');
}else if (webTitleCheck('Coupon')) {
  echo langWrite('lang195');
}else if (webTitleCheck('Support') && webTitleCheck('Add')) {
  echo langWrite('lang254');
}else if (webTitleCheck('Support') && webTitleCheck('View')) {
  echo $ticketInfo->ticketTitle.langWrite('lang270');
}else if (webTitleCheck('Support')) {
  echo langWrite('lang238');
}else if (webTitleCheck('Market')) {
  echo langWrite('lang287');
}else if (webTitleCheck('Reference')) {
  echo langWrite('lang199');
}else if (webTitleCheck('AccountBan')) {
  echo langWrite('lang417');
}else if (webTitleCheck('YoutubeVideos')) {
  echo langWrite('lang425');
}else if (webTitleCheck('Payment') && webTitleCheck('Buy')) {
  echo langWrite('lang194');
}else if (webTitleCheck('Payment') && webTitleCheck('Paywant')) {
  echo langWrite('lang427');
}else if (webTitleCheck('Payment') && webTitleCheck('Payreks')) {
  echo langWrite('lang436');
}else if (webTitleCheck('Payment') && webTitleCheck('KasaGame')) {
  echo langWrite('lang498');
}else if (webTitleCheck('Ranking') && webTitleCheck('Detail') && isset($detail->name)) {
  echo $detail->name.' '.langWrite('lang438');
}else {
  echo langWrite('lang1');
}
?>
