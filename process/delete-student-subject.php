<?php
require('../connection.php');

$student_id = $_POST['student_id'];
foreach( $_POST['subject_id'] as $id) { 
    $query = "DELETE FROM student_subject WHERE student_id=$student_id AND subject_id='$id'";
    $sql = mysqli_query($conn, $query);
}
if ($sql === TRUE) {
    echo "<script>
    alert('Subject has been deleted successfully');
    window.location.href = '../students.php';
    </script>";
}else{ 
    echo "<script>
    alert('Student Error');
    window.location.href = '../students.php';
    </script>";
}



?>