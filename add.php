<html>
<?php
$server="localhost";
$user="root";
$pass="";
$conn=new mysqli($server,$user,$pass);
$qry="insert into plans values($name,$monthlyrental,$freeinternet,$freecalls,$freesms,$callcharge,$smscharge,$datacharge,$roamcharge);
$name=$_POST['t1'];
$monthlyrental=$_POST['t2'];
$freeinternet=$_POST['t3'];
$freecalls=$_POST['t4'];
$freesms=$_POST['t5'];
$callcharge=$_POST['t6'];
$smscharge=$_POST['t7'];
$datacharge=$_POST['t8'];
$roamcharge=$_POST['t9'];
if($conn->query($qry))
echo "Succesfully inserted";
else
echo "Try again";
?>
<body>
<center>
<h3>Telecom Operator Application</h3>
<form method="post" action="add.php">
Plan name:<input type=text name="t1"/><br/>
Monthly Rental:<input type=text name="t2"/><br/>
Free Internet:<input type=text name="t3"/><br/>
Free Calls:<input type=text name="t4"/><br/>
Free SMS:<input type=text name="t5"/><br/>
Call charges:<input type=text name="t6"/><br/>
SMS charges:<input type=text name="t7"/><br/>
Data charges:<input type=text name="t8"/><br/>
Roaming charges:<input type=text name="t9"/><br/>
<input type="submit" value="insert"/>
</form>
</center>
</body>
</html>