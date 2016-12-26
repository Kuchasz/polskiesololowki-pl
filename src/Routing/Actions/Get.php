<?php

namespace PS\Routing\Actions;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class Get
{
    private $prefix;
    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }
}