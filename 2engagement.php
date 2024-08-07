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

// Handle form submission
if (isset($_POST['submit'])) {
    $engdate = $_POST['engdate'];
    $engtime = $_POST['engtime'];
    $engvenue = $_POST['engvenue'];
    $caterers = $_POST['caterers'];
    $decorators = $_POST['decorators'];
    $photographer = $_POST['photographer'];
    $musician = $_POST['musician'];
    $engoutfit = $_POST['engoutfit'];
    $makeup = $_POST['makeup'];
    $parlour = $_POST['parlour'];
    $engcards = $_POST['engcards'];
    $caterersname = $_POST['caterersname'];
    $decoratorsname = $_POST['decoratorsname'];
    $photographername = $_POST['photographername'];
    $musicianname = $_POST['musicianname'];

    // Insert data into the database
    $sql = "INSERT INTO engagement (engdate, engtime, engvenue, caterers, decorators, photographer, musician, engoutfit, makeup, parlour, engcards, caterersname, decoratorsname, photographername, musicianname)
            VALUES ('$engdate', '$engtime', '$engvenue', '$caterers', '$decorators', '$photographer', '$musician', '$engoutfit', '$makeup', '$parlour', '$engcards', '$caterersname', '$decoratorsname', '$photographername', '$musicianname')";

    if ($conn->query($sql) === TRUE) {
        // Retrieve the last inserted record
        $lastRecord = $conn->insert_id;

        // Fetch the last inserted record from the database
        $result = $conn->query("SELECT * FROM engagement WHERE id = $lastRecord");

        if ($result->num_rows > 0) {
            // Display the recently filled data
            $row = $result->fetch_assoc();
            echo "Recently Filled Data:<br>";
            echo "Engagement Date: " . $row['engdate'] . "<br>";
            echo "Engagement Time: " . $row['engtime'] . "<br>";
            echo "Engagement Venue: " . $row['engvenue'] . "<br>";
            echo "Caterers: " . $row['caterers'] . "<br>";
            echo "Decorators: " . $row['decorators'] . "<br>";
            echo "Photographer and Videographer: " . $row['photographer'] . "<br>";
            echo "Musicians: " . $row['musician'] . "<br>";
            echo "Engagement Outfit: " . $row['engoutfit'] . "<br>";
            echo "Makeup Artist: " . $row['makeup'] . "<br>";
            echo "Parlour Appointment: " . $row['parlour'] . "<br>";
            echo "Engagement Cards: " . $row['engcards'] . "<br>";
            echo "Caterer's Name: " . $row['caterersname'] . "<br>";
            echo "Decorator's Name: " . $row['decoratorsname'] . "<br>";
            echo "Photographer and Videographer's Name: " . $row['photographername'] . "<br>";
            echo "Musician's Name: " . $row['musicianname'] . "<br>";
            
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>











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
$result = $conn->query("SELECT * FROM engagement ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    // Display the recently filled data
    $row = $result->fetch_assoc();
    $engdate = $row['engdate'];
    $engtime = $row['engtime'];
    $engvenue = $row['engvenue'];
    $caterers = $row['caterers'];
    $decorators = $row['decorators'];
    $photographer = $row['photographer'];
    $musician = $row['musician'];
    $engoutfit = $row['engoutfit'];
    $makeup = $row['makeup'];
    $parlour = $row['parlour'];
    $engcards = $row['engcards'];
    $caterersname = $row['caterersname'];
    $decoratorsname = $row['decoratorsname'];
    $photographername = $row['photographername'];
    $musicianname = $row['musicianname'];

    // Display the data on the screen
    echo "Recently Filled Data:<br>";
    echo "Engagement Date: $engdate<br>";
    echo "Engagement Time: $engtime<br>";
    echo "Engagement Venue: $engvenue<br>";
    echo "Caterers: " . $row['caterers'] . "<br>";
    echo "Decorators: " . $row['decorators'] . "<br>";
    echo "Photographer and Videographer: " . $row['photographer'] . "<br>";
    echo "Musicians: " . $row['musician'] . "<br>";
    echo "Engagement Outfit: " . $row['engoutfit'] . "<br>";
    echo "Makeup Artist: " . $row['makeup'] . "<br>";
    echo "Parlour Appointment: " . $row['parlour'] . "<br>";
    echo "Engagement Cards: " . $row['engcards'] . "<br>";
    echo "Caterer's Name: " . $row['caterersname'] . "<br>";
    echo "Decorator's Name: " . $row['decoratorsname'] . "<br>";
    echo "Photographer and Videographer's Name: " . $row['photographername'] . "<br>";
    echo "Musician's Name: " . $row['musicianname'] . "<br>";
    // Repeat the above lines for other fields

    // You can customize the output based on your needs
} else {
    echo "No data available.";
}

$conn->close();
?>
