<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBJECTS</title>
</head>

<body>
    <?php include_once "menu.php"; ?>
    <form action="process/add-subject.php" method="POST">
        <h1>ENTER SUBJECT DETAILS</h1>
        <label for="">
            ENTER SUBJECT CODE:
            <input name="subject_code" type="text">
        </label><br>

        <label for="">
            ENTER SUBJECT DESCRIPTION:
            <input name="subject_description" type="text">
        </label><br>

        <label for="">
            YEAR LEVEL:
            <select name="year_level" id="">
                <option value="1ST YEAR">1ST YEAR</option>
                <option value="2ND YEAR">2ND YEAR</option>
                <option value="3RD YEAR">3RD YEAR</option>
                <option value="4TH YEAR">4TH YEAR</option>
            </select>
        </label><br>
        <label for="">
            COURSE:
            <select name="course" id="">
                <option value="BSIT">BSIT</option>
                <option value="BSED">BSED</option>
                <option value="BSBA">BSBA</option>
                <option value="BEED">BEED</option>
            </select>
        </label><br>
        <label for="">
            SEMESTER:
            <select name="semester" id="">
                <option value="1ST">1ST</option>
                <option value="2ND">2ND</option>
            </select>
        </label><br>

        <button type="submit">Submit</button>
    </form>
    <hr>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th colspan="7">SUBJECTS</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>SUBJECT CODE</th>
                <th>SUBJECT DESCRIPTION</th>
                <th>YEAR LVL</th>
                <th>COURSE</th>
                <th>SEMESTER</th>
                <th>ACTION</th>

            </tr>

        <tbody>
            <?php 
            require('connection.php');
            $sql="SELECT * FROM subject";
            $result = $conn->query($sql);
            $result_check = mysqli_num_rows($result);

            if ($result_check>0) {
                while ($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['subject_code'] ?></td>
                <td><?php echo $row['subject_description'] ?></td>
                <td><?php echo $row['year_level'] ?></td>
                <td><?php echo $row['course'] ?></td>
                <td><?php echo $row['semester'] ?></td>

                <td>
                    <a href="process/edit-subject.php?id=<?php echo $row['id'] ?>"><button>EDIT</button></a>
                    <a href="process/delete-subject.php?id=<?php echo $row['id'] ?>"><button>DELETE</button></a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "NO data";
            }
            

            
            ?>
        </tbody>

        </thead>
    </table>
</body>

</html>