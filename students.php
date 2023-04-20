<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENTS</title>
</head>

<body>
    <?php include_once "menu.php"; ?>
    <form action="process/add-students.php" method="POST">
        <h1>ENTER STUDENT DETAILS</h1>
        <label for="">
            ENTER FIRST NAME:
            <input name="last_name" type="text">
        </label><br>
        <label for="">
            ENTER LAST NAME:
            <input name="first_name" type="text">
        </label><br>
        <div>
            <label for="">MALE <input type="radio" value="MALE" name="gender" id=""></label>
            <label for="">FEMALE <input type="radio" value="FEMALE" name="gender" id=""></label>
        </div>
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
        <br>
        <button type="submit">Submit</button>
    </form>
    <hr>
    <br>
    <div>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>LAST_NAME</th>
                    <th>FIRST_NAME</th>
                    <th>GENDER</th>
                    <th>YEAR</th>
                    <th>COURSE</th>
                    <th>SEMESTER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require('connection.php');
                    $sql="SELECT * FROM student";
                    $result = $conn->query($sql);
                    $result_check = mysqli_num_rows($result);

                    if ($result_check>0) {
                        while ($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['year_level'] ?></td>
                    <td><?php echo $row['course'] ?></td>
                    <td><?php echo $row['semester'] ?></td>

                    <td>
                        <a href="process/edit-student.php?id=<?php echo $row['id'] ?>"><button>EDIT</button></a>
                        <a href="process/delete-student.php?id=<?php echo $row['id'] ?>"><button>DELETE</button></a>
                        <a href="student-subjects.php?id=<?php echo $row['id'] ?>"><button>ADD SUBJECTS</button></a>
                    </td>
                </tr>
                <?php
                        }
                    } else {
                        echo "NO data";
                    }

                ?>
            </tbody>
        </table>

    </div>
</body>

</html>