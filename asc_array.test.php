<?php
require 'lib/asc_array.class.php';

$a = new AscArray();


$a->add(5);
$a->add(2);
$a->add(15);

$a->add(111);


var_dump($a->remove(15)); //should print 1
var_dump($a->remove(555)); //should print 0
var_dump($a->get_all()); //should print [2,5,111]