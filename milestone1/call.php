<?php

include_once __DIR__ .'/dati.php';

header('Content-Type: application/json');

echo json_encode($database);

?>