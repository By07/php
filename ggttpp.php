<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "students_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE students1 (
    rollNo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    studName VARCHAR(50) NOT NULL,
    studDept VARCHAR(50) NOT NULL,
    passingYear YEAR(4) NOT NULL,
    classGrades ENUM('First Class', 'Second Class', 'Pass') NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Insert entries
$sql = "INSERT INTO students (studName, studDept, passingYear, classGrades) VALUES
    ('John Doe', 'Computer Science', '2022', 'First Class'),
    ('Jane Smith', 'Mechanical Engineering', '2021', 'Pass'),
    ('Bob Johnson', 'Electrical Engineering', '2023', 'Second Class')";

if (mysqli_query($conn, $sql)) {
    echo "Entries added successfully.";
} else {
    echo "Error adding entries: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
