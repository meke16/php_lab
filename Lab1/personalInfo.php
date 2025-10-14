<?php
$departments = array(
    // College of Agriculture and Environmental Sciences (CAES)
    "Animal and Range Science",
    "Natural Resources and Environmental Science",
    "Plant Sciences",
    "Agricultural Economics and Agribusiness",
    "Rural Development and Agricultural Extension",

    //College of Business and Economics (CBE)
    "Accounting",
    "Cooperatives",
    "Management",
    "Economics",
    "Public Administration and Development Management",

    //College of Computing and Informatics
    "Computer Science",
    "Information Science",
    "Information Technology",
    "Software Engineering",
    "Statistics",

    // College of Education and Behavioral Sciences
    "Pedagogy",
    "Special Needs",
    "Educational Planning and Management",
    "English Language Improvement Centre",

    // College of Health and Medical Sciences
    "Medicine",
    "Pharmacy",
    "Nursing and Midwifery",
    "Public Health",
    "Environmental Health Sciences",
    "Medical Laboratory Science",

    //College of Law
    "Law",

    // College of Natural and Computational Sciences
    "Biology",
    "Chemistry",
    "Mathematics",
    "Physics",

    //College of Social Sciences and Humanities
    "Afan Oromo, Literature and Communication",
    "Gender and Development Studies",
    "Foreign Languages and Journalism",
    "History and Heritage Management",
    "Geography and Environmental Studies",
    "Sociology",

    // College of Veterinary Medicine
    "Veterinary Medicine",
    "Veterinary Laboratory Technology",

    // Haramaya Institute of Technology
    "Agricultural Engineering",
    "Water Resources and Irrigation Engineering",
    "Civil Engineering",
    "Electrical and Computer Engineering",
    "Mechanical Engineering",
    "Chemical Engineering",
    "Food Science and Post-Harvest Technology",
    "Food Technology and Process Engineering",

    // Sport Sciences Academy
    "Sport Sciences",

    // College of Agro-Industry and Land Resources
    "Land Administration",
    "Dairy and Meat Technology",
    "Forest Resource Management",
    "Soil Resources and Watershed Management",
);

$fullName = "Cherinet Habtamu";
$idNumber = "0975/16";
$department = "Software Engineering";
$year = 3;

if (isset($_POST['submit'])) {
    if (!empty($_POST['name'] && $_POST['idNumber'] && $_POST['department'] && $_POST['year'])) {
        $fullName = $_POST['name'];
        $idNumber = $_POST['idNumber'];
        $department = $_POST['department'];
        $year = $_POST['year'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal info</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #383232ff;
            display: flex;
            flex-direction: column;
        }

        .div1 {
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #772727ff;
        }

        .intro {
            color: #20a3a3ff;
            font-size: 85px;
            font-weight: bold;

        }

        .div2 {
            height: 300px;
            margin: 10px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 0;
            background-color: #1d4d49ff;
            border-radius: 10px;
        }

        .div3 {
            height: 300px;
            margin: 10px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 0;
            background-color: #182020ff;
            border-radius: 10px;
        }

        .test {
            font-size: 40px;
            margin-bottom: 15px;
            color: #208da8ff;
            text-decoration: underline;
        }

        .info {
            font-size: 40px;
            margin-bottom: 30px;
            color: #ad6969ff;
            text-decoration: underline;
        }

        h3 {
            font-size: 30px;
            color: #d6d0d0ff;
        }

        label {
            display: block;
            font-size: 40px;
            color: #197c56ff;
        }

        input {
            height: 35px;
            border: none;
            border-color: #0c4cadff;
            text-align: center;
            font-size: 20px;

        }

        input::placeholder {
            text-align: center;
            color: #ce2727ff;
            font-size: 15px;
        }

        select {
            height: 30px;
            border: none;
            border-color: #0c4cadff;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Exersice-2 -->
    <div class="div1">
        <h1 class="intro">Personal Info</h1>
    </div>
    <div class="div2">
        <h1 class="test">Test For New Student</h1>
        <form action="" method="POST" autocomplete="off">
            <label for="">
                Student Full Name:
                <input name="name" placeholder="John Doe" type="text"  required>

            </label>
            <label for="">
                ID Number:
                <input name="idNumber" placeholder="0000/16" type="text" required>

            </label>
            <label for="">
                Department:
                <select name="department" required>
                    <option value="">Select Department</option>
                    <?php foreach ($departments as $dep): ?>
                        <option value="<?= $dep ?>" <?= ($department == $dep) ? 'selected' : '' ?>><?= $dep ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <label for="">
                Year of study:
                <select name="year" required>
                    <option value="">Select Year</option>
                    <?php $years = range(1, 7); ?>
                    <?php foreach ($years as $yr): ?>
                        <option value="<?= $yr ?>" <?= ($year == $yr) ? 'selected' : '' ?>><?= $yr ?></option>
                    <?php endforeach; ?>
                </select>

            </label>
            <button style="padding: 10px 25px; margin-bottom: 10px; font-size: 20px; background: #0d9769ff; border:none" name="submit" type="submit">Submit</button>
        </form>
    </div>
    <div class="div3">
        <h1 class="info">Student Profile</h1>

        <h3>Name:<?= $fullName ?></h3>
        <h3>ID: <?= "UGPR/" . $idNumber ?></h3>
        <h3>Department: <?= $department ?></h3>
        <h3>Year: <?= $year ?></h3>

    </div>
</body>

</html>