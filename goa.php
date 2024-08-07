<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $startdt = $_POST['startdt'];
    $enddt = $_POST['enddt'];
    $members = $_POST['members'];
    $goaaccomodation = $_POST['goaaccomodation'];
    $transport = $_POST['transport'];
    $goatourist = $_POST['goatourist'];

    // Additional processing for checkbox values (Places to Visit and Activity to Perform)
    $placesToVisit = isset($_POST['places']) ? implode(", ", $_POST['places']) : "";
    $activitiesToPerform = isset($_POST['activities']) ? implode(", ", $_POST['activities']) : "";

    // Insert data into the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "destination"; // Change this to your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into your table
    $sql = "INSERT INTO goa (startdt, enddt, members, goaaccomodation, transport, goatourist, placesToVisit, activitiesToPerform)
            VALUES ('$startdt', '$enddt', '$members', '$goaaccomodation', '$transport', '$goatourist', '$placesToVisit', '$activitiesToPerform')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2goa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
