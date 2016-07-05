<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/5/16
 * Time: 10:03 PM
 */
class AArray
{
    private $data = [];

    public function add($key, $value)
    {
        if (count($key) % 2 == 0) {
            $this->data[$key] = $value;
        }
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function remove($key)
    {
        unset($this->data[$key]);
    }
}