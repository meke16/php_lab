<?php
$name = "Cherinet Habtamu";
$id = 975;
$dep = "Software Engineering";
$favQuote = "trust nobody";
$date = date("D, d M Y H:i:s A");

$colors = [
    'r' => rand(0,255),
    'g' => rand(0,255),
    'b' => rand(0,255),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .div1 {
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #101f2bff;
        }

        .intro {
            color: #a5b3b3ff;
            font-size: 85px;
            font-weight: bold;


        }

        .div2 {
            height: 340px;
            width: 60%;
            margin: 10px;
            align-self: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background-color: rgb(<?= $colors['r'] ?>, <?= $colors['g'] ?>, <?= $colors['b'] ?>);
            border-radius: 20px;
        }

        .info {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 150px;
            text-decoration: underline;
            color: #b8a7a7ff;
            font-size: 70px;
        }

        .date {
            color: #b9b027ff;
            font-size: 20px;
            align-self: end;
            justify-self: end;
            margin-right: 15px;
        }
        .name , .id , .dep , .fav , .rand {
            color: #eee9e8ff;
            font-size: 25px;
            margin-left: 150px;
            margin-top: 10px;
        }
        .div3 {
            height: 150px;
            margin-top: auto;
            flex-grow: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #101f2bff;
        }
        .outro {
            color: #a5b3b3ff;
            font-size: 45px;
            font-weight: bold;

        }

        p {
            color: #3f3722ff;
            font: 40px bold;
        }


    </style>
</head>

<body>
    <div class="div1">
        <h1 class="intro">Mini Project</h1>
    </div>
    <div class="div2">
        <h1 class="info">Student Info</h1>
        <h3 class="name">Name:<?= $name ?></h3>
        <h3 class="id">ID:<?= "UGPR/0" . $id . "/16" ?></h3>
        <h3 class="dep">Department:<?= $dep ?></h3>
        <h3 class="fav">Favourite Quote:<?= $favQuote ?></h3>
        <h3 class="rand">Random Number:<?= rand(10, 100) ?></h3>
        <span class="date">Date: <?= $date ?></span>
    </div>
    <p style="text-align: center; font-size: 15px" ><span style="cursor: pointer; font-size: 45px;"  onclick="window.location.reload()">&circlearrowleft;</span>click reload burron for diffrent color</p>
        <div class="div3">
        <h1 class="outro"> Mini Project Of Lab1 Activity for</h1>
        <p>&copy; php &hyphen; with html</p>
    </div>
</body>

</html>