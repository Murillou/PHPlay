<?php 

if (!array_key_exists('REQUEST_URI', $_SERVER) || 
strpos($_SERVER['REQUEST_URI'], '/?') === 0 || $_SERVER['REQUEST_URI'] === '/') {
  require_once 'list-of-courses.php';
} elseif ($_SERVER['REQUEST_URI'] === '/scripts/new-video.php') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'forms.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once '/scripts/new-video.php';
    }

} elseif ($_SERVER['REQUEST_URI'] === '/scripts/update-video.php') {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once 'forms.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '/scripts/update-video.php';
}

} elseif ($_SERVER['REQUEST_URI'] === '/scripts/delete-video.php') {
    require_once '/scripts/delete-video.php';
}