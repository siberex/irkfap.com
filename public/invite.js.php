<?php require_once './config.php';
session_name('INVITEID'); session_start();

header('Content-Type: application/javascript; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$uniqId = $_SESSION['invite_id'];
$fileId = $_SESSION['file_id'];
$fileName = pathinfo($_SERVER['PATH_INFO'], PATHINFO_FILENAME);
printf("var %s='%s';",$uniqId,$fileId===$fileName?fa16e3ac:$fileName.base64_encode($uniqId));
