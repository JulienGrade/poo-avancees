<?php
require_once 'JsonFileReader.php';

$reader = new JsonFileReader();
$items = $reader->readFileAsAssociativeArray('json');
// Renverra une exception
//$items = $reader->readFileAsAssociativeArray('truc.json');

print_r($items);