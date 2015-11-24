<?php

namespace Interop\Container\Definition;

/**
 * A module can implement that interface to register container entries by providing definitions.
 */
interface DefinitionProvider
{
    /**
     * Returns the definition to register in the container.
     *
     * @return DefinitionInterface[]
     */
    public function getDefinitions();
}
