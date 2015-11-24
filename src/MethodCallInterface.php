<?php
namespace Mouf\Container\Definition;

/**
 * Represents a call to a method.
 */
interface MethodCallInterface
{
    /**
     * Returns the name of the method
     *
     * @var string
     */
    public function getMethodName();

    /**
     * Returns a list of arguments passed to the constructor.
     *
     * @var array Array of scalars or ReferenceInterface, or array mixing scalars, arrays, and ReferenceInterface
     */
    public function getArguments();
}
