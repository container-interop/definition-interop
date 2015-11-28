<?php

namespace Interop\Container\Definition;

use Interop\Container\Definition\ObjectInitializer\MethodCallInterface;
use Interop\Container\Definition\ObjectInitializer\ObjectManipulatorInterface;
use Interop\Container\Definition\ObjectInitializer\PropertyAssignmentInterface;

/**
 * Represents a class instance.
 *
 * To create the object, arguments can be passed to its constructor, methods can be called
 * and properties can be set.
 */
interface ObjectDefinitionInterface extends DefinitionInterface, ObjectManipulatorInterface
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
}
