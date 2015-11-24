<?php
namespace Mouf\Container\Definition;


use Interop\Container\Compiler\DefinitionInterface;
use Interop\Container\Compiler\InlineEntryInterface;

/**
 * This class represents an alias to another entry in the container.
 */
interface AliasDefinitionInterface extends DefinitionInterface, ReferenceInterface
{

}