<?php
//ini_set("display_errors",1);
//error_reporting(E_ALL);
function debug($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function debug_die($array){
    echo "<pre>";
    print_r($array);
    exit;
}
function dd($array){
    var_dump($array);
    exit;
}
define("ROW_PER_PAGE",15);

?>
<!DOCTYPE html>
<html lang="en">
