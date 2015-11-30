<?php

namespace Interop\Container\Definition;

/**
 * Pointer to a container entry.
 */
interface ReferenceDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns the identifier of the targeted container entry.
     *
     * @return string
     */
    public function getTarget();
}
