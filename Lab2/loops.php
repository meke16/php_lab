<?php

echo "<h3>For Loops </h3>";
for($x=0; $x < 11; $x++) {
    echo "$x<br>";
}


echo "<h3>While Loops</h3>";

$x=10;
while($x > 0) {
    echo "$x<br>";
    $x--;

}

echo "<h3>Foreach Loops</h3>";

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
foreach($departments as $dep) {
    echo "<h4>$dep<br></h4>";
}


echo "<h1>Multiplication Table</h1>";
for($i=1; $i < 11; $i++) {
    echo "<table border='3'>";
    for($j=1; $j<11; $j++) {
        echo "<th>";
        echo $i*$j."  ";
        echo "<th>";
    }
    echo "<br>";
    echo '</table>';
}
echo "<br>";
$sum=0;
for($s=0; $s < 101; $s++) {
    if($s%2==0){
        $sum +=$s;
    }
}

echo "<h1>The sum of even numbers between 1-100 is $sum</h1>";