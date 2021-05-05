<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>

    </style>
</head>
<body>
<form action="php/is-text-sent.php" method="GET">
    <p>

        <input type="submit" value="Show other database" name="button">
    </p>
</form>
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
    echo "<table><tr><th>Name </th><th>diameter of one thread, mm </th><th>daily amount of pumped gas, m3  </th><th> The number of threads of the pipeline </th><th> The name of the enterprise that operates the pipeline</th><th>Go to table gas metering</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["diameter of one thread, mm"]. "</td><td>". $row["daily amount of pumped gas, m3"]. "</td><td>" . $row["the number of threads of the pipeline"]. "</td><td>" . $row["the name of the enterprise that operates the pipeline"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}




?>
<?php
//$send = $_POST['button'];
$date = $_GET['text'];

if(isset($_GET['button']))
{echo 'true'; $bam=TRUE;}
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
    echo "<table><tr><th>Name </th><th>diameter of one thread, mm </th><th>daily amount of pumped gas, m3  </th><th> The number of threads of the pipeline </th><th> The name of the enterprise that operates the pipeline</th><th>Go to table gas metering</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["diameter of one thread, mm"]. "</td><td>". $row["daily amount of pumped gas, m3"]. "</td><td>" . $row["the number of threads of the pipeline"]. "</td><td>" . $row["the name of the enterprise that operates the pipeline"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</body>
</html>