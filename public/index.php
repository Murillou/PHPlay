<?php 


require_once __DIR__ . "/../vendor/autoload.php";


if (!array_key_exists('REQUEST_URI', $_SERVER) || 
strpos($_SERVER['REQUEST_URI'], '/?') === 0 || $_SERVER['REQUEST_URI'] === '/') {
  require_once __DIR__ . '/../list-of-videos.php';
} elseif ($_SERVER['REQUEST_URI'] === '/new-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once __DIR__ . '/../forms.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once __DIR__ .'/../scripts/new-video.php';
    }

} elseif (strpos($_SERVER['REQUEST_URI'], '/update-video') === 0) {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once __DIR__ . '/../forms.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../scripts/update-video.php';
}

} elseif (strpos($_SERVER['REQUEST_URI'], needle: '/delete-video') === 0) {
    require_once __DIR__ . '/../scripts/delete-video.php';
} else {
    http_response_code(404);
}