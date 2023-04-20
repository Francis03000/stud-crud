<?php
require('../connection.php');

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$gender = $_POST['gender'];
$year_level = $_POST['year_level'];
$course = $_POST['course'];
$semester = $_POST['semester'];

$sql = "INSERT INTO student (last_name, first_name,gender,year_level,course,semester)  VALUES('$last_name', '$first_name', '$gender', '$year_level','$course','$semester')";


if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Student has been added successfully');
    window.location.href = '../students.php';
    </script>";
}else{
    echo "<script>
    alert('Student Error');
    window.location.href = '../students.php';
    </script>";
}



?>