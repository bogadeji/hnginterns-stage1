

<!Doctype HTML>
<html>
<head>
	<title>HNG INTERNSHIP - STAGE 1</title>
</head>
<body>
	
<?php

// Create connection

$conn = new mysqli('localhost', 'root', '', 'hnginternship');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, Name, slack, github FROM name";
$result = $conn->query($sql);
 //$result = mysqli_query($conn, "SELECT Name, Slack Username, Github Username, FROM names");
 
    // Checking if the records were found 
    if ($result) {
//select a database to work with


    while($row = $result->fetch_assoc()) {
        echo "".$row{'id'}.", Name:".$row{'Name'}.", Slack:".$row{'slack'}.", Github:".$row{'github'}."<br>";
}
} else {
    echo "0 results";
}
?>
</body>

</html>

