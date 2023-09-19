<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the POST request
    $courseName = isset($_POST["courseName"]) ? $_POST["courseName"] : '';
    $pagesSlides = isset($_POST["pagesSlides"]) ? $_POST["pagesSlides"] : '';
    $remaining = isset($_POST["remaining"]) ? $_POST["remaining"] : 0;
    $days = isset($_POST["days"]) ? $_POST["days"] : 0;
    
    
    // Perform database insertion
 // Perform database insertion
$conn = new mysqli("localhost", "root", "113234adess", "study");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO courses (course_name, pages_slides, remaining, days) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siii", $courseName, $pagesSlides, $remaining, $days);

$success = $stmt->execute(); // Execute the SQL query

if ($success) {
    echo "Course added successfully";
} else {
    echo "Error adding course: " . $stmt->error;
}

var_dump($_POST);

$stmt->close();
$conn->close();

}
?>


