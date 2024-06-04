
<?php
	$u=$_POST["t1"];
	$e=$_POST["t2"];
	$p=$_POST["t3"];
	$create_datetime = date("Y-m-d H:i:s");
	$con = mysqli_connect("localhost","root","","website");
	$q="INSERT INTO table1 values('$u','$e','$p','$create_datetime')";
	$result   = mysqli_query($con, $q);
	if (mysqli_connect_errno()){
        echo "<center>Failed to connect to MySQL: " . mysqli_connect_error()."</center>";
    }
	
?>
<?php
$f=0;
if(isset($_POST["s1"]))
{
	
if(empty($_POST["t1"]))
{
	$f=1;
	echo"<br><center>Name can't be empty!!!</center>";
	
	
}
$p='/\b[\w.-]+@[\w.-]+[A-Za-z]{2,6}\b/';
if(!preg_match($p,$_POST["t2"]))
{
	$f=1;
	echo"<center><br>Enter valid email!!!</center>";
	
}
echo"<br>";
}
if($f!=1)
{
	echo"<center><a href='login.php'> click here to login</a></center>";
	
}
else
{
	
	echo"<center><a href='reg.php'> click here to Register again</a></center>";
}
if(isset($_POST["s2"]))
{
 header("location:login.php")	;
}
?>
