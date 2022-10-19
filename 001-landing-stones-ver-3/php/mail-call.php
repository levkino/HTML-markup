<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$post = file_get_contents('php://input');
$data = json_decode($post, true);
if (empty($data['message']))
  $data['message'] = createMessage($data['fields']);
sendMail($data);

function createMessage($fields) {
  $message = "";
  foreach ($fields as $key => $value)
    $message .= $key . ": " . $value . "<br/>";
  return $message;
}

function sendMail($data) {
  if (empty($data) || empty($data['recipient']) || empty($data['title']) || empty($data['message'])) {
    echo 'Проверьте правильность переданных параметров.';
    return;
  }
  $from = 'stones@petromramor.com';
  $to = $data['recipient'];
  $title = $data['title'];
  $message = $data['message'];
  $headers = "MIME-Version: 1.0" . PHP_EOL .
             "Content-Type: text/html; charset=utf-8" . PHP_EOL .
             "FROM: PetroMramor Ltd - stone processing since 2002 <$from>";
  var_dump(mail($to, $title, $message, $headers), $message);
}
?>
