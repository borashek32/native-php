<?php

namespace App\Controllers;

use App\Core\RenderTrait;
use App\Models\Designer;

class DesignerController
{
    use RenderTrait;
    public function createDesigner(): string
    {
        $designer = new Designer('Polina', 'polina@email.com', 'junior designer');
        $title = 'Designer';

        return $this->renderView($title, $designer);
    }
}
