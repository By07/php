<?php
// establish database connection
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "student_details");

// insert data into database
if (isset($_POST['btnInsert'])) {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $grade = $_POST['grade'];

    $str = "INSERT INTO student VALUES ($rollno, '$name', '$dept', $year, '$grade')";
    if (mysqli_query($con, $str)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($con);
    }
}

// search data based on passing year and class grades
if (isset($_POST['btnSearch'])) {
    $year = $_POST['year'];
    $grade = $_POST['grade'];

    $str = "SELECT * FROM students WHERE passingYear = $year AND classGrades = '$grade'";
    $result = mysqli_query($con, $str);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Roll No</th><th>Name</th><th>Department</th><th>Passing Year</th><th>Class Grades</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["rollNo"] . "</td>";
            echo "<td>" . $row["studName"] . "</td>";
            echo "<td>" . $row["studDept"] . "</td>";
            echo "<td>" . $row["passingYear"] . "</td>";
            echo "<td>" . $row["classGrades"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}

mysqli_close($con);
?>
