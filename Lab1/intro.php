<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML</title>
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
            background-color: #383232ff;
        }

        .div2 {
            height: 550px;
            width: 95%;
            margin: 10px;
            align-self: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 0;
            background-color: #1d4d49ff;
            border-radius: 10px;
        }

        .div3 {
            height: 150px;
            margin-top: auto;
            flex-grow: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #383232ff;
        }

        .intro {
            color: #20a3a3ff;
            font-size: 85px;
            font-weight: bold;

        }

        .nav {
            color: #a5a7a5ff;
            font-size: 60px;
            font-weight: bold;
            text-decoration: underline;
        }

        .outro {
            color: #20a3a3ff;
            font-size: 55px;
            font-weight: bold;

        }

        p {
            color: #b98f1cff;
            font: 40px bold;
        }

        a {
            text-decoration: none;
            color: #a5a7a5ff;
            display: block;
            font-size: 25px;
            padding: 12px 35px;
            margin: 10px;
            background-color: #0c0e0fff;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="div1">
        <h1 class="intro">Welcome to PHP!</h1>
        <p>Current Server time: <?= date("h:i:s A") ?></p>
    </div>
    <div class="div2">
        <h1 class="nav">Naviagtion</h1>
        <a href="/exercise-1" title="Exersice 1">Exersice 1</a>
        <a href="/exercise-2" title="Exersice 2">Exersice 2</a>
        <a href="/exercise-3" title="Exersice 3">Exersice 3</a>
        <a href="/exercise-4" title="Exersice 4">Exersice 4</a>
        <a href="/exercise-5" title="Exersice 5">Exersice 5</a>
        <a href="/miniProject" title="Mini Project">Mini Project</a>
    </div>
    <div class="div3">
        <h1 class="outro">Exersice-1 for LAB-PHP!</h1>
        <p>&copy; php &hyphen; with html</p>
    </div>
</body>

</html>