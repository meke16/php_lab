<?php

$word='';



if(isset($_POST['convert'])) {

    if(isset($_POST['case']) && $_POST['case'] == 'toUpper') {
        $word = strtoupper($_POST['word']);
    } elseif(isset($_POST['case']) && $_POST['case'] == 'toLower') {
        $word = strtolower($_POST['word']);
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Case</title>
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
            border-radius: 5px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
        }
        .char {
            margin-top: 18px;
            margin-bottom: 5px;
            color: #000000ff;
            font-weight: bold;
            font-size: 20px;
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
            <h1>Convert Case</h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST" autocomplete="off">
                <h3>Convert Case of words</h3>
                <input value="" placeholder="your word.." name="word" type="text" required>
                <select name="case" required>
                    <option value="" selected disabled>select case</option>
                    <option value="toUpper">to uppercase</option>
                    <option value="toLower">to lowercase</option>
                </select>
                <button name="convert" type="submit">convert</button>
                  <p class="char"><?= strlen($word) > 0 ? "Result: <span style='color: #fff'>$word</span>" : '' ?></p>
            </form>
        </div>
        
        <div class="footer">
            <p class="footer-p">convert case in word using php built in function(strtoupper() and strtolower()).</p>
        </div>
    </div>
</body>

</html>