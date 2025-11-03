<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 11: Character Frequency Counter</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 11: Character Frequency Counter</h2>
            <p>Write a PHP function that takes a string and prints how many times each character appears in it (ignore spaces).</p>

            <div class="example">
                <strong>Example:</strong> Input: "hello" → Output: h→1, e→1, l→2, o→1
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="char_string">Enter a string:</label>
                    <input type="text" id="char_string" name="char_string" placeholder="hello" required>
                </div>
                <button type="submit" name="submit">Count Characters</button>
            </form>

            <?php
            function countCharacters($str)
            {
                // Remove spaces and normalize
                $str = str_replace(' ', '', trim($str));
                // Use preg_split to support multibyte characters
                $chars = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
                $frequency = [];

                foreach ($chars as $char) {
                    $frequency[$char] = isset($frequency[$char]) ? $frequency[$char] + 1 : 1;
                }

                return $frequency;
            }

            $output = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                $input = $_POST['char_string'] ?? '';
                $frequency = countCharacters($input);

                if (!empty($input)) {
                    $output .= "<div class='result'><h3>Result:</h3><table>";
                    $output .= "<tr><th>Character</th><th>Count</th></tr>";

                    // Sort optionally for nicer output (by character)
                    ksort($frequency);

                    foreach ($frequency as $char => $count) {
                        // Use htmlspecialchars to avoid HTML injection and show arrows correctly
                        $displayChar = htmlspecialchars($char, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                        // Concatenate to avoid PHP parsing issues with unicode arrows
                        $output .= "<tr><td>{$displayChar}</td><td>" . (int)$count . "</td></tr>";
                    }

                    $output .= "</table></div>";
                } else {
                    $output = "<div class='error'>Please enter some text!</div>";
                }
            }

            // Echo output where you want in the page
            echo $output;
            ?>


            <div class="code-block">
                &lt;?php
                function countCharacters($str) {
                $str = str_replace(' ', '', $str);
                $chars = str_split($str);
                $frequency = [];

                foreach ($chars as $char) {
                if (isset($frequency[$char])) {
                $frequency[$char]++;
                } else {
                $frequency[$char] = 1;
                }
                }

                return $frequency;
                }

                $input = "hello";
                $frequency = countCharacters($input);
                foreach ($frequency as $char => $count) {
                echo "$char→$count, ";
                }
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>