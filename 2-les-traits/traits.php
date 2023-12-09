<?php

// Les traits sont une structure de type classe qui offre un moyen de partager
// des fonctionnalités (méthodes) dans des scénarios où l'héritage n'est pas une option.
require_once 'Album.php';
require_once 'Connection.php';

$album = new Album();
print $album->getClassName() . PHP_EOL;

$connection = new Connection();
print $connection->getClassName() . PHP_EOL;