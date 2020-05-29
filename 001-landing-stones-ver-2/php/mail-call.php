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
  foreach ($fields as $key => $value) {
    $message .= "
    " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>";
    }
  return "<table style='width: 100%;'>$message</table>";
}

function sendMail($data) {
  if (empty($data) || empty($data['recipient']) || empty($data['title']) || empty($data['message'])) {
    echo 'Проверьте правильность переданных параметров.';
    return;
  }
  $from = 'mail@onpix.ru';
  $to = $data['recipient'];
  $title = $data['title'];
  $message = $data['message'];
  $headers = "MIME-Version: 1.0" . PHP_EOL .
             "Content-Type: text/html; charset=utf-8" . PHP_EOL .
             "FROM: Onpix <$from>";
  var_dump(mail($to, $title, $message, $headers));
}
?>
