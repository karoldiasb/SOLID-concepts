<?php

namespace Src\Service;

use Src\Model\AluraMore;
use Src\Model\Course;

class Watcher
{
    public function watchCourse(Course $curso)
    {
        foreach ($curso->recoverVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAluraMore(AluraMore $aluraMais)
    {
        $aluraMais->watch();
    }
}
