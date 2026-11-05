<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$units=(int)$_POST['units'];
$rate=(int)$_POST['rate'];
$total=$units * $rate;

echo "Units Consumed: " . $units . " KWH<br>";
echo "Rate per Unit: " . $rate . " per KWH<br>";
echo "Total Electricity Bill: " . $total;
}
?>