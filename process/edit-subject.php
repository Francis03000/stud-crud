<?php
require('../connection.php');

$id = $_GET['id'];
$sql = "SELECT * FROM subject WHERE id=$id";
        $result = $conn->query($sql);
        $subject = $result->fetch_assoc();

        ?>
<form action="update-subject.php" method="post">
    <input type="hidden" name="id" value="<?php echo $subject['id'] ?>"><br>
    <input type="text" name="subject_code" value="<?php echo $subject['subject_code'] ?>"><br>
    <input type="text" name="subject_description" value="<?php echo $subject['subject_description'] ?>"><br>
    <label for="">
        YEAR LEVEL:
        <select name="year_level" id="">
            <option value="<?php echo $subject['year_level'] ?>"><?php echo $subject['year_level'] ?></option>
            <option value="1ST YEAR">1ST YEAR</option>
            <option value="2ND YEAR">2ND YEAR</option>
            <option value="3RD YEAR">3RD YEAR</option>
            <option value="4TH YEAR">4TH YEAR</option>
        </select>
    </label><br>
    <label for="">
        COURSE:
        <select name="course" id="">
            <option value="<?php echo $subject['course'] ?>"><?php echo $subject['course'] ?></option>
            <option value="BSIT">BSIT</option>
            <option value="BSED">BSED</option>
            <option value="BSBA">BSBA</option>
            <option value="BEED">BEED</option>
        </select>
    </label><br>
    <label for="">
        SEMESTER:
        <select name="semester" id="">
            <option value="<?php echo $subject['semester'] ?>"><?php echo $subject['semester'] ?></option>
            <option value="1ST">1ST</option>
            <option value="2ND">2ND</option>
        </select>
    </label><br>
    <input type="submit" name="update" value="UPDATE">
</form>
<?php    



?>