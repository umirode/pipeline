<?php


namespace Umirode\Pipeline;

/**
 * Interface PipelineInterface
 * @package Umirode\Pipeline
 */
interface PipelineInterface
{
    /**
     * @param $stage
     * @return PipelineInterface
     */
    public function pipe($stage): PipelineInterface;

    /**
     * @param array $payload
     * @return mixed
     */
    public function process(array $payload);
}
