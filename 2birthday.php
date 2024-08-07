<?php
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "destination";    // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the recently filled data from the database
$result = $conn->query("SELECT * FROM birthday ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    // Display the recently filled data
    $row = $result->fetch_assoc();
    $birthdate = $row['birthdate'];
    $birthtime = $row['birthtime'];
    $birthvenue = $row['birthvenue'];
    $birththeme = $row['birththeme'];
    $caterers = $row['caterers'];
    $decorators = $row['decorators'];
    $photographer = $row['photographer'];
    $musician = $row['musician'];
    $birthoutfit = $row['birthoutfit'];
    $cake = $row['cake'];
    $returngifts = $row['returngifts'];
    $birthcards = $row['birthcards'];
    $caterersname = $row['caterersname'];
    $decoratorsname = $row['decoratorsname'];
    $photographername = $row['photographername'];
    $musicianname = $row['musicianname'];

    // Display the data on the screen
    echo "Recently Filled Data:<br>";
    echo "Birthdate: $birthdate<br>";
    echo "Birth Time: $birthtime<br>";
    echo "Birth Venue: $birthvenue<br>";
    echo "Theme: $birththeme<br>";
    echo "Caterers: $caterers<br>";
    echo "Decorators: $decorators<br>";
    echo "Photographer and Videographer: $photographer<br>";
    echo "Musicians: $musician<br>";
    echo "Outfit: $birthoutfit<br>";
    echo "Cake: $cake<br>";
    echo "Return Gifts: $returngifts<br>";
    echo "Birthday Cards: $birthcards<br>";
    echo "Caterer's Name: $caterersname<br>";
    echo "Decorator's Name: $decoratorsname<br>";
    echo "Photographer and Videographer's Name: $photographername<br>";
    echo "Musician's Name: $musicianname<br>";


    // Repeat the above lines for other fields

    // You can customize the output based on your needs
} else {
    echo "No data available.";
}

$conn->close();
?>
