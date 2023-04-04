<?php

/* https://api.telegram.org/bot2002584893:AAEi9jmm_DtlRbCFOc-O-rnYk-NVlyCjrvM/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "2002584893:AAEi9jmm_DtlRbCFOc-O-rnYk-NVlyCjrvM";
$chat_id = "-534383677";
$arr = array(
  'ПІБ: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>