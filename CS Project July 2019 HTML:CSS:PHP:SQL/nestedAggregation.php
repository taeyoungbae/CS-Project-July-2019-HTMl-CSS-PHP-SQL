<?php
include 'connect.php';
$conn = OpenCon();
//teamName is the variable user input is assigning to
$medicName=$_REQUEST['medicName'];
$sql = "select m.Name as Medic_Name 
from Medic m where m.Staff_ID in
  (select t.Staff_ID from Treats t
   where m.Staff_ID = t.Staff_ID
   group by m.Staff_ID
   having count(*) >= $medicName);";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>Player_Name</th><th
class='border-class'>Name(s) of Medic</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Medic_Name"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>

<!-- Error message reads: "Trying to get property of non-object in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/nestedAggregation.php on line 9
0 results" -->
