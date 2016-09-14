<?php

$arrayTest = function () use ($itemCount) {
    $array = [];

    for ($i = 0; $i < $itemCount; $i++) {
        $array[] = $i;
    }

    echo count($array) . '<br>';
    unset($array);
};

$listTest = function () use ($itemCount) {
    $list = new \MF\Collection\Mutable\ListCollection();

    for ($i = 0; $i < $itemCount; $i++) {
        $list->add($i);
    }

    echo count($list) . '<br>';
    unset($list);
};

$genericListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Mutable\Generic\ListCollection('int');

    for ($i = 0; $i < $itemCount; $i++) {
        $list->add($i);
    }

    echo count($list) . '<br>';
    unset($list);
};

$immutableListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Immutable\ListCollection();

    for ($i = 0; $i < $itemCount; $i++) {
        $list = $list->add($i);
    }

    echo count($list) . '<br>';
    unset($list);
};

$immutableGenericListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Immutable\Generic\ListCollection('int');

    for ($i = 0; $i < $itemCount; $i++) {
        $list = $list->add($i);
    }

    echo count($list) . '<br>';
    unset($list);
};

$ardentLinkedListTest = function () use ($itemCount) {
    $linkedList = new Ardent\Collection\LinkedList();

    for ($i = 0; $i < $itemCount; $i++) {
        $linkedList->push($i);
    }

    echo count($linkedList) . '<br>';
    unset($linkedList);
};
