<?php

/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/11/16
 * Time: 10:32 PM
 */
require_once('basic_data_structure.class.php');
require_once('IDataStructure.php');
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

class AscLinkedList extends BasicDataStructure implements IDataStructure
{
    /**
     * @var LinkedListItem $firstNode
     */
    private $firstNode = null;
    private $count = 0;

    public function __construct()
    {
        $this->firstNode = new LinkedListItem(null);
    }

    public function add($data)
    {
        $this->log("New data: {$data}");

        $lli = new LinkedListItem($data);
        $current = $this->firstNode;

        while ($current) {
            if ($this->shouldBeInsertedAfter($current, $lli)) {
                $lli->next = $current->next;
                $current->next = $lli;
                $this->count++;
                return;
            }
            $current = $current->next;
        }
    }


    public function remove($data)
    {
        $current = $this->firstNode;
        while ($current) {
            if ($current->next && $current->next->data == $data) {
                $current->next = $current->next->next;
                $this->count--;
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    public function log($msg)
    {
        $m = "LinkedList: ".$msg;
        parent::log($m);
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


    /**
     * @param LinkedListItem $currentNode
     * @param LinkedListItem $newNode
     * @return boolean
     */
    private function shouldBeInsertedAfter($currentNode, $newNode)
    {
        if (is_null($currentNode->data) && is_null($currentNode->next)) return true;
        if ($newNode->data > $currentNode->data && is_null($currentNode->next)) return true;
        if ($newNode->data > $currentNode->data && $newNode->data < $currentNode->next->data) return true;
        return false;
    }
}