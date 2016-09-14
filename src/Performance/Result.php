<?php

namespace MF\Performance;

class Result
{
    /** @var float in milliseconds */
    private $time;

    /** @var int in bytes */
    private $memory;

    /** @var int in bytes */
    private $memoryPeak;

    /**
     * @param float $time
     * @param int $memory
     * @param int $memoryPeak
     */
    public function __construct($time, $memory, $memoryPeak)
    {
        $this->time = $time;
        $this->memory = $memory;
        $this->memoryPeak = $memoryPeak;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return sprintf(
            'Total time: %s ms, total memory usage (peak): %s bytes (%s bytes)',
            $this->time,
            $this->memory,
            $this->memoryPeak
        );
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode([
            'time' => $this->time,
            //'memory' => $this->memory,
            'memoryPeak' => $this->memoryPeak,
            'coefficient' => $this->time * $this->memoryPeak,
        ]);
    }

    public function toMarkDown()
    {
        throw new \Exception(sprintf('Method %s is not implemented yet.', __METHOD__));
    }
}
