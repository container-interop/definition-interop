<?php

namespace Interop\Container\Definition;

/**
 */
interface FactoryDefinitionInterface extends DefinitionInterface
{
    /**
     * @return ReferenceInterface
     */
    public function getReference();

    /**
     * @return string
     */
    public function getMethodName();
}
