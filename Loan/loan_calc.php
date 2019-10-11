<?php
if($_GET)
{
	$loan = $_GET['loan'];
	$interest = $_GET['interest'];
	$period = $_GET['period'];
}


$x = pow((1+$interest),$period);
$emi  = ($loan * $interest * $x)/($x-1);


echo '<head><link rel="stylesheet" type="text/css" href="loan.css"></head>';

if(isset($_GET['calc']))
{
	echo "<table><tr><td>LOAN EMI :</td><td>$emi</td></tr></table>";
}
else if($_GET['details'])
{
	echo "<table>
		<center><h2>EMI Calculator</h2></center>
		<tr><th>Loan Amount : </th><td>$loan</td></tr>
		<tr><th>Interest % :</th><td> $interest</td></tr>
		<tr><th>Period :</th><td>$period</td></tr>
		<tr><th>EMI : </th><td>$emi</td></tr>
		</table>";

}
?>
