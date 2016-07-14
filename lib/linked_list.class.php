<?php

/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/11/16
 * Time: 10:32 PM
 */
class LinkedListItem
{
    /**
     * @var mixed $data
     */
    public $data = null;

    /**
     * @var LInkedListItem $next
     */
    public $next = null;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class AscLinkedList
{
    /**
     * @var LinkedListItem $firstNode
     */
    private $firstNode = null;
    private $count = 0;

    public function add($data)
    {
        $added = false;
        $lli = new LinkedListItem($data);

        if ($this->firstNode == null) {
            $this->firstNode = $lli;
            $this->count++;
        }

        if ($this->firstNode->next) {

            $current = $this->firstNode;

            while ($current->next) {

                if ($lli->data < $current->next->data) {
                    $added = true;
                    $lli->next = $current->next;
                    $current->next = $lli;
                    $this->count++;
                    break;
                }
                $current = $current->next;
            }
            if (!$added) {
                $current->next = $lli;
                $this->count++;
            }

        } else {

            if ($lli->data < $this->firstNode->data) {
                $lli->next = $this->firstNode;
                $this->firstNode = $lli;
                $this->count++;
            }
        }

    }


    public function remove($data)
    {
        if ($this->firstNode->data == $data) {
            $this->firstNode = $this->firstNode->next;
            $this->count--;
            return true;
        }

        $current = $this->firstNode;
        while ($current->next) {
            if ($current->next->data == $data) {
                $current->next = $current->next->next;
                $this->count--;
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    public function get($index)
    {
        if (($index < $this->count) && ($index >= 0)) {

            $current = $this->firstNode;
            for ($i = 0; $i <= $index; $i++) {
                if ($i == $index) {
                    $data = $current->data;
                    return $data;
                }
                $current = $current->next;
            }
        }
        return false;
    }

    public function get_all()
    {
        $list_data = array();
        $current = $this->firstNode;

        while ($current != null) {
            array_push($list_data, $current->data);
            $current = $current->next;
        }
        return $list_data;
    }
}