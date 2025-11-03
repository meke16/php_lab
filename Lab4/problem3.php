<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 3: Email Masking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="index.html" class="back-link">← Back to Problems</a>
        
        <div class="problem-card">
            <h2 class="problem-title">Problem 3: Email Masking</h2>
            <p>Write a function that takes an email and masks part of the username using substr() and strpos().</p>
            
            <div class="example">
                <strong>Example:</strong><br>
                Input → student@example.com<br>
                Output → stu***@example.com
            </div>
            
            <form method="POST" class="input-form">
                <div class="form-group">
                    <label for="email">Enter email:</label>
                    <input type="email" id="email" name="email" value="student@example.com" required>
                </div>
                <button type="submit" name="submit">Mask Email</button>
            </form>
            
            <?php
            function maskEmail($email) {
                $atPosition = strpos($email, '@');
                
                if ($atPosition === false) {
                    return $email;
                }
                
                $username = substr($email, 0, $atPosition);
                $domain = substr($email, $atPosition);
                
                if (strlen($username) <= 3) {
                    $maskedUsername = substr($username, 0, 1) . '***';
                } else {
                    $maskedUsername = substr($username, 0, 3) . '***';
                }
                
                return $maskedUsername . $domain;
            }
            
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $maskedEmail = maskEmail($email);
                
                echo "<div class='result'><h3>Result:</h3>Original: $email<br>Masked: <strong>$maskedEmail</strong></div>";
            }
            ?>
            
            <div class="code-block">
&lt;?php
function maskEmail($email) {
    $atPosition = strpos($email, '@');
    
    if ($atPosition === false) {
        return $email;
    }
    
    $username = substr($email, 0, $atPosition);
    $domain = substr($email, $atPosition);
    
    if (strlen($username) <= 3) {
        $maskedUsername = substr($username, 0, 1) . '***';
    } else {
        $maskedUsername = substr($username, 0, 3) . '***';
    }
    
    return $maskedUsername . $domain;
}

$email = "student@example.com";
$maskedEmail = maskEmail($email);
echo "Masked Email: $maskedEmail";
?&gt;
            </div>
        </div>
    </div>
</body>
</html>