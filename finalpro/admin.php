<html>
<body>
<?php
require('connect.php');
$result = mysqli_query($conn,"SELECT * FROM login");

echo "<table border='3' width=100%>
<tr>
<th height=50px>ID</th>
<th height=50px>USERNAME</th>
<th height=50px>NAME</th>
<th height=50px>EMAIL</th>
<th height=50px>PHONE</th>
<th height=50px>PASSWORD</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td height=40px align=center>" . $row['id'] . "</td>";
echo "<td height=20px align=center>" . $row['username'] . "</td>";
echo "<td height=20px align=center>" . $row['name'] . "</td>";
echo "<td height=20px align=center>" . $row['email'] . "</td>";
echo "<td height=20px align=center>" . $row['phone'] . "</td>";
echo "<td height=20px align=center>" . $row['password'] . "</td>";
echo "<td height=40px align=center><a href=delete.php?id=".$row['id'].">Delete</a></td>";

echo "</tr>";
}
echo "</table>";
?>
</body>
</html>