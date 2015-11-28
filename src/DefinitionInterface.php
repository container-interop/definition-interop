<?php

namespace Interop\Container\Definition;

/**
 * The definition of a container entry.
 */
interface DefinitionInterface
{
    /**
     * Returns the value that identifies the entry in the container.
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Append an extension to this entry.
     *
     * @param ExtendDefinitionInterface $extension
     *
     * @return $this
     */
    public function addExtension(ExtendDefinitionInterface $extension);

    /**
     * Returns the extensions to apply to this entry.
     *
     * @return ExtendDefinitionInterface[]
     */
    public function getExtensions();
}
