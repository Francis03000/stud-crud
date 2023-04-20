<?php
require('../connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM subject WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Subject has been deleted successfully');
    window.location.href = '../subjects.php';
    </script>";
}else{ 
    echo "<script>
    alert('Subject Error');
    window.location.href = '../subjects.php';
    </script>";
}



?>