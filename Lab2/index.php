<?php

// manual route...
$url = $_SERVER['REQUEST_URI'];

$paths = [
    '/exercise-1' => 'variables.php',
    '/exercise-3' => 'conditional.php',
    '/exercise-4' => 'switch.php',
    '/exercise-5' => 'loops.php',
    '/exercise-6' => 'functions.php',
    '/calculator' => 'calculator.php',
    '/fizzbuzz' => 'fizzbuzz.php',
];

if (array_key_exists($url, $paths)) {
    require $paths[$url];
} else {

    if ($url == '/exersice-2') {
        echo "<h2 style='color:#d9534f; text-align:center;'>Lab-2 does not contain exercise-2 😅</h2>";
    }
    //custom 404 page
    echo "
    <div style='
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 50px;
        background-color: #f8f9fa;
        color: #333;
    '>
        <h1 style='font-size: 80px; margin-bottom: 10px; color: #dc3545;'>404</h1>
        <h2>Oops! Page Not Found 😔</h2>
        <p style='margin: 20px 0; color: #666;'>The page you are looking for doesn't exist or may have been moved.</p>
        <hr style='width: 60%; margin: 30px auto;'>
        <h3>Try one of the available exercises:</h3>
        <div style='margin-top: 20px;'>
    ";

    // Show working routes dynamically
    foreach ($paths as $route => $file) {
        echo "<a href='$route' 
                style='
                    display:inline-block;
                    margin:8px;
                    padding:10px 20px;
                    text-decoration:none;
                    background-color:#007bff;
                    color:white;
                    border-radius:8px;
                    transition:0.3s;
                '
                onmouseover=\"this.style.backgroundColor='#0056b3'\"
                onmouseout=\"this.style.backgroundColor='#007bff'\"
            >" . ucfirst(trim($route, '/')) . "</a>";
    }

    echo "
        </div>
    </div>
    ";
}
