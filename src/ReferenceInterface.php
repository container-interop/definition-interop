<?php

namespace Interop\Container\Definition;

/**
 * Objects implementing this interface represent a pointer to another service.
 */
interface ReferenceInterface
{
    /**
     * @return string
     */
    public function getTarget();
}
