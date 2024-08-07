<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you have a password, provide it here
$dbname = "destination";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $locationName = $_POST['locationName'];


    // Insert data into the "destination" table
    $stmt = $conn->prepare("INSERT INTO triptemplate (locationName) VALUES (?)");
    
    // Bind parameters
    $stmt->bind_param("s", $locationName);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Remember to close the connection when done
$conn->close();
?>
