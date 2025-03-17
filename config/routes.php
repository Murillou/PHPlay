<?php

use Phplay\Mvc\Controller\{
    JsonVideoListController
};

return [
    'GET|/videos-json' => JsonVideoListController::class,
    'POST|/videos' => JsonVideoListController::class,
];
