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
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['password']; // Use a different name for the password variable
    
    // Insert data into the "destination" table
    $stmt = $conn->prepare("INSERT INTO destination (firstName, lastName, mobile, email, userName, password) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssisss", $firstName, $lastName, $mobile, $email, $userName, $userPassword); // Use the different name here

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to index.html upon successful registration
        header("Location: loginpage.html");
        exit(); // Make sure to exit to stop further execution
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Remember to close the connection when done
$conn->close();
?>
