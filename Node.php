<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/04/19
 * Time: 09:56
 */

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    public function readNode()
    {
        return $this->data;
    }
}