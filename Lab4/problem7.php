<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 7: Count Vowels and Consonants</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 7: Count Vowels and Consonants</h2>
            <p>Write a PHP program that takes a sentence and counts the number of vowels and consonants.</p>

            <div class="example">
                <strong>Example:</strong> Input: "Programming is fun" → Vowels: 5, Consonants: 10
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="sentence">Enter a sentence:</label>
                    <input type="text" id="sentence" name="sentence" placeholder="Programming is fun" required>
                </div>
                <button type="submit" name="submit">Count Vowels & Consonants</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $sentence = $_POST['sentence'];
                $vowels = 0;
                $consonants = 0;

                $sentence = strtolower($sentence);
                $vowelSet = ['a', 'e', 'i', 'o', 'u'];

                for ($i = 0; $i < strlen($sentence); $i++) {
                    $char = $sentence[$i];
                    if (ctype_alpha($char)) {
                        if (in_array($char, $vowelSet)) {
                            $vowels++;
                        } else {
                            $consonants++;
                        }
                    }
                }
                 echo "<div class='result'>Input:$sentence</div>";

                echo "<div class='result'><h3>Result:</h3>Vowels: $vowels, Consonants: $consonants</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                $sentence = $_POST['sentence'];
                $vowels = 0;
                $consonants = 0;

                $sentence = strtolower($sentence);
                $vowelSet = ['a', 'e', 'i', 'o', 'u'];

                for ($i = 0; $i < strlen($sentence); $i++) {
                    $char=$sentence[$i];
                    if (ctype_alpha($char)) {
                    if (in_array($char, $vowelSet)) {
                    $vowels++;
                    } else {
                    $consonants++;
                    }
                    }
                    }

                    echo "Vowels: $vowels, Consonants: $consonants" ;
                    ?&gt;
                    </div>
            </div>
        </div>
</body>

</html>