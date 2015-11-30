<?php

namespace Interop\Container\Definition;

/**
 * A module can implement that interface to register container entries by providing definitions.
 */
interface DefinitionProviderInterface
{
    /**
     * Returns the definition to register in the container.
     *
     * Definitions must be indexed by their entry ID. For example:
     *
     *     return [
     *         'logger' => ...
     *         'mailer' => ...
     *     ];
     *
     * @return array
     */
    public function getDefinitions();
}
