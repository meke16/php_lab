<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming Solutions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>PHP Programming Solutions</h1>
            <p class="description">A collection of PHP solutions for common programming problems</p>
        </header>
        
        <div class="problems-grid">
            <!-- Existing problems 1-12 -->
            <div class="problem-card">
                <h2 class="problem-title">Problem 1: Word Count</h2>
                <p>Write a PHP program that counts how many times each word appears in a sentence using explode(), array_count_values(), and strtolower().</p>
                <div class="example">
                    <strong>Example:</strong> Input: "PHP is great and PHP is fun"<br>
                    php => 2, is => 2, great => 1, and => 1, fun => 1
                </div>
                <a href="problem1.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 2: Random Password Generator</h2>
                <p>Write a PHP script to generate a random password with a given length using str_shuffle() and substr(). Include uppercase, lowercase, numbers, and special characters.</p>
                <a href="problem2.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 3: Email Masking</h2>
                <p>Write a function that takes an email and masks part of the username using substr() and strpos().</p>
                <div class="example">
                    <strong>Example:</strong> Input → student@example.com<br>
                    Output → stu***@example.com
                </div>
                <a href="problem3.php" class="solution-link">View Solution</a>
            </div>
            <div class="problem-card">
                <h2 class="problem-title">Problem 4: Find Largest Number</h2>
                <p>Write a PHP program that takes three numbers and prints the largest using nested if...else or logical operators.</p>
                <div class="example">
                    <strong>Example:</strong> Numbers: 25, 40, 15 → Largest: 40
                </div>
                <a href="problem4.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 5: Array Sum Function</h2>
                <p>Write a function sumArray($arr) that takes an array as input and returns the total sum of its elements.</p>
                <div class="example">
                    <strong>Example:</strong> [1, 2, 3, 4, 5] → Sum: 15
                </div>
                <a href="problem5.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 6: Positive, Negative, or Zero</h2>
                <p>Use if...elseif...else and comparison operators to determine whether a number is positive, negative, or zero.</p>
                <div class="example">
                    <strong>Example:</strong> Input: -10 → Negative, Input: 0 → Zero, Input: 25 → Positive
                </div>
                <a href="problem6.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 7: Count Vowels and Consonants</h2>
                <p>Write a PHP program that takes a sentence and counts the number of vowels and consonants.</p>
                <div class="example">
                    <strong>Example:</strong> Input: "Programming is fun" → Vowels: 5, Consonants: 10
                </div>
                <a href="problem7.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 8: Remove Duplicates and Sort</h2>
                <p>Given an array of random numbers, remove duplicates, sort in ascending order, and print the sorted list with count.</p>
                <div class="example">
                    <strong>Example:</strong> Input: [4, 1, 7, 4, 2, 1] → Output: [1, 2, 4, 7], Count: 4
                </div>
                <a href="problem8.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 9: Find Max and Min Without Built-in Functions</h2>
                <p>Write a PHP function that accepts an array of numbers and returns both the maximum and minimum values without using max() or min().</p>
                <div class="example">
                    <strong>Example:</strong> Input: [10, 5, 25, 7, 15] → Output: Max: 25, Min: 5
                </div>
                <a href="problem9.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 10: Password Strength Checker</h2>
                <p>Write a PHP program that checks if a password is strong. A strong password must be at least 8 characters and contain both letters and numbers.</p>
                <div class="example">
                    <strong>Example:</strong> Input: Pass1234 → Output: Strong Password
                </div>
                <a href="problem10.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 11: Character Frequency Counter</h2>
                <p>Write a PHP function that takes a string and prints how many times each character appears in it (ignore spaces).</p>
                <div class="example">
                    <strong>Example:</strong> Input: "hello" → Output: h→1, e→1, l→2, o→1
                </div>
                <a href="problem11.php" class="solution-link">View Solution</a>
            </div>
            
            <div class="problem-card">
                <h2 class="problem-title">Problem 12: Filter Above Average Values</h2>
                <p>Write a PHP function filterAboveAverage($arr) that calculates the average of an array and returns a new array containing only values greater than the average.</p>
                <div class="example">
                    <strong>Example:</strong> Input: [10, 20, 30, 40, 50] → Average = 30 → Output: [40, 50]
                </div>
                <a href="problem12.php" class="solution-link">View Solution</a>
            </div>
        </div>
    </div>
</body>
</html>