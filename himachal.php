<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $startdt = $_POST['startdt'];
    $enddt = $_POST['enddt'];
    $members = $_POST['members'];
    $himachalaccomodation = $_POST['himachalaccomodation'];
    $transport = $_POST['transport'];
    $himachaltourist = $_POST['himachaltourist'];

    // Additional processing for checkbox values (Places to Visit and Activities to Enjoy)
    $placesToVisit = isset($_POST['placesToVisit']) ? implode(", ", $_POST['placesToVisit']) : "";
    $activitiesToEnjoy = isset($_POST['activitiesToEnjoy']) ? implode(", ", $_POST['activitiesToEnjoy']) : "";

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
    $sql = "INSERT INTO himachal (startdt, enddt, members, himachalaccomodation, transport, himachaltourist, placesToVisit, activitiesToEnjoy)
            VALUES ('$startdt', '$enddt', '$members', '$himachalaccomodation', '$transport', '$himachaltourist', '$placesToVisit', '$activitiesToEnjoy')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2himachal.php");
        exit();    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
