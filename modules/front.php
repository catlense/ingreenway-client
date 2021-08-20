<?php

session_start();

$method = $_GET['method'];

$flashEndTime = strtotime('2021-08-22 18:00:00');

if(!$method) return;

switch($method) {
    case 'hide_flash':
        $_SESSION['user']->flash_hidden = true;
        break;
    case 'get_flash_time':
        $rem = $flashEndTime - time();
        $day = floor($rem / 86400);
        $hr  = floor(($rem % 86400) / 3600);
        $min = floor(($rem % 3600) / 60);
        $sec = floor($rem % 60);
        $answer = [];
        
        array_push($answer, ['days'=>$day]);
        array_push($answer, ['hours'=>$hr]);
        array_push($answer, ['minuts'=>$min]);
        array_push($answer, ['secs'=>$sec]);
        echo json_encode($answer);
        break;
    case 'get_flash_time_end':
        echo json_encode(['date'=>$flashEndTime]);
        break;
    case 'close_cookie':
        $_SESSION['user']->cookie_accepted = true;
        break;
    default: echo json_encode(['type'=>'error', 'text'=>'case not found']);
}

?>