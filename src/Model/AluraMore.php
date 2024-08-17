<?php

namespace Src\Model;
use Src\Service\Scoreable;

class AluraMore extends Video implements Scoreable
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function recuperarUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }

    public function recoverScore(): int
    {
        return $this->minutesDuration() * 2;
    }
}
