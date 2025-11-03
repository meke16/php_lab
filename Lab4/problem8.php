<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 8: Remove Duplicates and Sort</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 8: Remove Duplicates and Sort</h2>
            <p>Given an array of random numbers, remove duplicates, sort in ascending order, and print the sorted list with count.</p>

            <div class="example">
                <strong>Example:</strong> Input: [4, 1, 7, 4, 2, 1] → Output: [1, 2, 4, 7], Count: 4
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="dup_array">Enter numbers separated by commas:</label>
                    <input type="text" id="dup_array" name="dup_array" placeholder="4,1,7,4,2,1"  required>
                </div>
                <button type="submit" name="submit">Process Array</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $input = $_POST['dup_array'];
                $numbers = array_map('intval', explode(',', $input));

                $uniqueNumbers = array_unique($numbers);
                sort($uniqueNumbers);
                $count = count($uniqueNumbers);

                 echo "<div class='result'><h3>Result:</h3>Sorted unique array: [" . implode(', ', $uniqueNumbers) . "], Count: $count</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                $input = $_POST['dup_array'];
                $numbers = array_map('intval', explode(',', $input));

                $uniqueNumbers = array_unique($numbers);
                sort($uniqueNumbers);
                $count = count($uniqueNumbers);

                echo "Sorted unique array: [" . implode(', ', $uniqueNumbers) . "], Count: $count";
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>