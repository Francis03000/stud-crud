<?php
require('../connection.php');
    $id = $_POST['id'];
    $subject_code = $_POST['subject_code'];
    $subject_description = $_POST['subject_description'];
    $year_level = $_POST['year_level'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];

    

    $sql = "UPDATE subject SET subject_code = '$subject_code',subject_description = '$subject_description',year_level = '$year_level',course = '$course',semester = '$semester' WHERE id = $id ";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Subject has been updated successfully');
        window.location.href = '../subjects.php';
        </script>";
    }else{ 
        echo "<script>
        alert('Subject Error');
        window.location.href = '../subjects.php';
        </script>";
    }
    
    

?>