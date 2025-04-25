<?php

namespace App\Controllers;

use App\Models\Developer;

class DeveloperController
{
    public function createDeveloper(): string
    {
        $developer = new Developer('Nataly', 'natasha@email.com', 'junior developer');
        $title = 'Developer';

        return $this->renderView($title, $developer);
    }

    private function renderView($title, $developer): string
    {
        extract([
            'title' => $title,
            'name' => $developer->name,
            'email' => $developer->email,
            'position' => $developer->position,
            'work_output' => $developer->work(),
            'rest_output' => $developer->rest()
        ]);
        ob_start();
        include __DIR__ . '/../../views/profile-info.php';
        return ob_get_clean();
    }
}
