<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/04/19
 * Time: 10:14
 */
include_once "LinkList.php";

$linkedList = new LinkList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNOdes = $linkedList->totalNOdes();
$linkData = $linkedList->readList();

echo $totalNOdes . "</br>";
echo implode("-" , $linkData);
