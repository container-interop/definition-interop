<?php

namespace Interop\Container\Definition;

/**
 * Represents a factory that provides a container entry.
 *
 * The factory instance is resolved from the container. That allows to
 * inject dependencies in the factory.
 *
 * The method to call should accept only one parameter (which can
 * be omitted if unneeded): the name of the container entry that is
 * being resolved. That allows to reuse a factory to create different
 * container entries.
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

    /**
     * Returns the list of arguments to pass when calling the method.
     *
     * @return array Array of scalars or ReferenceInterface.
     */
    public function getArguments();
}
