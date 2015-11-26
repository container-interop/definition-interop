<?php

namespace Interop\Container\Definition\InstanceDefinition;

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
     * @return array Array of scalars or ReferenceInterface.
     */
    public function getArguments();
}
