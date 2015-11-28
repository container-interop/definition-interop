<?php
namespace Interop\Container\Definition\ObjectInitializer;

interface ObjectManipulatorInterface
{
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
