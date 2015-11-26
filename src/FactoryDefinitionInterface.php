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
     * Returns a reference to the container entry that will act as a factory or a fully qualified class name.
     * If a fully qualified class name is passed, the method is called statically on the class, otherwise,
     * the method is called on the target instance of the reference.
     *
     * @return ReferenceInterface|string
     */
    public function getFactory();

    /**
     * Returns the name of the method to call on the factory.
     *
     * @return string
     */
    public function getMethodName();
}
