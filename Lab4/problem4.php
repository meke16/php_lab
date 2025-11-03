<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 4: Find Largest Number</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 4: Find Largest Number</h2>
            <p>Write a PHP program that takes three numbers and prints the largest using nested if...else or logical operators.</p>

            <div class="example">
                <strong>Example:</strong> Numbers: 25, 40, 15 → Largest: 40
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="num1">Number 1:</label>
                    <input type="number" id="num1" name="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Number 2:</label>
                    <input type="number" id="num2" name="num2" required>
                </div>
                <div class="form-group">
                    <label for="num3">Number 3:</label>
                    <input type="number" id="num3" name="num3" required>
                </div>
                <button type="submit" name="submit">Find Largest</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                if ($num1 >= $num2 && $num1 >= $num3) {
                    $largest = $num1;
                } elseif ($num2 >= $num1 && $num2 >= $num3) {
                    $largest = $num2;
                } else {
                    $largest = $num3;
                }

                echo "<div class='result'><h3>Result:</h3>Largest number is: $largest</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                if ($num1 >= $num2 && $num1 >= $num3) {
                $largest = $num1;
                } elseif ($num2 >= $num1 && $num2 >= $num3) {
                $largest = $num2;
                } else {
                $largest = $num3;
                }

                echo "Largest number is: $largest";
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>