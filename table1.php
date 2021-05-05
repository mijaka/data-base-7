<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>

<?php
$servername ="localhost";
$username = "root";
$password = "";
$name_db = "transgas";

$conn = new mysqli($servername, $username, $password, $name_db );
if ($conn-> connect_error){
    die("Connection failed: " .$conn->connect_error);
}
echo "Connection successfully";
echo "<br>";
$result = mysqli_query($conn, "SELECT * FROM `transgas`");

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name </th><th>Date </th><th>Map </th><th>The number of threads of the pipeline </th>
<th> The name of the enterprise that operates the pipeline</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["date"]. "</td><td>". $row["map"]. "</td><td>" . $row["the number of threads of the pipeline"]. "</td><td>"
            . $row["the name of the enterprise that operates the pipeline"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



?>
</body>
</html>