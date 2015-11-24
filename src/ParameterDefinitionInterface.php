<?php
namespace Mouf\Container\Definition;


use Interop\Container\Compiler\DefinitionInterface;
use Interop\Container\Compiler\InlineEntryInterface;

/**
 * This class represents a parameter.
 */
interface ParameterDefinitionInterface extends DefinitionInterface
{
    /**
     * Returns the value of the parameter.
     * @return mixed
     */
    public function getValue();
}
