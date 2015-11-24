<?php
namespace Mouf\Container\Definition;


interface ReferenceInterface
{
    /**
     * @return string
     */
    public function getTarget();
}
