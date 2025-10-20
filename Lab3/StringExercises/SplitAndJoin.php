<?php

function dd($par) {
    echo "<pre>Using Explode: ";
    var_dump($par);
    echo "</pre>";
}

$input = '';
$arr = [];
$reversed = '';
$sep='';
if (isset($_POST['go'])) {
    $input = $_POST['input'];
    $sep=$_POST['sep'];
    $arr = explode($sep, $input);
    $reversed = implode($sep, $arr);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split and Join</title>
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
            color: #f8f1f1ff;
            font-size: 19px;
            cursor: pointer;
        }

        .char {
            margin-top: 4px;
            color: #e4d9d9ff;
            font-weight: 700px;
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
            font-size: 40px;
            font-family: 'Courier New', Courier, monospace;
            color: #6d6666ff
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Split and Join
            </h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST">
                <h3>User Inputs</h3>
                <p>hint:make same separator when you input on string and input on separator field</p>
                <p></p>
                <input style="width: 400px;" placeholder="input..." name="input" type="text" required>
                <input placeholder="separator..." name="sep" type="text" required>
                <button type="submit" name="go">Go...</button>
            </form>
            <div class="char">
            <?php if(strlen($input)) :  ?>
            <p>
                <?= dd($arr) ?>
            </p>
            <p><?= "Using implode: " .$reversed  ?></p>
            <?php endif; ?>
            </div>
        </div>

        <div class="footer">
            <p class="footer-p">Split and Join using php built-in function(explode() and implode()).</p>
        </div>
    </div>
</body>

</html>