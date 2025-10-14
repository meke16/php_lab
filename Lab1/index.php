<?php 

// manual route...

$url = $_SERVER['REQUEST_URI'];

$paths = [
    '/' => 'intro.php',
    '/exersice-2' => 'intro.php',
    '/exersice-1' => 'hello.php',
    '/exersice-3' => 'personalInfo.php',
    '/exersice-4' => 'serverInfo.php',
    '/exersice-5' => 'comment.php',
    '/miniProject' => 'miniProject.php',

];

if(array_key_exists($url,$paths)) {
    require $paths[$url];
} else {
    echo "not found";
}

