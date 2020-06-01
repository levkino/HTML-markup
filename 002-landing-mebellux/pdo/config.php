<?php
/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "potolkiv_mebel";
$password   = "Ph&by60V";
$dbname     = "potolkiv_mebel";
$dsn        = "mysql:host=$host;dbname=$dbname;charset=utf8";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              );

$connection = new PDO($dsn, $username, $password, $options);
