<?php

$arrayTest = function () use ($itemCount) {
    $array = [];

    for ($i = 0; $i < $itemCount; $i++) {
        $array[] = $i;
    }

    echo count($array) . '<br>';

    $mapped = array_map(function ($value) {
        return $value + 1;
    }, $array);

    echo count($mapped) . '<br>';
    unset($array, $mapped);
};

$listTest = function () use ($itemCount) {
    $list = new \MF\Collection\Mutable\ListCollection();

    for ($i = 0; $i < $itemCount; $i++) {
        $list->add($i);
    }

    echo count($list) . '<br>';

    $mapped = $list->map(function ($value) {
        return $value + 1;
    });

    echo count($mapped) . '<br>';
    unset($list, $mapped);
};

$genericListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Mutable\Generic\ListCollection('int');

    for ($i = 0; $i < $itemCount; $i++) {
        $list->add($i);
    }

    echo count($list) . '<br>';

    $mapped = $list->map('($v) => $v + 1');

    echo count($mapped) . '<br>';
    unset($list, $mapped);
};

$immutableListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Immutable\ListCollection();

    for ($i = 0; $i < $itemCount; $i++) {
        $list = $list->add($i);
    }

    echo count($list) . '<br>';

    $mapped = $list->map(function ($value) {
        return $value + 1;
    });

    echo count($mapped) . '<br>';
    unset($list, $mapped);
};

$immutableGenericListTest = function () use ($itemCount) {
    $list = new \MF\Collection\Immutable\Generic\ListCollection('int');

    for ($i = 0; $i < $itemCount; $i++) {
        $list = $list->add($i);
    }

    echo count($list) . '<br>';

    $mapped = $list->map('($v) => $v + 1', 'int');

    echo count($mapped) . '<br>';
    unset($list, $mapped);
};

$ardentLinkedListTest = function () use ($itemCount) {
    $linkedList = new Ardent\Collection\LinkedList();

    for ($i = 0; $i < $itemCount; $i++) {
        $linkedList->push($i);
    }

    echo count($linkedList) . '<br>';

    $mapped = new \Ardent\Collection\LinkedList();
    foreach ($linkedList as $value) {
        $mapped->push($value + 1);
    }

    echo count($mapped) . '<br>';
    unset($linkedList, $mapped);
};

$arrayCollectionTest = function () use ($itemCount) {
    $collection = new \Doctrine\Common\Collections\ArrayCollection();

    for ($i = 0; $i < $itemCount; $i++) {
        $collection->add($i);
    }

    echo count($collection) . '<br>';

    $mapped = $collection->map(function($i) {
        return $i + 1;
    });

    echo count($mapped) . '<br>';
    unset($collection, $mapped);
};
