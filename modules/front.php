<?php

session_start();

$method = $_GET['method'];

if(!$method) return;

switch($method) {
    case 'hide_flash':
        $_SESSION['user']->flash_hidden = true;
        break;
    default: echo json_encode(['type'=>'error', 'text'=>'case not found']);
}

?>