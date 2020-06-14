<?php

declare(strict_types=1);

namespace Umirode\Pipeline;

/**
 * Class PipelineBuilder
 * @package Umirode\Pipeline
 */
final class PipelineBuilder implements PipelineBuilderInterface
{
    /**
     * @var array
     */
    private $stages = [];

    /**
     * @inheritDoc
     */
    public function add($stage): PipelineBuilderInterface
    {
        $this->stages[] = $stage;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function build(ProcessorInterface $processor): PipelineInterface
    {
        return new Pipeline($processor, ...$this->stages);
    }
}
