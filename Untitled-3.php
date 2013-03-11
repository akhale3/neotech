<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'password');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("neotech", $con);

$sql="SELECT * FROM products WHERE company = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Product Name</th>
<th>Product No.</th>
<th>Company</th>
<th>Price</th>
<th>Description</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pro_name'] . "</td>";
  echo "<td>" . $row['pro_no'] . "</td>";
  echo "<td>" . $row['company'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['details'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>