<?php

if (@isset($_GET['path'])) {
    $name = $_GET['path'];
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream; charset=utf-8');
header('Content-Disposition: attachment; filename='.basename($name));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($name));
ob_clean();
flush();
readfile($name);
exit;
