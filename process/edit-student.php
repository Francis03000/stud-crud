<?php
require('../connection.php');

$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id=$id";
        $result = $conn->query($sql);
        $student = $result->fetch_assoc();

        ?>
<form action="update-student.php" method="post">
    <input type="hidden" name="id" value="<?php echo $student['id'] ?>"><br>
    <input type="text" name="last_name" value="<?php echo $student['last_name'] ?>"><br>
    <input type="text" name="first_name" value="<?php echo $student['first_name'] ?>"><br>
    <input type="text" name="gender" value="<?php echo $student['gender'] ?>"><br>
    <label for="">
        YEAR LEVEL:
        <select name="year_level" id="">
            <option value="<?php echo $student['year_level'] ?>"><?php echo $student['year_level'] ?></option>
            <option value="1ST YEAR">1ST YEAR</option>
            <option value="2ND YEAR">2ND YEAR</option>
            <option value="3RD YEAR">3RD YEAR</option>
            <option value="4TH YEAR">4TH YEAR</option>
        </select>
    </label><br>
    <label for="">
        COURSE:
        <select name="course" id="">
            <option value="<?php echo $student['course'] ?>"><?php echo $student['course'] ?></option>
            <option value="BSIT">BSIT</option>
            <option value="BSED">BSED</option>
            <option value="BSBA">BSBA</option>
            <option value="BEED">BEED</option>
        </select>
    </label><br>
    <label for="">
        SEMESTER:
        <select name="semester" id="">
            <option value="<?php echo $student['semester'] ?>"><?php echo $student['semester'] ?></option>
            <option value="1ST">1ST</option>
            <option value="2ND">2ND</option>
        </select>
    </label><br>
    <input type="submit" name="update" value="UPDATE">
</form>
<?php    



?>