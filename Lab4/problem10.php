<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 10: Password Strength Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>

        <div class="problem-card">
            <h2 class="problem-title">Problem 10: Password Strength Checker</h2>
            <p>Write a PHP program that checks if a password is strong. A strong password must be at least 8 characters and contain both letters and numbers.</p>

            <div class="example">
                <strong>Example:</strong> Input: Pass1234 → Output: Strong Password
            </div>

            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="password">Enter password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="submit">Check Password Strength</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $password = $_POST['password'];

                $lengthCheck = strlen($password) >= 8;
                $letterCheck = preg_match('/[a-zA-Z]/', $password);
                $numberCheck = preg_match('/[0-9]/', $password);

                if ($lengthCheck && $letterCheck && $numberCheck) {
                    $result = "Strong Password";
                } else {
                    $result = "Weak Password";
                }

                echo "<div class='result'><h3>Result:</h3>$result</div>";
            }
            ?>

            <div class="code-block">
                &lt;?php
                $password = $_POST['password'];

                $lengthCheck = strlen($password) >= 8;
                $letterCheck = preg_match('/[a-zA-Z]/', $password);
                $numberCheck = preg_match('/[0-9]/', $password);

                if ($lengthCheck && $letterCheck && $numberCheck) {
                $result = "Strong Password";
                } else {
                $result = "Weak Password";
                }

                echo $result;
                ?&gt;
            </div>
        </div>
    </div>
</body>

</html>