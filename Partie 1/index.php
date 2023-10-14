<?php
require 'Personnage.php';

$merlin = new Personnage("Merlin");

var_dump($merlin);

$merlin->regenerer();
var_dump($merlin->getVie());



$harry = new Personnage("Harry");




$merlin->attaque($harry);

if ($harry->mort()) echo ";(";
var_dump($harry);