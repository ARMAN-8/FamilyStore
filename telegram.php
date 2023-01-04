<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "1932020855:AAFRKJ2QByCdFc8PHUEKUJj-Ogo1k7HYW0E";
$chat_id = "-529977448";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: https://degdarr.kz/danke.html');
} else {
  /* echo (Error); */
  header('Location: https://degdarr.kz/danke.html');
}
?>