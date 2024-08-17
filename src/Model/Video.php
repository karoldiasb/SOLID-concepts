<?php

namespace Src\Model;
use Src\Service\Watchable;

class Video implements Watchable
{
    protected bool $watched = false;
    protected string $name;
    protected \DateInterval $duration;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->watched = false;
        $this->duration = \DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function minutesDuration(): int
    {
        return $this->duration->i;
    }

    public function retrieveUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['name' => $this->name]);
    }
}
