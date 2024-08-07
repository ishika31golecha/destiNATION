<?php
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "destination";  // Replace with your actual database name

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
        header("Location: 2engagement.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
