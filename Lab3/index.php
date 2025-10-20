<?php

// manual route...
$url = $_SERVER['REQUEST_URI'];
$paths = [
    //String Exercises
    
    '/CountCharachters' => 'StringExercises/CountCharachters.php',
    '/ConvertCase' => 'StringExercises/ConvertCase.php',
    '/FindSubstring' => 'StringExercises/FindSubstring.php',
    '/ReplaceWord' => 'StringExercises/ReplaceWord.php',
    '/ExtractSubstring' => 'StringExercises/ExtractSubstring.php',
    '/CountWords' => 'StringExercises/CountWords.php',
    '/ReverseString' => 'StringExercises/ReverseString.php',
    '/RemoveWhitespaces' => 'StringExercises/RemoveWhitespaces.php',
    '/SplitAndJoin' => 'StringExercises/SplitAndJoin.php',
    '/CheckStartAndEndOfString' => 'StringExercises/CheckStartAndEndOfString.php',

    //Array Exercises
    '/CountElements' => 'ArrayExercises/CountElements.php',
    '/AddElements' => 'ArrayExercises/AddElements.php',
    '/RemoveLastElement' => 'ArrayExercises/RemoveLastElement.php',
    '/CheckValueExists' => 'ArrayExercises/CheckValueExists.php',
    '/SortArray' => 'ArrayExercises/SortArray.php',
    '/ReverseArray' => 'ArrayExercises/ReverseArray.php',
    '/CombineTwoArrays' => 'ArrayExercises/CombineTwoArrays.php',
    '/SumOfArrayValues' => 'ArrayExercises/SumOfArrayValues.php',
    '/FilterElements' => 'ArrayExercises/FilterElements.php',
    '/MapFunctions' => 'ArrayExercises/MapFunctions.php',

    //Problem

    '/WordFrequencyCounter' => 'Problems/WordFrequencyCounter.php',
    '/RemoveDuplicateWords' => 'Problems/RemoveDuplicateWords.php',
    '/FindTheLongestWordInASentence' => 'Problems/FindTheLongestWordInASentence.php',
    '/CountVowelsAndConsonants' => 'Problems/CountVowelsAndConsonants.php',
    '/CheckForPalindrome' => 'Problems/CheckForPalindrome.php',
    '/MergeAndSortTwoArrays' => 'Problems/MergeAndSortTwoArrays.php',
    '/RemoveEmptyValues' => 'Problems/RemoveEmptyValues.php',
    '/GetUniqueElementsFromMultipleArrays' => 'Problems/GetUniqueElementsFromMultipleArrays.php',
    '/ConvertArrayKeysToUppercase' => 'Problems/ConvertArrayKeysToUppercase.php',
    '/FindCommonElementsBetweenTwoArrays' => 'Problems/FindCommonElementsBetweenTwoArrays.php',
];

if (array_key_exists($url, $paths)) {
    require $paths[$url];
} else {
    //custom 404 page
    echo "
    <div style='
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 50px;
        background-color: #d3d6dbff;
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
    ";
}
