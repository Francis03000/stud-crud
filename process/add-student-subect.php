<?php
require('../connection.php');

$student_id = $_POST['student_id'];



foreach( $_POST['subject'] as $subjects) { 
    
        $query = "INSERT INTO student_subject(student_id, subject_id) VALUES('$student_id', '$subjects')";
        $sql = mysqli_query($conn, $query);
    
  }
// $total_sub = "";
// foreach($_POST['subject'] as $item){
        
//     $sub =  $item;

//     $total_sub = $total_sub." ".$sub;  
    
// }


if ($sql === TRUE) {
    echo "<script>
    alert('Subject has been added successfully');
    window.location.href = '../students.php';
    </script>";
}else{
    echo "<script>
    alert('Subject Error');
    window.location.href = '../students.php';
    </script>";
}



?>