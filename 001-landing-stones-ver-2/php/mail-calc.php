<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$data = json_decode($_POST['data'], true);
if (empty($data['message']))
  $data['message'] = createMessage($data['fields']);

sendMail($data['recipient'], $data['message'], $data['title'],
         'stones@petromramor.com',
         'PetroMramor Ltd - stone processing since 2002',
         $_FILES['file']);

function createMessage($fields) {
  $message = "";
  foreach ($fields as $key => $value)
    $message .= $key . ": " . $value . "<br/>";
  return $message;
}

function sendMail($mailTo, $message, $subject, $fromMail, $fromName, $file) {
    $boundary = "--".md5(uniqid(time())); 
    $mailheaders = "MIME-Version: 1.0;\r\n"; 
    $mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n"; 
    $mailheaders .= "From: $fromName <$fromMail>\r\n"; 

    $multipart = "--$boundary\r\n"; 
    $multipart .= "Content-Type: text/html; charset=windows-1251\r\n";
    $multipart .= "Content-Transfer-Encoding: base64\r\n";
    $multipart .= "\r\n";
    $multipart .= chunk_split(base64_encode(iconv("utf8", "windows-1251", $message)));

    // Закачиваем файл 
    if (!empty($file)) {
        $fileType = $file['type'];
        $fileName = $file['name'];
        $handle = fopen($file['tmp_name'], "r");
        $content = fread($handle, $file['size']);
        fclose($handle);
        $content = chunk_split(base64_encode($content));

        $message_part = "\r\n--$boundary\r\n"; 
        $message_part .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";  
        $message_part .= "Content-Transfer-Encoding: base64\r\n"; 
        $message_part .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n"; 
        $message_part .= "\r\n";
        $message_part .= $content;
        $message_part .= "\r\n--$boundary--\r\n";
        $multipart .= $message_part;
    }

    var_dump(mail($mailTo, iconv("utf8", "windows-1251", $subject), $multipart, $mailheaders));
}
?>
