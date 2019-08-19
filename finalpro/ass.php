<?php
require('connect.php');
$result = mysqli_query($conn,"SELECT * FROM contact");

echo "<table border='1' width=100%>
<tr>
<th height=50px>ID</th>
<th height=50px>FIRST NAME</th>
<th height=50px>LAST NAME</th>
<th height=50px>PHONE</th>
<th height=50px>EMAIL</th>
<th height=50px>MESSAGE</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td height=40px align=center>" . $row['order number'] . "</td>";
echo "<td height=40px align=center>" . $row['firstname'] . "</td>";
echo "<td height=40px align=center>" . $row['lastname'] . "</td>";
echo "<td height=40px align=center>" . $row['phone'] . "</td>";
echo "<td height=40px align=center>" . $row['email'] . "</td>";
echo "<td height=40px align=center>" . $row['message'] . "</td>";

echo "</tr>";
}
echo "</table>";
?>
