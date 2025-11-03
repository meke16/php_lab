<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 9: Find Max and Min Without Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 9: Find Max and Min Without Built-in Functions</h2>
            <p>Write a PHP function that accepts an array of numbers and returns both the maximum and minimum values without using max() or min().</p>

            <div class="example">
                <strong>Example:</strong> Input: [10, 5, 25, 7, 15] → Output: Max: 25, Min: 5
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="minmax_array">Enter numbers separated by commas:</label>
                    <input type="text" id="minmax_array" name="minmax_array" placeholder="1,2,3,4,5,6" required>
                </div>
                <button type="submit" name="submit">Find Max & Min</button>
            </form>

            <?php
            function findMinMax($arr)
            {
                if (empty($arr)) {
                    return ['min' => null, 'max' => null];
                }

                $min = $arr[0];
                $max = $arr[0];

                foreach ($arr as $value) {
                    if ($value < $min) {
                        $min = $value;
                    }
                    if ($value > $max) {
                        $max = $value;
                    }
                }

                return ['min' => $min, 'max' => $max];
            }

            if (isset($_POST['submit'])) {
                $input = $_POST['minmax_array'];
                $numbers = array_map('intval', explode(',', $input));
                $result = findMinMax($numbers);

                echo "<div class='result'><h3>Result:</h3>Max: {$result['max']}, Min: {$result['min']}</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                function findMinMax($arr) {
                if (empty($arr)) {
                return ['min' => null, 'max' => null];
                }

                $min = $arr[0];
                $max = $arr[0];

                foreach ($arr as $value) {
                if ($value < $min) {
                    $min=$value;
                    }
                    if ($value> $max) {
                    $max = $value;
                    }
                    }

                    return ['min' => $min, 'max' => $max];
                    }

                    $numbers = [10, 5, 25, 7, 15];
                    $result = findMinMax($numbers);
                    echo "Max: {$result['max']}, Min: {$result['min']}";
                    ?&gt;
            </div>
        </div>
    </div>
</body>

</html>