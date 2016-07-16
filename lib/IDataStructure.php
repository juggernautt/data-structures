<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/16/16
 * Time: 11:35 PM
 */
interface IDataStructure
{
    public function add($data);
    public function remove($data);
    public function get($index);
}