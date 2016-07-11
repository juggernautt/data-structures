<?php

/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/5/16
 * Time: 10:23 PM
 */
class AscArray
{
    private $data = [];

    public function add($num)
    {
        $inserted = false;
        for ($i = 0; $i < count($this->data); $i++) {
            if ($num < $this->data[$i]) {
                array_splice($this->data, $i, 0, array($num));
                $inserted = true;
                break;
            }
        }
        if(!$inserted) {
            $this->data[] = $num;
        }

    }


    /**
     * Remove all occurences of $num in array.
     * @return  int - amount of elements that were removed
     * @param $num
     */
    public function remove($num)
    {
        $removed = 0;
        for ($i = 0; $i < count($this->data); $i++) {
            if ($num == $this->data[$i]) {
               unset($this->data[$i]);
                $removed++;
            }
        }
        return $removed;
    }

    public function get_all()
    {
        return $this->data;
    }
}