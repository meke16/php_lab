<?php

function dd($par )
{
    foreach($par as $x=>$y) {
        echo $x . " => " . $y . ",";
    }
}

$arr = [
    "name" => "Aliyu",
    "city" => "Addis",
];
$new = [];
if (isset($_POST['change'])) {
    $new = array_change_key_case($arr,CASE_UPPER);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Convert Array Keys To Uppercase</title>
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
            margin-top: 10px;
            padding: 8px 30px;
            border: none;
            border-radius: 10px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
        }


        .res {
            margin-top: 4px;
            color: #091815ff;
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

        .arrays {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>
                Convert Array Keys To Uppercase
            </h1>
        </div>

        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <button type="submit" name="change"> Convert Array Keys To Uppercase
                </button>

            </form>
            <div class="arrays">

                <p class="res">
                    Given Array:
                    <?= dd($arr) ?>
                </p>
                    <p class="res">
                   <?= count($new) > 0  ? "Change key case Array:" : '' ?>
                    <?= dd($new) ?>
                </p>
            </div>


        </div>

        <div class="footer">
            <p class="footer-p"> Convert Array Keys To Uppercase
                using php.</p>
        </div>
    </div>
</body>

</html>