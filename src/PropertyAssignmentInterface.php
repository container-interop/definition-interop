<?php

namespace Mouf\Container\Definition;

/**
 * Represents an assignment of a property.
 */
interface PropertyAssignmentInterface
{
    /**
     * Returns the name of the property.
     *
     * @return string
     */
    public function getPropertyName();

    /**
     * Returns the value to assign to the property.
     *
     * @return scalar|ReferenceInterface
     */
    public function getValue();
}
