<?php

namespace MF\Performance;

class PerformanceTester
{
    /** @var float */
    private $start = 0;

    /** @var int */
    private $memoryStart = 0;

    /**
     * @param callable $test
     * @param int $count
     * @return Result[]
     */
    public function runTests(callable $test, $count)
    {
        $results = [];
        for ($i = 0; $i < $count; $i++) {
            $results[] = $this->runTest($test);
        }

        return $results;
    }

    /**
     * @param callable $test
     * @return Result
     */
    public function runTest(callable $test)
    {
        $this->startTime();
        $this->startMemoryCheck();

        call_user_func($test);

        $memoryUsage = $this->stopMemoryCheck();
        $time = $this->stopTime();

        return new Result($time, $memoryUsage, $this->getMemoryPeak());
    }

    public function startTime()
    {
        $this->start = microtime(true);
    }

    /**
     * @return float in milliseconds
     */
    public function stopTime()
    {
        $end = microtime(true);

        return $end - $this->start;
    }

    public function startMemoryCheck()
    {
        $this->memoryStart = memory_get_usage();
    }

    /**
     * @return int
     */
    public function stopMemoryCheck()
    {
        $memoryEnd = memory_get_usage();

        return $memoryEnd - $this->memoryStart;
    }

    /**
     * @return int
     */
    public function getMemoryPeak()
    {
        return memory_get_peak_usage();
    }
}
