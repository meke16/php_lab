<?php
session_start();

function dd($par)
{
    echo "<pre>Sample array: ";
    var_dump($par);
    echo "</pre>";
}
if (isset($_POST['reset'])) {
    $_SESSION['array'] = ["apple", "lemon", "watermellon", "banana"];
}
// initialize array in session only once
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = ["apple", "lemon", "watermellon", "banana"];
}

$array = $_SESSION['array'];

if (isset($_POST['remove'])) {
    array_pop($array); // remove last element
    $_SESSION['array'] = $array; // save back to session
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Elements</title>
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
            color: #e8f1efff;
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
            <h1>Remove Element from Last Of Array</h1>
        </div>

        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <h3>User Inputs</h3>
                <button type="submit" name="reset">Reset Array</button>
                <button type="submit" name="remove">Remove Last Element</button>
            </form>
            <p class="char">
                <?= dd($array) ?>
            </p>
        </div>

        <div class="footer">
            <p class="footer-p">Remove Last Element of array using php built-in function (array_pop()).</p>
        </div>
    </div>
</body>
</html>
