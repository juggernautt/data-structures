<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/5/16
 * Time: 10:03 PM
 */
require 'lib/aarray.class.php';

$a = new AArray();
$b = new AArray();

$a->add("foo", "bar");
$a->add("kuku", "muku");

$b->add("bbb", "111");

var_dump($a->get("ppp"));
var_dump($a->get("foo"));

$a->remove("foo");
var_dump($a->get("foo"));

$a = [];
$a['kuku'] = 'kdjdkjf';
$a['kuk'] = "dlfdlfj";