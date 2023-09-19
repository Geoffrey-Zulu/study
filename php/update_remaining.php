<?php
// Database connection (modify with your credentials)
$conn = new mysqli("localhost", "root", "113234adess", "study");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request contains updated values
if (isset($_POST["remaining"])) {
    $updatedValues = $_POST["remaining"];

    foreach ($updatedValues as $courseId => $remaining) {
        // Validate and sanitize the input if needed
        $courseId = intval($courseId);
        $remaining = intval($remaining);

        // Update the "Remaining" value in the database
        $sql = "UPDATE courses SET remaining = ? WHERE course_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $remaining, $courseId);

        if ($stmt->execute()) {
            // Success
        } else {
            // Error
            echo json_encode(["success" => false, "error" => $stmt->error]);
            exit();
        }
    }

    // All updates were successful
    echo json_encode(["success" => true]);
} else {
    // No updated values found
    echo json_encode(["success" => false]);
}

$conn->close();
?>
