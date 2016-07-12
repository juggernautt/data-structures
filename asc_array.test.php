<?php
require 'lib/asc_array.class.php';

$a = new AscArray();

class Animal {
    private $_name;
    private $_age;


    public function __construct($name, $age)
    {
        $this->_name = $name;
        $this->_age = $age;
    }

    public function value()
    {
        return $this->_age;
    }
}

$a1 = new Animal("Ben", 4.5);
$a2 = new Animal("Masha", 16);

$a->add($a2);
$a->add($a1);

var_dump($a->remove($a1)); //should print 1
//var_dump($a->remove(555)); //should print 0
var_dump($a->get_all()); //should print [2,5,111]
