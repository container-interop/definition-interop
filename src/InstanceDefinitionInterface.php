<?php

namespace Interop\Container\Definition;

use Interop\Container\Definition\InstanceDefinition\MethodCallInterface;
use Interop\Container\Definition\InstanceDefinition\PropertyAssignmentInterface;

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
     * Returns an array of arguments to pass to the constructor of the class.
     *
     * Each argument is either a PHP scalar type or a ReferenceInterface instance.
     *
     * @return array
     */
    public function getConstructorArguments();

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
