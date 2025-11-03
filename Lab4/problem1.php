<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1: Word Count</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>
        
        <div class="problem-card">
            <h2 class="problem-title">Problem 1: Word Count</h2>
            <p>Write a PHP program that counts how many times each word appears in a sentence using explode(), array_count_values(), and strtolower().</p>
            
            <div class="example">
                <strong>Example:</strong><br>
                Input: "PHP is great and PHP is fun"<br>
                Output:<br>
                php => 2<br>
                is => 2<br>
                great => 1<br>
                and => 1<br>
                fun => 1
            </div>
            
            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="sentence">Enter a sentence:</label>
                    <input type="text" id="sentence" name="sentence" value="PHP is great and PHP is fun" required>
                </div>
                <button type="submit" name="submit">Count Words</button>
            </form>
            
            <?php
            if (isset($_POST['submit'])) {
                $sentence = $_POST['sentence'];
                
                $words = explode(' ', $sentence);
                $words = array_map('strtolower', $words);
                $wordCount = array_count_values($words);
                
                echo "<div class='result'><h3>Result:</h3>";
                foreach ($wordCount as $word => $count) {
                    echo "$word => $count<br>";
                }
                echo "</div>";
            }
            ?>
            
            <div class="code-block">
&lt;?php
$sentence = $_POST['sentence'];

$words = explode(' ', $sentence);
$words = array_map('strtolower', $words);
$wordCount = array_count_values($words);

foreach ($wordCount as $word => $count) {
    echo "$word => $count<br>";
}
?&gt;
            </div>
        </div>
    </div>
</body>
</html>