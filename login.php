<?php
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // If you have a password, provide it here
    $dbname = "destination";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM destination WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $destination = $result->fetch_assoc();

    if ($destination) {
        $dbPassword = $destination["password"];

        if ($password == $dbPassword) {
            // Set session variables
            $_SESSION["userName"] = $destination["userName"];
            $_SESSION["email"] = $destination["email"];

            // Debug: Print session information
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';

            $stmt->close();
            $conn->close();

            header("Location: index.php");
            exit();
        } else {
            $loginError = "Email or Password is incorrect!";
        }
    } else {
        $loginError = "Email or Password is incorrect!";
    }

    // Close the statement and connection when done
    $stmt->close();
    $conn->close();
}
?>
