<?php

namespace Src\Service;

class ScoreCalculator
{
    public function recoverScore(Scoreable $scoreable)
    {
        return $scoreable->recoverScore();
    }
}
