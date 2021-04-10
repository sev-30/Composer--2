<?php

//Tu devras utiliser la méthode statique world() de la classe SayHello du 
//package nouvellement installé pour afficher 'Hello World, Composer!'.

use HelloWorld\SayHello;

require_once '../vendor/autoload.php';

$Hello = new SayHello();
echo $Hello->world();
