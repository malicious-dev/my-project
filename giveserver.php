<!Doctype html>
<html>
<body>


<?php 
    $servername = "localhost";
    $username = "malware";
    $password = "harshit";
    $dbname = "registration";

// Create connection
$conn = new mysql($localhost, $malware, $harshit, $registration);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, registration, email, phone FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<br> id: ", $row["id"]. " - Name; ". $row["registration"]. " " . $row["phone"] . "
        <br>";
    }
} else {
    echo "0 results";
}
    
$conn->close();
?>
