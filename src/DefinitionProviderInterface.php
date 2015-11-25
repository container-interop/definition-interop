<?php

namespace Interop\Container\Definition;

/**
 * A module can implement that interface to register container entries by providing definitions.
 */
interface DefinitionProviderInterface
{
    /**
     * Returns the definition to register in the container.
     *
     * @return DefinitionInterface[]
     */
    public function getDefinitions();
}
