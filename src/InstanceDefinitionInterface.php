<?php

namespace Interop\Container\Definition;

/**
 * Represents an instance declared using the "new" keyword followed by an optional list of
 * method calls and properties assignations.
 */
interface InstanceDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns the name of the class to instantiate.
     *
     * @return string
     */
    public function getClassName();

    /**
     * Returns an array of parameters to pass to the constructor of the class.
     *
     * Each parameter is either a PHP scalar type or a ReferenceInterface instance.
     *
     * @return array
     */
    public function getConstructorParameters();

    /**
     * Returns an array of values or container entries to assign to public properties
     * of the instance.
     *
     * @return PropertyAssignmentInterface[]
     */
    public function getPropertyAssignments();

    /**
     * Returns an array of methods to call on the instance.
     *
     * @return MethodCallInterface[]
     */
    public function getMethodCalls();
}
