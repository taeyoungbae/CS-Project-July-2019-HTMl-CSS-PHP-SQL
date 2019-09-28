<?php
include 'connect.php';
$conn = OpenCon();
$leastSponsors=$_REQUEST['leastSponsors'];
$sql = "(SELECT t.Team_Name as Team_Name
FROM Team t
WHERE NOT EXISTS
(SELECT s.Team_Name
FROM Sponsors s
WHERE t.Team_name = s.Team_Name AND
s.Brand = '$leastSponsors'))";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>Team_Name</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Team_Name"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>
<!--
Error message reads: "Trying to get property of non-object in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/divisionSponsors.php on line 14
0 results" -->
