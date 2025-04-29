<?php

namespace App\Controllers;

use App\Traits\RenderTrait;
use App\Models\Developer;

class DeveloperController
{
    use RenderTrait;
    public function createDeveloper(): string
    {
        $developer = new Developer('Nataly', 'natasha@email.com', 'junior developer');
        $title = 'Developer';

        return $this->renderView($title, $developer);
    }
}
