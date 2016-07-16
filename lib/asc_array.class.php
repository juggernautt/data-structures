<?php

/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/5/16
 * Time: 10:23 PM
 */
require_once('basic_data_structure.class.php');
require_once('IDataStructure.php');
class AscArray extends BasicDataStructure implements IDataStructure
{
    private $data = [];

    public function add($entity)
    {
        $this->log("New data: {$entity->value()}");
        $inserted = false;
        for ($i = 0; $i < count($this->data); $i++) {
            if (is_scalar($entity)) {
                $arg1 = $entity;
                $arg2 = $this->data[$i];
            } else {
                $arg1 = $entity->value();
                $arg2 = $this->data[$i]->value();
            }


            if ($arg1 < $arg2) {
                $this->insert($i, $entity);
                $inserted = true;
                break;
            }
        }
        if (!$inserted) {
            $this->data[] = $entity;
        }

    }

    public function get($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function log($msg)
    {
        parent::log("AscArray: $msg");
    }


    /**
     * Remove all occurences of $num in array.
     * @return  int - amount of elements that were removed
     * @param Animal $entity
     */
    public function remove($entity)
    {
        $removed = 0;
        for ($i = count($this->data) - 1; $i >= 0; $i--) {

            if (is_scalar($entity)) {
                $arg1 = $entity;
                $arg2 = $this->data[$i];
            } else {
                $arg1 = $entity->value();
                $arg2 = $this->data[$i]->value();
            }

            if ($arg1 == $arg2) {
                $this->delete($i);
                $removed++;
            }
        }
        return $removed;
    }

    public function get_all()
    {
        return $this->data;
    }

    private function insert($index, $num)
    {
        for ($i = count($this->data); $i > $index; $i--) {
            $this->data[$i] = $this->data[$i - 1];
        }
        $this->data[$index] = $num;
    }

    /**
     * @param $index
     * @return integer - deleted number
     */
    private function delete($index)
    {
        $num = $this->data[$index];
        for ($i = $index; $i < count($this->data) - 1; $i++) {
            $this->data[$i] = $this->data[$i + 1];
        }
        unset($this->data[count($this->data) - 1]);
        return $num;
    }

    public function count()
    {
        // TODO: Implement count() method.
    }
}