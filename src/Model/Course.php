<?php

namespace Src\Model;

class Course
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

    public function receiveFeedback(int $note, ?string $testimony): void
    {
        if ($note < 9 && empty($testimony)) {
            throw new \DomainException('testimony mandatory');
        }

        $this->feedbacks[] = [$note, $testimony];
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
}
