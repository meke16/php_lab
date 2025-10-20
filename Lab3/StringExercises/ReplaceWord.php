<?php

$input = '';
$replaced = '';
$replace = '';
$result = '';



if (isset($_POST['replaceWord'])) {

    if (isset($_POST['input'])) {
        $input = $_POST['input'];
    }

    if (isset($_POST['replaced']) && isset($_POST['replace'])) {
        $replaced = $_POST['replaced'];
        $replace = $_POST['replace'];

        $result = str_replace($replaced, $replace, $input);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReplaceWord</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #665c5cff;
        }

        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            margin-bottom: auto;
            color: #140707ff;
            height: 150px;
            width: 100%;
            background-color: #09242cff;
        }

        h1 {
            font-size: 80px;
            text-align: center;
            padding-top: 40px;
            color: #bbb5b5ff;

        }

        .form {
            align-self: center;
            margin-bottom: auto;
        }

        h3 {
            margin-bottom: 20px;
            color: #d5dbe0ff;
            font-size: 50px;
        }

        input {
            height: 40px;
            width: 600px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            text-align: center;
            font-size: 20px;
            color: #fff;
        }

        select {
            margin-left: 5px;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            background-color: #09242cff;
            color: #fff;
            font-size: 15px;
        }

        button {
            margin-left: 5px;
            padding: 8px 30px;
            border: none;
            border-radius: 5px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
        }

        .result {
            margin-top: 18px;
            margin-bottom: 5px;
            color: #f1f7f2ff;
            font-weight: bold;
            font-size: 20px;
        }

        p {
            margin: 8px;
        }

        .footer {
            margin-top: auto;
            color: #140707ff;
            height: 150px;
            width: 100%;
            background-color: #09242cff;
        }

        .footer-p {
            text-align: center;
            padding-top: 60px;
            font-size: 40px;
            font-family: 'Courier New', Courier, monospace;
            color: #6d6666ff
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Replace Word
            </h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST" autocomplete="off">
                <h3>Replace</h3>
                <input value="" placeholder="inputs..." name="input" type="text" required>
                <input value="" placeholder="word to be replaced..." name="replaced" type="text" required>
                <input value="" placeholder="word to be replace..." name="replace" type="text" required>
                <br><br>
                <button name="replaceWord" type="submit">Replace</button>
                <?php if (!empty($input)) : ?>
                    <div class="result">
                        <p><?= "your input was <span style='color: #9898a8ff'>$input</span> "; ?></p>
                        <p><?= "you replaced the word <span style='color: #f50e0eff'>$replaced</span> from input by <span style='color: #10f32eff'>$replace</span>" ?></p>
                        <p><?= "end result will be <span style='color: #0a0909ff'>$result</span>"  ?></p>
                    </div>
                <?php endif; ?>
            </form>
        </div>

        <div class="footer">
            <p class="footer-p">Replace Word using php built in function(str_replace()).</p>
        </div>
    </div>
</body>

</html>