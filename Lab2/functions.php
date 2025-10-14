<?php


$celsius=0;

function convert($celsius) {
    if($celsius < -273.15) {
       return $f="Invalid temprature";
    } else {
        return $f = (9/5 * ($celsius)) + 32;
    }
}

if(isset($_POST['temp'])) {
    $celsius = $_POST['degree'];
}

$score = 0;
$grade = '';
if(isset($_POST['grade'])) {
    $score = $_POST['score'];
}

if($score >= 90) {
     $grade  = "Your Grade is A+";
} elseif($score >= 85) {
     $grade = "Your Grade is A";
} elseif($score >= 80) {
     $grade = "Your Grade is A-";
} elseif($score >= 75) {
     $grade = "Your Grade is B+";
} elseif($score >= 70) {
     $grade = "Your Grade is B";
} elseif($score >= 65) {
    $grade  = "Your Grade is C";
} else {
    $grade = "ahh!... Grade is F";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exersice 9</title>
</head>
<body>
<h1>problem-1:temprature converter</h1>

   <form action="" method="POST">
    <h3>Enter Degree In Celsius</h3>
    <input type="text" name="degree" value="<?= isset($celsius) ? $celsius : '' ?>" required>
    <button name="temp">Submit</button>
   </form> 
   <h1>Degree by fehranite</h1>
   <h3><?= convert($celsius) ?></h3>

<h1>problem-2:Grade Evalution</h1>
    <form action="" method="POST">
     <h3>Enter your grade</h3>
     <input type="text" name="score" value="<?= isset($score) ? $score : '' ?>" required>
     <button name="grade" name="submit">Submit</button>
    </form>
    <h1>Grade</h1>
   <h3><?= $grade ?></h3>
</body>
</html>