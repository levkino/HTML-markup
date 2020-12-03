<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$post = file_get_contents('php://input');
$data = json_decode($post, true);
loadForm($data['fileName']);

function loadForm($fileName) {
  if (empty($fileName)) {
    echo 'Проверьте правильность переданных параметров.';
    return;
  }
  echo file_get_contents('../forms/' . $fileName);
}
?>
