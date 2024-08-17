<?php

namespace Src\Model;

class Feedback 
{
    private int $note;
    private ?string $testimony;

    public function __construct(int $note, ?string $testimony)
    {
        if ($note < 9 && empty($testimony)) {
            throw new \DomainException('testimony mandatory');
        }

        $this->note = $note;
        $this->testimony = $testimony;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function recuperarTestimony(): ?string
    {
        return $this->testimony;
    }
}