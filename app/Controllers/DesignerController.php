<?php

namespace App\Controllers;

use App\Models\Designer;

class DesignerController
{
    public function createDesigner(): string
    {
        $designer = new Designer('Polina', 'polina@email.com', 'junior designer');

        return $this->renderView($designer);
    }

    private function renderView($designer): string
    {
        extract([
            'name' => $designer->name,
            'email' => $designer->email,
            'position' => $designer->position,
            'work_output' => $designer->work(),
            'rest_output' => $designer->rest()
        ]);
        ob_start();
        include __DIR__ . '/../../views/profile-info.php';
        return ob_get_clean();
    }
}
