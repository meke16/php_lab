<?php 

$age=0;

if(isset($_POST['submit'])) {
    $age = $_POST['age'];
}
if($age==0) {
    $msg = "";
} elseif($age < 18) {
    $msg = "Not eligble to vote";
} elseif($age >= 18) {
    $msg = "Eligble to vote";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Age:</label>
        <input name="age" type="number" value="<?= isset($age) ? $age : ""  ?>">
        <br>
        <br>
        <p><?= $age==0 ? " " : "You Are $age years old,$msg" ?></p>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>