<?php

namespace Src\Model;

class AluraMore extends Video
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
}
