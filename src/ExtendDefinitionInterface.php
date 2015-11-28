<?php
namespace Interop\Container\Definition;

use Interop\Container\Definition\ObjectInitializer\ObjectManipulatorInterface;

/**
 * Represents a manipulation done on an existing container reference.
 */
interface ExtendDefinitionInterface extends ObjectManipulatorInterface
{
    /**
     * Returns a reference to the container entry that will be extended.
     *
     * @return ReferenceInterface
     */
    public function getExtended();
}
