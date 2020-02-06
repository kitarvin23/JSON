<?php 
include 'config.php';
include 'class.gadget.php';
header('Content-Type: application/json');
$gadget = new gadget();
$list=$gadget->get_gadget();
echo "{\"gadget\":";
echo json_encode($list);
echo "}";
?>
