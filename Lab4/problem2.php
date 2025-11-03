<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 2: Random Password Generator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>
        
        <div class="problem-card">
            <h2 class="problem-title">Problem 2: Random Password Generator</h2>
            <p>Write a PHP script to generate a random password with a given length using str_shuffle() and substr(). Include uppercase, lowercase, numbers, and special characters.</p>
            
            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="password_length">Password Length:</label>
                    <input type="number" id="password_length" name="password_length" placeholder="length.." min="8" max="32" required>
                </div>
                <button type="submit" name="submit">Generate Password</button>
            </form>
            
            <?php
            function generatePassword($length) {
                $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $lowercase = 'abcdefghijklmnopqrstuvwxyz';
                $numbers = '0123456789';
                $special = '!@#$%^&*()_+-=[]{}|;:,.<>?';
                
                $allChars = $uppercase . $lowercase . $numbers . $special;
                $allChars = str_shuffle($allChars);
                
                $password = substr($allChars, 0, $length);
                
                $password = str_shuffle($password);
                
                return $password;
            }
            
            if (isset($_POST['submit'])) {
                $length = $_POST['password_length'];
                $password = generatePassword($length);
                
                echo "<div class='result'><h3>Result:</h3>Generated Password: <strong>$password</strong></div>";
            }
            ?>
            
            <div class="code-block">
&lt;?php
function generatePassword($length) {
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $special = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    
    $allChars = $uppercase . $lowercase . $numbers . $special;
    $allChars = str_shuffle($allChars);
    
    $password = substr($allChars, 0, $length);
    $password = str_shuffle($password);
    
    return $password;
}

$length = 12;
$password = generatePassword($length);
echo "Generated Password: $password";
?&gt;
            </div>
        </div>
    </div>
</body>
</html>