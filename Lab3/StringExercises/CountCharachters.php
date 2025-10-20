<?php

$word='';
if(isset($_POST['count'])) {
    $word = $_POST['word'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Charachters</title>
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
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            text-align: center;
            font-size: 20px;
            color: #fff;
        }
        button {
            margin-left: 5px;
            padding: 8px 30px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
        }
        .char {
            margin-top: 4px;
            color: #dd8022ff;
            font-weight: bold;
            font-size: 25px;
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
            <h1>Count Charachters</h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <h3>Enter A Word To Count It's Charachters</h3>
                <p style="margin-bottom: 4px; color: #fae315ff">hint: if you have more than one word space between words will be counted</p>
                <input placeholder="your word.." name="word" type="text">
                <button type="submit" name="count">Count</button>
            </form>
            <p class="char"><?= strlen($word) > 0 ? "a word <span style='color: #fff;'> $word </span> has  <span style='color: #fff;'>" .strlen($word). "</span> charachters" : ''  ?></p>
        </div>
        
        <div class="footer">
            <p class="footer-p">count charachter in word using php built-in function(strlen()).</p>
        </div>
    </div>
</body>

</html>