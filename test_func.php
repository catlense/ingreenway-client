<?php

$rem = strtotime('2021-08-15 14:00:00') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
$answer = [];
if($day) array_push($answer, ['days'=>$day]);
if($hr) array_push($answer, ['hours'=>$hr]);
if($min) array_push($answer, ['minuts'=>$min]);
if($sec) array_push($answer, ['secs'=>$sec]);
echo json_encode($answer);
?>

