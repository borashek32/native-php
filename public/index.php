<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\DesignerController;
use App\Controllers\DeveloperController;

$developerController = new DeveloperController();
echo $developerController->createDeveloper();

$designerController = new DesignerController();
echo $designerController->createDesigner();