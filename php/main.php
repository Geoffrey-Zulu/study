<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Study Goals</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include your custom CSS (if any) -->
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    <!-- Navbar (optional) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="color: green; text-align: center; font-weight: bold; font-size: 24px;">STUDY TRACKER</a>
</nav>


    <!-- Container for your table -->
    <div class="container mt-4">
        <form action="update_remaining.php" method="post">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Pages/Slides</th>
                        <th>Remaining</th>
                        <th>Days</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection (modify with your credentials)
                    $conn = new mysqli("localhost", "root", "113234adess", "study");
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                
                    // Fetch course data from the database
                    $sql = "SELECT course_id, course_name, pages_slides, remaining, days FROM courses";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Output table rows dynamically
                            echo "<tr>";
                            echo "<td>" . $row["course_name"] . "</td>";
                            echo "<td>" . $row["pages_slides"] . "</td>";
                            echo '<td><input type="number" name="remaining[' . $row["course_id"] . ']" value="' . $row["remaining"] . '"></td>';
                            echo "<td>" . $row["days"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No courses found in the database.";
                    }
                
                    $conn->close();
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and your custom JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
