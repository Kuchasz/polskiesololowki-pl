<?php

namespace PS\Routing;

/**
 * @Annotation
 * @Target({"CLASS"})
*/
class Area
{
    private $prefix;
    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }
}