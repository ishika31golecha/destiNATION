<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $startdt = $_POST['startdt'];
    $enddt = $_POST['enddt'];
    $members = $_POST['members'];
    $gujarataccomodation = $_POST['gujarataccomodation'];
    $transport = $_POST['transport'];
    $gujarattourist = $_POST['gujarattourist'];

    // Additional processing for checkbox values (Places to Visit and Activities to Enjoy)
$placesToVisit = isset($_POST['places']) ? implode(", ", $_POST['places']) : "";
$activitiesToEnjoy = isset($_POST['activities']) ? implode(", ", $_POST['activities']) : "";


    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "destination";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into your table
    $sql = "INSERT INTO gujarat (startdt, enddt, members, gujarataccomodation, transport, gujarattourist, placesToVisit, activitiesToEnjoy)
            VALUES ('$startdt', '$enddt', '$members', '$gujarataccomodation', '$transport', '$gujarattourist', '$placesToVisit', '$activitiesToEnjoy')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2gujarat.php");
        exit();    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>