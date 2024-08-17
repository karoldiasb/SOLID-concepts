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

    public function retrieveUrl(): string
    {
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->category)) . '/' . str_replace(' ', '-', strtolower($this->name));
    }

    public function recoverScore(): int
    {
        return $this->minutesDuration() * 2;
    }
}
