<?php

namespace Interop\Container\Definition;

/**
 * The definition of a container entry.
 */
interface DefinitionInterface
{
    /**
     * Returns the value that identifies the entry in the container.
     *
     * @return string
     */
    public function getIdentifier();
}
