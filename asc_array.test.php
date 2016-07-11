<?php
require 'lib/asc_array.class.php';

$a = new AscArray();


$a->add(5);
$a->add(5);
$a->add(15);
$a->add(15); // [5,5,15,15]

var_dump($a->remove(5)); //should print 1
var_dump($a->remove(555)); //should print 0
var_dump($a->get_all()); //should print [2,5,111]
