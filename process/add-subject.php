<?php
require('../connection.php');

$subject_code = $_POST['subject_code'];
$subject_description = $_POST['subject_description'];
$year_level = $_POST['year_level'];
$course = $_POST['course'];
$semester = $_POST['semester'];

$sql = "INSERT INTO subject (subject_code, subject_description,year_level,course,semester)  VALUES('$subject_code', '$subject_description', '$year_level','$course','$semester')";


if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Subject has been added successfully');
    window.location.href = '../subjects.php';
    </script>";
}else{
    echo "<script>
    alert('Subject Error');
    window.location.href = '../subjects.php';
    </script>";
}


?>