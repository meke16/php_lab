<?php

$strings='';
$subString='';
$positionOfSubstring=0;



if(isset($_POST['find'])) {

    if(isset($_POST['strings'])) {
        $strings = $_POST['strings'];
    }

    if(isset($_POST['substring'])) {
        $subString=$_POST['substring'];
        $positionOfSubstring = strpos($strings,$subString);
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Substring</title>
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
            border-radius: 5px;
            background-color: #09242cff;
            color: #fff;
            font-size: 19px;
        }
        .char {
            margin-top: 18px;
            margin-bottom: 5px;
            color: #dd8022ff;
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
            <h1>Find Substring</h1>
        </div>
        <div class="form">
            <form autocomplete="off" action="" method="POST" autocomplete="off">
                <h3>Find Position of substrings
                    
                </h3>
                <input value="" placeholder="strings..." name="strings" type="text" required>
                <input value="" placeholder="find substring..." name="substring" type="text" required>
                <button name="find" type="submit">Find Position</button>
                  <p class="char"><?= strlen($strings) > 0 ? "position of " ."<span style='color: #fff'>$subString</span>". " in " . "<span style='color: #fff'>$strings</span>". " is " ."<span style='color: #fff'>$positionOfSubstring</span>" : '' ?></p>
            </form>
        </div>
        
        <div class="footer">
            <p class="footer-p">Find Substring using php built in function(strpos()).</p>
        </div>
    </div>
</body>

</html>