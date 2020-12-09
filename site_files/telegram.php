<?php


$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "660112441:AAHMozJCdygrkE0qmNVMOy9uSJdFvbF0apA";
$chat_id = "-272164294";
$arr = array(
  'Name: ' => $name,
  'Phone: ' => $phone
  'Message: ' => $message);
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