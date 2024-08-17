<?php

namespace Src\Service;

interface Scoreable 
{
    public function recoverScore(): int;
}