<?php
session_start();
require_once "config.php";
require_once "function.php";
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;

$mysqli = new mysqli(_DB_HOST, _DB_ID, _DB_PW, _DB_NAME);
if ($mysqli->connect_error) {
    die('無法連上資料庫 (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
