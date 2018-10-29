<html>
<body>
<h3>Choose your plan</h3><br/>
<?php
$server="localhost";
$user="root";
$pass="";
$conn=new mysqli($server,$user,$pass);
$qry="select * from plan";
$res=$conn->query($qry);
if($res->num_rows>0)
{$i=1;
 while($row = $res->fetch_assoc()) {
echo $i." Plan:".$row[$name]." Monthly Rental:".$monthlyrental." Free Internet:".$freeinternet." Free calls:".$freecalls." Free SMS:".$freesms." Call charges:".$callcharge." SMS charges:".$smscharge." Data charges:".$datacharge."Roaming charges:".$roamcharge."<br>";
$i++;
}
}
?>
<form action="chosen.php" method="post">
Enter the Serial number of the plan you want to choose:<input type="text" name="t1"/><br/>
<input type="submit" value="submit"/>
</form>
</body>
</html>


