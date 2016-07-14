<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/14/16
 * Time: 4:12 PM
 */

require 'lib/linked_list.class.php';

$l = new AscLinkedList();
$l->add(10);
$l->add(5);
$l->add(30);
$l->add(6);
$l->add(1);

//$l->remove(5);
$all = $l->get_all();
var_dump($all);