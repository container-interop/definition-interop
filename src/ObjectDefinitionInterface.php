<?php

namespace Interop\Container\Definition;

use Interop\Container\Definition\ObjectInitializer\MethodCallInterface;
use Interop\Container\Definition\ObjectInitializer\PropertyAssignmentInterface;

/**
 * Represents a class instance.
 *
 * To create the object, arguments can be passed to its constructor, methods can be called
 * and properties can be set.
 */
interface ObjectDefinitionInterface extends DefinitionInterface
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
     * Each argument is either a PHP scalar type or a DefinitionInterface instance. Definitions will
     * be resolved before being passed as arguments.
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
