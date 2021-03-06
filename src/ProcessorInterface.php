<?php

declare(strict_types=1);

namespace Umirode\Pipeline;

/**
 * Interface ProcessorInterface
 * @package Umirode\Pipeline
 */
interface ProcessorInterface
{
    /**
     * @param array $payload
     * @param mixed ...$stages
     * @return mixed
     */
    public function process(array $payload, ...$stages);
}
