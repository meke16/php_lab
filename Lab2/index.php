<?php 

// manual route...

$url = $_SERVER['REQUEST_URI'];

$paths = [
    '/exersice-1' => 'variables.php',
    '/exersice-3' => 'conditional.php',
    '/exersice-4' => 'switch.php',
    '/exersice-5' => 'loops.php',
    '/exersice-6' => 'functions.php',
    '/calculator' => 'calculator.php',
    '/fizzbuzz' => 'fizzbuzz.php',

];

if(array_key_exists($url,$paths)) {
    require $paths[$url];
} elseif($url == '/exersice-2') {
    echo "Lab-2 does not contain exersice-2";
}else {
    echo "not found";
}

