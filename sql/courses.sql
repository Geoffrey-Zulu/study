CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    pages_slides INT NOT NULL,
    remaining INT NOT NULL,
    days INT NOT NULL
);
