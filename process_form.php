<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and fetch form data
    $surname = htmlspecialchars($_POST['surname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $othernames = htmlspecialchars($_POST['othernames']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);
    $school = htmlspecialchars($_POST['school']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $year_completed = htmlspecialchars($_POST['year_completed']);
    $exam_name = htmlspecialchars($_POST['exam_name']);
    $exam_year = htmlspecialchars($_POST['exam_year']);
    $exam_number = htmlspecialchars($_POST['exam_number']);

    $title = isset($_POST['title']) ? $_POST['title'] : [];
    $level = isset($_POST['level']) ? $_POST['level'] : [];

    echo "<h1>Submitted Information</h1>";
    echo "<p><strong>Surname:</strong> $surname</p>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Other Names:</strong> $othernames</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>School Attended:</strong> $school</p>";
    echo "<p><strong>Qualification Obtained:</strong> $qualification</p>";
    echo "<p><strong>Year Completed:</strong> $year_completed</p>";
    echo "<p><strong>Examination Name:</strong> $exam_name</p>";
    echo "<p><strong>Examination Year:</strong> $exam_year</p>";
    echo "<p><strong>Examination Number:</strong> $exam_number</p>";
    echo "<p><strong>Title:</strong> " . implode(", ", $title) . "</p>";
    echo "<p><strong>Level Applied for:</strong> " . implode(", ", $level) . "</p>";
} else {
    echo "Form not submitted correctly.";
}
?>
