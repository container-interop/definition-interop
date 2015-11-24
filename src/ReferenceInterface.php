<?php

namespace Interop\Container\Definition;

/**
 * Pointer to a container entry.
 */
interface ReferenceInterface
{
    /**
     * Returns the name of the target container entry.
     *
     * @return string
     */
    public function getTarget();
}
