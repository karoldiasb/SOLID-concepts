<?php

namespace Src\Model;
use Src\Service\Scoreable;
use Src\Service\Watchable;

class Course implements Scoreable, Watchable
{
    private string $name;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->minutesDuration() < 3) {
            throw new \DomainException('very short video');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function recoverVideos(): array
    {
        return $this->videos;
    }

    public function recoverScore(): int
    {
        return 100;
    }

    public function watch(): void
    {
        foreach($this->videos as $video){
            $video->watch();
        }
    }
}
