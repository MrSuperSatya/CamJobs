<?php

header('Content-type: application/json');
$data = [];
$data[0] = 'aaaaa';
$data[1] = 'bbbbb';
$data[2] = 'ccccc';
$data[3] = 'ddddd';
$data[4] = 'eeeee';

echo json_encode($data);
