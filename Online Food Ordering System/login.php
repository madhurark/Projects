<html>
<form action="" method="post">
<center>
<h2>LOGIN</h2>
<input type="text" name="t1" placeholder="Username"><br>
<input type="password" name="t2" placeholder="Password"><br><br>
<input type="submit" value="Login" name="s1"><br><br>
<a href="reg.php">New Registration</a><br>
</center>
</form>
</html>

<?php
$f=0;
if (isset($_POST["s1"]))
{
$u=$_POST["t1"];
$p=$_POST["t2"];
$con=new mysqli("localhost","root","","website");
$q="SELECT * from table1";
$res=$con->query($q);

while($row=$res->fetch_assoc())
{
	if($u==$row["username"])
	{
		if($p==$row["password"])
		{
		   	 $f=1;
		}
	
		else
		{
			$f=0;	
		}
	}
	
	}
if($f==1)
{
header("Location: main.php");
}
else
{
echo"<center>INCORRECT USERNAME OR PASSWORD</center>";
}
$con->close();
}


?>
