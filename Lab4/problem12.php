<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 12: Filter Above Average Values</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 12: Filter Above Average Values</h2>
            <p>Write a PHP function filterAboveAverage($arr) that calculates the average of an array and returns a new array containing only values greater than the average.</p>

            <div class="example">
                <strong>Example:</strong> Input: [10, 20, 30, 40, 50] → Average = 30 → Output: [40, 50]
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="avg_array">Enter numbers separated by commas:</label>
                    <input type="text" id="avg_array" name="avg_array" placeholder="1,2,3,4,5" required>
                </div>
                <button type="submit" name="submit">Filter Above Average</button>
            </form>

            <?php
            function filterAboveAverage($arr)
            {
                if (empty($arr)) {
                    return [];
                }

                $sum = array_sum($arr);
                $average = $sum / count($arr);
                $result = [];

                foreach ($arr as $value) {
                    if ($value > $average) {
                        $result[] = $value;
                    }
                }

                return $result;
            }

            if (isset($_POST['submit'])) {
                $input = $_POST['avg_array'];
                $numbers = array_map('intval', explode(',', $input));
                $aboveAverage = filterAboveAverage($numbers);
                $average = array_sum($numbers) / count($numbers);

                echo "<div class='result'><h3>Result:</h3>Average: $average<br>Values above average: [" . implode(', ', $aboveAverage) . "]</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                function filterAboveAverage($arr) {
                if (empty($arr)) {
                return [];
                }

                $sum = array_sum($arr);
                $average = $sum / count($arr);
                $result = [];

                foreach ($arr as $value) {
                if ($value > $average) {
                $result[] = $value;
                }
                }

                return $result;
                }

                $numbers = [10, 20, 30, 40, 50];
                $aboveAverage = filterAboveAverage($numbers);
                echo "Values above average: [" . implode(', ', $aboveAverage) . "]";
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>