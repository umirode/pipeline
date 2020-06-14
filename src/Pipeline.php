<?php

declare(strict_types=1);

namespace Umirode\Pipeline;

/**
 * Class Pipeline
 * @package Umirode\Pipeline
 */
final class Pipeline implements PipelineInterface
{
    /**
     * @var array|mixed[]
     */
    private $stages = [];

    /**
     * @var ProcessorInterface
     */
    private $processor;

    /**
     * Pipeline constructor.
     * @param ProcessorInterface $processor
     * @param mixed ...$stages
     */
    public function __construct(ProcessorInterface $processor, ...$stages)
    {
        $this->processor = $processor;
        $this->stages = $stages;
    }

    /**
     * @param $stage
     * @return PipelineInterface
     */
    public function pipe($stage): PipelineInterface
    {
        $pipeline = clone $this;
        $pipeline->stages [] = $stage;

        return $pipeline;
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public function process(array $payload)
    {
        return $this->processor->process($payload, ...$this->stages);
    }
}
