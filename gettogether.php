<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $getdate = $_POST['getdate'];
    $gettime = $_POST['gettime'];
    $getvenue = $_POST['getvenue'];
    $getpurpose = $_POST['getpurpose'];
    $gettheme = $_POST['gettheme'];
    $caterers = $_POST['caterers'];
    $decorators = $_POST['decorators'];
    $photographer = $_POST['photographer'];
    $musician = $_POST['musician'];
    $getoutfit = $_POST['getoutfit'];
    $getcards = $_POST['getcards'];
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
    $sql = "INSERT INTO gettogether (getdate, gettime, getvenue, getpurpose, gettheme, caterers, decorators, photographer, musician, getoutfit, getcards, caterersname, decoratorsname, photographername, musicianname)
            VALUES ('$getdate', '$gettime', '$getvenue', '$getpurpose', '$gettheme', '$caterers', '$decorators', '$photographer', '$musician', '$getoutfit', '$getcards', '$caterersname', '$decoratorsname', '$photographername', '$musicianname')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2gettogether.php");
        exit();    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
