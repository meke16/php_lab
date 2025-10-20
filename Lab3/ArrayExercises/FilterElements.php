<?php

function dd($par)
{
    foreach ($par as $x) {
        echo $x . " ";
    }
}
$arr = range(10, 50);
$filterd = [];
$to = '';
if(isset($_POST['back'])) {
    $filterd = [];
}
if (isset($_POST['even'])) {
    $to = "filtered to even";
    $filterd = array_filter($arr, function ($value) {
        return $value % 2 == 0;
    });
} else if (isset($_POST['odd'])) {
    $to = "filtered to odd";

    $filterd = array_filter($arr, function ($value) {
        return $value % 2 != 0;
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Elements</title>
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
            margin: 15px 0;
            padding: 8px 30px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
        }

        .char {
            margin-bottom: 20px;
            color: #0a1d36ff;
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

        .res {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Filter Elements </h1>
        </div>

        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <button name="even">Filter even</button>
                <button name="odd">Filter odd</button>
                 <button name="back">Back.. &circlearrowleft;</button>

                <div class="res">
                    <p class="char">
                        Original array <br>
                        <?= dd($arr) ?>
                    </p>
                    <p class="char">
                        <?= $to; ?> <br>
                        <?= dd($filterd) ?>
                    </p>
                </div>
            </form>

        </div>

        <div class="footer">
            <p class="footer-p">Filter Elements using php built-in function(array_filter()).</p>
        </div>
    </div>
</body>

</html>