<?php

namespace Src\Service;

use Src\Model\AluraMore;
use Src\Model\Course;

class ScoreCalculator
{
    public function recuperarPontuacao($conteudo)
    {
        if ($conteudo instanceof Course) {
            return 100;
        } else if ($conteudo instanceof AluraMore) {
            return $conteudo->minutesDuration() * 2;
        } else {
            throw new \DomainException('only courses and Alura+ videos have scores');
        }
    }
}
