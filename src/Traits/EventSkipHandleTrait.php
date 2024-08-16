<?php

namespace Untek\Core\EventDispatcher\Traits;

\Untek\Core\Code\Helpers\DeprecateHelper::hardThrow();

trait EventSkipHandleTrait
{

    private $skipHandle = false;

    public function isSkipHandle(): bool
    {
        return $this->skipHandle;
    }

    public function skipHandle(): void
    {
        $this->skipHandle = true;
    }
}
