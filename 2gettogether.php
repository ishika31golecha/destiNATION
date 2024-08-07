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
$result = $conn->query("SELECT * FROM gettogether ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    // Display the recently filled data
    $row = $result->fetch_assoc();
    $getdate = $row['getdate'];
    $gettime = $row['gettime'];
    $getvenue = $row['getvenue'];
    $getpurpose = $row['getpurpose'];
    $gettheme = $row['gettheme'];
    $caterers = $row['caterers'];
    $decorators = $row['decorators'];
    $photographer = $row['photographer'];
    $musician = $row['musician'];
    $getoutfit = $row['getoutfit'];
    $getcards = $row['getcards'];
    $caterersname = $row['caterersname'];
    $decoratorsname = $row['decoratorsname'];
    $photographername = $row['photographername'];
    $musicianname = $row['musicianname'];

    // Display the data on the screen
    echo "Recently Filled Data:<br>";
    echo "Get-Together Date: $getdate<br>";
    echo "Get-Together Time: $gettime<br>";
    echo "Get-Together Venue: $getvenue<br>";
    echo "Get-Together Purpose: $getpurpose<br>";
    echo "Get-Together Theme: $gettheme<br>";
    echo "Caterers: $caterers<br>";
    echo "Decorators: $decorators<br>";
    echo "Photographer: $photographer<br>";
    echo "Musician: $musician<br>";
    echo "Get-Together Outfit: $getoutfit<br>";
    echo "Get-Together Cards: $getcards<br>";
    echo "Caterers Name: $caterersname<br>";
    echo "Decorators Name: $decoratorsname<br>";
    echo "Photographer Name: $photographername<br>";
    echo "Musician Name: $musicianname<br>";
    // You can customize the output based on your needs
} else {
    echo "No data available.";
}

$conn->close();
?>
