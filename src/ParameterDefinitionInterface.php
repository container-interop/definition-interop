<?php

namespace Mouf\Container\Definition;

/**
 * This class represents a parameter.
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
