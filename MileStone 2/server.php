<?php
require __DIR__ . '/database.php';

$json = json_encode($cards);

header('Content-Type: application/json');

echo $json;
?>