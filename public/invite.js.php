<?php require_once './config.php';
session_name('INVITEID'); session_start();

header('Content-Type: application/javascript; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$uniqId = $_SESSION['invite_id'] ?: pathinfo($_SERVER['PATH_INFO'], PATHINFO_FILENAME);
printf("var %s='%s';",$uniqId,fa16e3ac);
