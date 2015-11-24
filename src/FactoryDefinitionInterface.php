<?php

namespace Interop\Container\Definition;

/**
 * Represents a factory that provides a container entry.
 *
 * The factory instance is resolved from the container. That allows to
 * inject dependencies in the factory.
 *
 * No parameters are to be passed to the method invoked on the factory.
 */
interface FactoryDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns a reference to the container entry that will act as a factory.
     *
     * @return ReferenceInterface
     */
    public function getReference();

    /**
     * Returns the name of the method to call on the factory.
     *
     * @return string
     */
    public function getMethodName();
}
