<?php

namespace Interop\Container\Definition\ObjectInitializer;

use Interop\Container\Definition\DefinitionInterface;

/**
 * Represents the assignment of a property.
 */
interface PropertyAssignmentInterface
{
    /**
     * Returns the name of the property to set.
     *
     * @return string
     */
    public function getPropertyName();

    /**
     * Returns the value to assign to the property.
     *
     * If the value is a DefinitionInterface, it will be resolved before being
     * assigned to the property.
     *
     * @return mixed|DefinitionInterface
     */
    public function getValue();
}
