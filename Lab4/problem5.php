<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 5: Array Sum Function</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 5: Array Sum Function</h2>
            <p>Write a function sumArray($arr) that takes an array as input and returns the total sum of its elements.</p>

            <div class="example">
                <strong>Example:</strong> [1, 2, 3, 4, 5] → Sum: 15
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="array_input">Enter numbers separated by commas:</label>
                    <input type="text" id="array_input" name="array_input" placeholder="1,2,3,4,5" required>
                </div>
                <button type="submit" name="submit">Calculate Sum</button>
            </form>

            <?php
            function sumArray($arr)
            {
                $sum = 0;
                foreach ($arr as $value) {
                    $sum += $value;
                }
                return $sum;
            }

            if (isset($_POST['submit'])) {
                $input = $_POST['array_input'];
                $numbers = array_map('intval', explode(',', $input));
                $sum = sumArray($numbers);

                echo "<div class='result'><h3>Result:</h3>Sum of array [" . implode(', ', $numbers) . "] is: $sum</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                function sumArray($arr) {
                $sum = 0;
                foreach ($arr as $value) {
                $sum += $value;
                }
                return $sum;
                }

                $numbers = [1, 2, 3, 4, 5];
                $sum = sumArray($numbers);
                echo "Sum of array is: $sum";
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>