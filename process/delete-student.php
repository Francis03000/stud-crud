<?php
require('../connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Student has been deleted successfully');
    window.location.href = '../students.php';
    </script>";
}else{ 
    echo "<script>
    alert('Student Error');
    window.location.href = '../students.php';
    </script>";
}



?>