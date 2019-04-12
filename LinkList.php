<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/04/19
 * Time: 09:58
 */
include_once "Node.php";

class LinkList
{
    private $fistNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->fistNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->fistNode;
        $this->fistNode = $link;

        if ($this->lastNode = NULL)
        {
            $this->lastNode = $link;
        }

        $this->count ++;
    }

    public function insertLast($data)
    {
        if ($this->fistNode !=NULL)
        {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else
        {
            $this->insertFirst($data);
        }
    }

    public function totalNOdes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->fistNode;

        while ($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}