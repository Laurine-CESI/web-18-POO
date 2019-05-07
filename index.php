<?php

require_once './classes/Character.php';
require_once './classes/Magician.php';

$michel = new Character(10, 27, 528, 3);
$monique = new Character(13, 18, 250, 0.6);

/*
$michel->level = 10;
$michel->health = 27;
$michel->strength = 528;
$michel->maxSpeed = 3;

$monique->level = 13;
$monique->health = 18;
$monique->strength = 250;
$monique->maxSpeed = 0.6;
*/

$macron = new Magician(2, 4, 22, 18); 
var_dump($macron);


