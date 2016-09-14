<?php

require_once __DIR__ . '/vendor/autoload.php';

$performance = new \MF\Performance\PerformanceTester();

//
// *******************************************************************
//

$itemCount = 1000;
$testType = 'add_map';

require_once __DIR__ . '/tests/lists/' . $testType . '.php';

//$test = ['Array', $arrayTest];
//$test = ['List', $listTest];
//$test = ['GenericList', $genericListTest];
//$test = ['ImmutableList', $immutableListTest];
//$test = ['ImmutableGenericList', $immutableGenericListTest];
$test = ['ArdentLinkedList', $ardentLinkedListTest];

//
// *******************************************************************
//
$results = $performance->runTests($test[1], 5);

$testName = $test[0] . '_' . $testType . '_' . $itemCount;

$jsonData = [];
echo '<h2>' . $testName . '</h2>';
foreach ($results as $result) {
    echo $result->toString() . '<br>';

    $jsonData[] = $result->toJson();
}

file_put_contents(__DIR__ . '/results/' . $testName . '.json', sprintf('[%s]', implode(',', $jsonData)));
