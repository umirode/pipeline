<?php

declare(strict_types=1);

namespace Umirode\Pipeline;

/**
 * Interface PipelineBuilderInterface
 * @package Umirode\Pipeline
 */
interface PipelineBuilderInterface
{
    /**
     * @param $stage
     * @return PipelineBuilderInterface
     */
    public function add($stage): PipelineBuilderInterface;

    /**
     * @param ProcessorInterface $processor
     * @return PipelineInterface
     */
    public function build(ProcessorInterface $processor): PipelineInterface;
}
