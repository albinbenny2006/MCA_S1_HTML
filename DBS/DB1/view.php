<?php
$conn = new mysqli("localhost","root","","sample_db");
if($conn->connect_error)
{
die("Connection failed");
}
$sql="SELECT *from products";
$result=$conn->query($sql);

echo "<h2>product details</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Item Name</th><th>Price</th></tr>";

while ($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>" .$row['id']. "</td>";
echo "<td>" .$row['item_name'] . "</td>";
echo "<td>" .$row['price'] ."</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?> 
