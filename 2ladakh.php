<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .ladakh-heading-header{
    height: 35vh;
    width: 100%;
    background-image: linear-gradient(rgba(151, 148, 144, 0.5), rgba(88, 53, 0, 0.5)), url(https://img.lovepik.com/background/20211022/small/lovepik-sky-clouds-background-image_401746897.jpg);
    background-size: cover;
    text-align: center;
    color: rgb(0, 0, 0); 
    margin-bottom: 50px;  
}

.ladakh-heading-header h1{
    font-size: 90px;
    margin: 0;
}
    </style>
</head>
<body>
<section class="ladakh-heading">
            <div class="ladakh-heading-header">
                <h1>LADAKH - <i>Land of High Passes</i></h1>
            </div>
        </section>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "destination"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve the most recent record from the database
$sql = "SELECT * FROM ladakh ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the data in a table
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Members</th>
                <th>Accommodation</th>
                <th>Transport</th>
                <th>Tourist Guide</th>
                <th>Places to Visit</th>
                <th>Activities</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['startdt']}</td>
                <td>{$row['enddt']}</td>
                <td>{$row['members']}</td>
                <td>{$row['ladakhaccomodation']}</td>
                <td>{$row['transport']}</td>
                <td>{$row['ladakhtourist']}</td>
                <td>{$row['placesToVisit']}</td>
                <td>{$row['activitiesToExperience']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

// Close connection
$conn->close();
?>

</body>
</html>
