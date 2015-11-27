<?php

namespace Interop\Container\Definition\ObjectInitializer;

use Interop\Container\Definition\ReferenceInterface;

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
     * Returns the value or container entry to assign to the property.
     *
     * @return mixed|ReferenceInterface
     */
    public function getValue();
}
