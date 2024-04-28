<?php 

$data = [
    'action' => 'Syuting'
];

$action = $data['action'] ?? 'nothing';
$name = $data['name'] ?? 'Nothing';

echo $action . PHP_EOL;
echo $name . PHP_EOL;