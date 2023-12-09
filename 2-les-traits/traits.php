<?php

// Les traits sont une structure de type classe qui offre un moyen de partager
// des fonctionnalités (méthodes) dans des scénarios où l'héritage n'est pas une option.
// Attention, il est possible d'avoir des conflits si vos traits contiennent les mêmes noms
// de méthodes que d'autres traits ou d'autres classes.
require_once 'Album.php';
require_once 'Connection.php';

$album = new Album();
print $album->getClassName() . PHP_EOL;

$connection = new Connection();
print $connection->getClassName() . PHP_EOL;