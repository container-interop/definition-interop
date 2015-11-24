<?php

namespace Interop\Container\Definition;

/**
 * Represents a container entry that is a scalar value.
 */
interface ParameterDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns the value of the parameter.
     *
     * @return mixed
     */
    public function getValue();
}
