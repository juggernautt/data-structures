<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/11/16
 * Time: 10:32 PM
 */
class LinkedListItem
{
    private $data = null;
    private $next = null;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param LinkedListItem $entity
     */
    public function setNext($lli)
    {
        $this->next = $lli;
    }
}

class AscLinkedList
{
    public function add($entity) {}
    public function remove($entity) {}
    public function get($index) {}
}