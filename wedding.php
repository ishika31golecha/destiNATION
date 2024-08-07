<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $weddingdate = $_POST['weddingdate'];
    $weddingvenue = $_POST['weddingvenue'];
    $haldi = $_POST['haldi'];
    $mehandi = $_POST['mehandi'];
    $sangeet = $_POST['sangeet'];
    $baarat = $_POST['baarat'];
    $phere = $_POST['phere'];
    $reception = $_POST['reception'];
    $vidai = $_POST['vidai'];
    $grihpravesh = $_POST['grihpravesh'];
    $caterers = $_POST['caterers'];
    $decorators = $_POST['decorators'];
    $photographer = $_POST['photographer'];
    $band = $_POST['band'];
    $musician = $_POST['musician'];
    $outfit = $_POST['outfit'];
    $makeup = $_POST['makeup'];
    $parlour = $_POST['parlour'];
    $cards = $_POST['cards'];
    $caterersname = $_POST['caterersname'];
    $decoratorsname = $_POST['decoratorsname'];
    $photographername = $_POST['photographername'];
    $bandname = $_POST['bandname'];
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
    $sql = "INSERT INTO wedding (weddingdate, weddingvenue, haldi, mehandi, sangeet, baarat, phere, reception, vidai, grihpravesh, caterers, decorators, photographer, band, musician, outfit, makeup, parlour, cards, caterersname, decoratorsname, photographername, bandname, musicianname)
            VALUES ('$weddingdate', '$weddingvenue', '$haldi', '$mehandi', '$sangeet', '$baarat', '$phere', '$reception', '$vidai', '$grihpravesh', '$caterers', '$decorators', '$photographer', '$band', '$musician', '$outfit', '$makeup', '$parlour', '$cards', '$caterersname', '$decoratorsname', '$photographername', '$bandname', '$musicianname')";

    if ($conn->query($sql) === TRUE) {
        header("Location: 2wedding.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
