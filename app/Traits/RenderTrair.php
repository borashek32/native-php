<?php

namespace App\Core;

trait RenderTrait
{
    protected function renderView(string $title, object $profile): string
    {
        extract([
            'title' => $title,
            'name' => $profile->name,
            'email' => $profile->email,
            'position' => $profile->position,
            'work_output' => $profile->work(),
            'rest_output' => $profile->rest()
        ]);

        ob_start();
        include __DIR__ . '/../../views/profile-info.php';
        $profileContent = ob_get_clean();

        ob_start();
        $pageTitle = "$title Profile";
        $content = $profileContent;
        include __DIR__ . '/../../views/layouts/main.php';
        return ob_get_clean();
    }
}