<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 6: Positive, Negative, or Zero</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 6: Positive, Negative, or Zero</h2>
            <p>Use if...elseif...else and comparison operators to determine whether a number is positive, negative, or zero.</p>

            <div class="example">
                <strong>Example:</strong> Input: -10 → Negative, Input: 0 → Zero, Input: 25 → Positive
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="number_check">Enter a number:</label>
                    <input type="number" id="number_check" name="number_check" required>
                </div>
                <button type="submit" name="submit">Check Number</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $number = $_POST['number_check'];

                if ($number > 0) {
                    $result = "Positive";
                } elseif ($number < 0) {
                    $result = "Negative";
                } else {
                    $result = "Zero";
                }

                echo "<div class='result'><h3>Result:</h3>Input: $number → $result</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                $number = $_POST['number_check'];

                if ($number > 0) {
                $result = "Positive";
                } elseif ($number < 0) {
                    $result="Negative" ;
                    } else {
                    $result="Zero" ;
                    }

                    echo "Input: $number → $result" ;
                    ?&gt;
                    </div>
            </div>
        </div>
</body>

</html>