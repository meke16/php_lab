<?php

$day = 0;

if(isset($_POST['submit'])) {
    $day = $_POST['day'];
}

switch ($day) {
    case 1:
        $todayIs = "Today is Monday";
        break;
    case 2:
        $todayIs = "Today is Tuesday";
        break;
    case 3:
        $todayIs = "Today is Wednesday";
        break;
    case 4:
        $todayIs = "Today is Thursday";
        break;
    case 5:
        $todayIs = "Today is Friday";
        break;
    case 6:
        $todayIs = "Today is Saturday";
        break;
    case 7:
        $todayIs = "Today is Sunday";
        break;
    default:
        $todayIs = "invalid day";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Number Of Day(1-7)</label>
        <br>
        <br>
        <input type="text" name="day" value="<?= isset($day) ? $day : "" ?>">
        <button type="submit" name="submit">Submit</button>
    </form>

    <h3><?= $todayIs ?></h3>
</body>
</html>
