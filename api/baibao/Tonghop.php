<?php
include 'DBconfig.php';
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
if ($conn->connect_error) {
 die("Loi ket noi: " . $conn->connect_error);
} 
$sql = "SELECT * FROM baibao WHERE chuyen_muc=N'Thể Thao'";
$result = $conn->query($sql);
if ($result->num_rows >0) {
 while($row[] = $result->fetch_assoc()) {
 $tem = $row;
 $json = json_encode($tem);
 }
} else {
 echo "No Results Found.";
}
echo $json;
$conn->close();
?>