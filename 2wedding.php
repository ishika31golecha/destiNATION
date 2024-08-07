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
$result = $conn->query("SELECT * FROM wedding ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    // Display the recently filled data
    $row = $result->fetch_assoc();
    $weddingdate = $row['weddingdate'];
    $weddingvenue = $row['weddingvenue'];
    $haldi = $row['haldi'];
    $mehandi = $row['mehandi'];
    $sangeet = $row['sangeet'];
    $baarat = $row['baarat'];
    $phere = $row['phere'];
    $reception = $row['reception'];
    $vidai = $row['vidai'];
    $grihpravesh = $row['grihpravesh'];
    $caterers = $row['caterers'];
    $decorators = $row['decorators'];
    $photographer = $row['photographer'];
    $band = $row['band'];
    $musician = $row['musician'];
    $outfit = $row['outfit'];
    $makeup = $row['makeup'];
    $parlour = $row['parlour'];
    $cards = $row['cards'];
    $caterersname = $row['caterersname'];
    $decoratorsname = $row['decoratorsname'];
    $photographername = $row['photographername'];
    $bandname = $row['bandname'];
    $musicianname = $row['musicianname'];
    // Repeat the above lines for other fields

    // Display the data on the screen
    echo "Recently Filled Data:<br>";
    echo "Wedding Date: $weddingdate<br>";
    echo "Wedding Venue: $weddingvenue<br>";
    echo "Haldi: $haldi<br>";
    echo "Mehandi: $mehandi<br>";
    echo "Sangeet: $sangeet<br>";
    echo "Baarat: $baarat<br>";
    echo "Phare: $phere<br>";
    echo "Reception: $reception<br>";
    echo "Vidai: $vidai<br>";
    echo "Grih Pravesh: $grihpravesh<br>";
    echo "Caterers: $caterers<br>";
    echo "Decorators: $decorators<br>";
    echo "Photographer and Videographer: $photographer<br>";
    echo "Band: $band<br>";
    echo "Musicians: $musician<br>";
    echo "Outfit: $outfit<br>";
    echo "Makeup Artist: $makeup<br>";
    echo "Parlor Appointment: $parlour<br>";
    echo "Invitation Cards: $cards<br>";
    echo "Caterer's Name: $caterersname<br>";
    echo "Decorator's Name: $decoratorsname<br>";
    echo "Photographer and Videographer's Name: $photographername<br>";
    echo "Caterer's Name: $caterersname<br>";
    echo "Decorator's Name: $decoratorsname<br>";
    echo "Photographer and Videographer's Name: $photographername<br>";
    echo "Band's Name: $bandname<br>";
    echo "Musician's Name: $musicianname<br>";
    // Repeat the above lines for other fields

    // You can customize the output based on your needs
} else {
    echo "No data available.";
}

$conn->close();
?>
