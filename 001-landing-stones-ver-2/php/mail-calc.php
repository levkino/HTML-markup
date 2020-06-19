<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$data = json_decode($_POST['data'], true);
if (empty($data['message']))
  $data['message'] = createMessage($data['fields']);
sendMail($data);

function createMessage($fields) {
  $c = true;
  $message = "";
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
  $separator = md5(time());
  $headers = "MIME-Version: 1.0" . PHP_EOL .
             "Content-Type: multipart/mixed; charset=utf-8; boundary=\"" . $separator . "\"" . PHP_EOL .
             "Content-Transfer-Encoding: 7bit" . PHP_EOL .
             "FROM: Onpix <$from>";

  // message
  $body = "--" . $separator . PHP_EOL;
  $body .= "Content-Type: text/html; charset=utf-8" . PHP_EOL;
  $body .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
  $body .= $data['message'] . PHP_EOL;

  // attachment
  $file = $_FILES['file'];
  $fileType = $file['type'];
  $fileName = $file['name'];
  $handle = fopen($file['tmp_name'], "r");
  $content = fread($handle, $file['size']);
  fclose($handle);
  $content = chunk_split(base64_encode($content));
  $body .= "--" . $separator . PHP_EOL;
  $body .= "Content-Type: $fileType; name=\"" . $fileName . "\"" . PHP_EOL;
  $body .= "Content-Transfer-Encoding: base64" . PHP_EOL;
  $body .= "Content-Disposition: attachment; filename=\"" . $fileName . "\"" . PHP_EOL;
  $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";  
  $body .= $content . PHP_EOL;
  $body .= "--" . $separator . "--";

  var_dump(mail($to, $title, $body, $headers));
}
?>
