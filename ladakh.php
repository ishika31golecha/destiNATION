<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $startdt = $_POST['startdt'];
    $enddt = $_POST['enddt'];
    $members = $_POST['members'];
    $ladakhaccomodation = $_POST['ladakhaccomodation'];
    $transport = $_POST['transport'];
    $ladakhtourist = $_POST['ladakhtourist'];

    // Additional processing for checkbox values (Places to Visit and Activities to Experience)
    $placesToVisit = isset($_POST['placesToVisit']) ? implode(", ", $_POST['placesToVisit']) : "";
    $activitiesToExperience = isset($_POST['activitiesToExperience']) ? implode(", ", $_POST['activitiesToExperience']) : "";

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
    $sql = "INSERT INTO ladakh (startdt, enddt, members, ladakhaccomodation, transport, ladakhtourist, placesToVisit, activitiesToExperience)
            VALUES ('$startdt', '$enddt', '$members', '$ladakhaccomodation', '$transport', '$ladakhtourist', '$placesToVisit', '$activitiesToExperience')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2ladakh.php");
        exit();    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
