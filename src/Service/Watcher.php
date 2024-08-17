<?php

namespace Src\Service;

use Src\Model\AluraMore;

class Watcher
{
    public function watch(Watchable $watchable)
    {
        $watchable->watch();
    }

    public function watchAluraMore(AluraMore $aluraMore)
    {
        $aluraMore->watch();
    }
}
