// script.js

// Handle form submission (Add Course)
$("#courseForm").submit(function (event) {
    event.preventDefault();

    const courseName = $("#courseName").val();
    const pagesSlides = $("#pagesSlides").val();
    const remaining = $("#remaining").val();
    const days = $("#days").val();

    // Send data to server via AJAX for database insertion
    $.ajax({
        url: "insert_course.php", // Your PHP script to insert data
        method: "POST",
        data: {
            courseName: courseName,
            pagesSlides: pagesSlides,
            remaining: remaining,
            days: days
        },
        success: function (response) {
            // Handle success (e.g., update the table on the webpage)
            console.log("Course added:", response);
            // Refresh the table or update it with the new data
        },
        error: function (error) {
            // Handle errors
            console.error("Error adding course:", error);
        }
    });
});
