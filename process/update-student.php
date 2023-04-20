<?php
require('../connection.php');
    $id = $_POST['id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $gender = $_POST['gender'];
    $year_level = $_POST['year_level'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];

    

    $sql = "UPDATE student SET last_name = '$last_name',first_name = '$first_name',gender = '$gender',year_level = '$year_level',course = '$course',semester = '$semester' WHERE id = $id ";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Student has been updated successfully');
        window.location.href = '../students.php';
        </script>";
    }else{ 
        echo "<script>
        alert('Student Error');
        window.location.href = '../students.php';
        </script>";
    }
    
    

?>