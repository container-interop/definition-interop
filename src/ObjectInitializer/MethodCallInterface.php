<?php

namespace Interop\Container\Definition\ObjectInitializer;

/**
 * Represents a call to a method.
 */
interface MethodCallInterface
{
    /**
     * Returns the name of the method to call.
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
