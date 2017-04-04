<?PHP

$conn =mysqli_connect("localhost","root","","contactform");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacts";
$allcontacts = $conn->query($sql);

?>