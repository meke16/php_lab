<?php

function dd($par)
{
    echo "<pre>";
    var_dump($par);
    echo "</pre>";
}

$arr = ["apple", "", null, "banna"];
$new = [];
if (isset($_POST['mergeandsort'])) {
    $new = array_filter($arr, function ($val) {
        return !empty($val);
    });
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove empty values from array</title>
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

        .char {
            margin-bottom: 20px;
            color: #cc8e53ff;
            font-weight: bold;
            font-size: 25px;
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
    Remove Empty Values From Array
            </h1>
        </div>

        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <button type="submit" name="mergeandsort">remove empty values from this array</button>

            </form>
            <div class="arrays">

                <p class="char">
                    Given Array:
                    <?= dd($arr) ?>
                </p>
                <br><br>
                <p class="char">
                    <?php if(count($new) > 0) :?>
                    New Array:
                    <?= dd($new) ?>
                    <?php endif; ?>
                </p>
            </div>


        </div>

        <div class="footer">
            <p class="footer-p">Remove Empty Values using php.</p>
        </div>
    </div>
</body>

</html>