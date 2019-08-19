<?php
require('connect.php');
$sql="DELETE FROM login WHERE ID='$_GET[id]'";
if(mysqli_query($conn,$sql))
	header("refresh:1; url=admin.php");
else
	echo "Not Delelted";
?>