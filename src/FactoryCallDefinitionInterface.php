<?php

namespace Interop\Container\Definition;

/**
 * Represents a call to a factory. The call returns the container entry.
 *
 * The call can either be made:
 *
 * - on an object method, in which case the factory object is resolved from the container
 * - on a static method of a class
 *
 * When the factory is resolved from the container (non static call), that allows to
 * inject dependencies in the factory.
 *
 * The method to call should accept only one parameter (which can
 * be omitted if unneeded): the name of the container entry that is
 * being resolved. That allows to reuse a factory to create different
 * container entries.
 */
interface FactoryCallDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns a reference to the container entry that will act as a factory or a fully qualified class name.
     *
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

    /**
     * Returns the list of arguments to pass when calling the method.
     *
     * @return array Array of scalars or ReferenceInterface.
     */
    public function getArguments();
}
