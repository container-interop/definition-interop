<?php
namespace Mouf\Container\Definition;


use Interop\Container\Compiler\DefinitionInterface;
use Interop\Container\Compiler\InlineEntryInterface;

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

    public function getPropertiesInjections();

    public function getMethodCalls();

}
