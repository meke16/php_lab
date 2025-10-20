<?php

function dd($par)
{
    foreach ($par as $x) {
        echo $x . " ";
    }
}

$input = '';
$arr1 = [1,2,3];
$arr2 = [3,4,5,6,2,3];
$unique = [];
if (isset($_POST['reset'])) {
    $unique = [];
}
if (isset($_POST['mergeandsort'])) {
    $unique = array_merge($arr1, $arr2);
}
$unique = array_unique($unique);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Unique Elements From Multiple Arrays</title>
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
            <h1>Get Unique Elements From Multiple Arrays

            </h1>
        </div>

        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <?php if (!empty($unique)): ?>
                    <button type="submit" name="reset">Back</button>
                <?php else: ?>
                    <button type="submit" name="mergeandsort">Get Unique</button>
                <?php endif; ?>

            </form>
            <div class="arrays">

                <p class="char">
                    array-1:
                    <?= dd($arr1) ?>
                </p>

                <p class="char">
                    array-2:
                    <?= dd($arr2) ?>
                </p>


                <p class="res">
                    <?php if (!empty($unique) > 0): ?>
                        Uniques Merged Array:
                        <?= dd($unique) ?>
                    <?php endif; ?>
                </p>
            </div>


        </div>

        <div class="footer">
            <p class="footer-p">Get Unique Elements From Multiple Arrays using php.</p>
        </div>
    </div>
</body>

</html>