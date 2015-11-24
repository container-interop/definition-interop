<?php

namespace Mouf\Container\Definition;

/**
 * This interface represents an instance declared using the "new" keyword followed by an optional list of
 * method calls and properties assignations.
 */
interface InstanceDefinitionInterface extends DefinitionInterface
{
    /**
     * @return string
     */
    public function getClassName();

    /**
     * Returns an array of constructor parameters.
     * Each parameter is either a PHP scalar type, a ReferenceInterface instance.
     *
     * @return array
     */
    public function getConstructorParameters();

    /**
     * @return PropertyAssignmentInterface[]
     */
    public function getPropertiesInjections();

    /**
     * @return MethodCallInterface[]
     */
    public function getMethodCalls();
}
