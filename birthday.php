<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $birthdate = $_POST['birthdate'];
    $birthtime = $_POST['birthtime'];
    $birthvenue = $_POST['birthvenue'];
    $birththeme = $_POST['birththeme'];
    $caterers = $_POST['caterers'];
    $decorators = $_POST['decorators'];
    $photographer = $_POST['photographer'];
    $musician = $_POST['musician'];
    $birthoutfit = $_POST['birthoutfit'];
    $cake = $_POST['cake'];
    $returngifts = $_POST['returngifts'];
    $birthcards = $_POST['birthcards'];
    $caterersname = $_POST['caterersname'];
    $decoratorsname = $_POST['decoratorsname'];
    $photographername = $_POST['photographername'];
    $musicianname = $_POST['musicianname'];

    // Database connection
    $servername = "localhost"; // Change this if your database is hosted elsewhere
    $username = "root";        // Your MySQL username
    $password = "";            // Your MySQL password
    $dbname = "destination"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO birthday (birthdate, birthtime, birthvenue, birththeme, caterers, decorators, photographer, musician, birthoutfit, cake, returngifts, birthcards, caterersname, decoratorsname, photographername, musicianname)
            VALUES ('$birthdate', '$birthtime', '$birthvenue', '$birththeme', '$caterers', '$decorators', '$photographer', '$musician', '$birthoutfit', '$cake', '$returngifts', '$birthcards', '$caterersname', '$decoratorsname', '$photographername', '$musicianname')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2birthday.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
