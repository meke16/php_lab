<?php

$input = '';
$word = '';
$result='';
$condition='';

if (isset($_POST['check'])) {
    $input = $_POST['input'];
    $word = $_POST['word'];

    if(isset($_POST['condition']) && $_POST['condition'] == 'start') {
        $condition="You are checking If Input is Starts With $word";
        $result = str_starts_with($input,$word);
    } elseif(isset($_POST['condition']) && $_POST['condition'] == 'end') {
         $condition="You are checking If Input is Ends With $word";
        $result = str_ends_with($input,$word);
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Start and End Of string</title>
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
            border-radius: 10px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
        }

        .char {
            margin-top: 4px;
            color: #0a0909ff;
            font-weight: bold;
            font-size: 25px;
            font-family: fantasy;
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
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
            color: #6d6666ff
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Check Start And End Of string
            </h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <h3>User Inputs</h3>
                <input style="width: 400px;" placeholder="input..." name="input" type="text">
                <select name="condition" id="">
                    <option value="" selected disabled>Select to check</option>
                    <option value="start">Check Start With</option>
                     <option value="end">Check End With</option>
                </select>
                <input name="word" type="text" placeholder="with what...">
                <button type="submit" name="check">Check</button>
            </form>
            <div class="char">
            <?php if(strlen($input)) :  ?>
            <p><?= "Input: <span style='color: #e75f10a8'>$input</span>"  ?></p>
             <p><?= $condition ?></p>
             <p style='color: #1215d6a8'>Result:<?= !empty($result) ? "Yes, it's True" : "No, it's false" ?></p>
            <?php endif; ?>
            </div>
        </div>

        <div class="footer">
            <p class="footer-p">Check Start and End Of string using php built-in function(str_starts_with() and str_ends_with()).</p>
        </div>
    </div>
</body>

</html>