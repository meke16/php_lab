<?php

function dd($par)
{
    echo "<pre>Your array: ";
    var_dump($par);
    echo "</pre>";
}
$input = '';
$arr = [];
if (isset($_POST['count'])) {
    $input = $_POST['input'];
    $arr = explode(',', $input);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Elements</title>
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
            width: 600px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            text-align: center;
            font-size: 20px;
            color: #fff;
            cursor: pointer;
        }

        button {
            margin-left: 5px;
            padding: 8px 30px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
        }

        .char {
            margin-top: 4px;
            color: #0a0909ff;
            font-weight: bold;
            font-size: 25px;
        }

        .res {
            margin-top: 4px;
            color: #0cffcabe;
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
            <h1>Count Elements
            </h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <h3>User Inputs</h3>
                <p>make array by yoursel by seprating your input by comma(,)</p>
                <input placeholder="your inputs.." name="input" type="text">
                <button type="submit" name="count">Count</button>
            </form>
            <?php if (strlen($input)) :  ?>
                <p class="char">
                    <?= dd($arr) ?>
                </p>
            <?php endif; ?>
            <p class="res"><?= strlen($input) > 0 ? "Element count:" . count($arr) : '' ?></p>
        </div>

        <div class="footer">
            <p class="footer-p">count elements in array using php built-in function(count()).</p>
        </div>
    </div>
</body>

</html>