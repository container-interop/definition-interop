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
     * Returns the class name or object that will act as a factory.
     *
     * - if a fully qualified class name is returned, the method is called statically on the class
     * - if a definition is returned, the method is called on the result of the definition (which must be an object)
     *
     * @return DefinitionInterface|string
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
     * Each argument is either a PHP scalar type or a DefinitionInterface instance. Definitions will
     * be resolved before being passed as arguments.
     *
     * @return array Array of scalars or DefinitionInterface.
     */
    public function getArguments();
}
