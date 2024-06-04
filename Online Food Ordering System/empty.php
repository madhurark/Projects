header("Location: main.php")
header("Location: login.php");

<img src="pizza.jpg" alt="pizza">
<br><a href='pizza.php'>Pizza</a>

<br><a href='burger.php'>Burger</a>
<br><a href='coffee.php'>Coffee</a>
<br><a href='biryani.php'>Biryani</a>
<br><a href='fries.php'>Fries</a>

<p class="link"><a href="login.php">Click to LOGOUT</p>


</style>
<div class="images-container">	
<img src="biryani.jpg" alt="biryani">
<img src="fries.jpg" alt="fries">
</div>
<style>
.images-container
{
	display:flex;
	justify-content:center;
	align-items:center
}
.images-container img
{
margin-left:5px;
margin-right:5px;
}


style="text-align:right;

||if(isset($_POST["bs2"]))||if(isset($_POST["fs2"]))||if(isset($_POST["cs2"]))
	

<html>
<form action="done.php" method="post">
<input type="submit" name="final" value="Place Order">
<input type="submit" name="final2" value="Go Back">
</form>
</html>




final.php:
if(isset($_POST["final2"]))
{
	
	if(isset($_POST["cs1"]))
	{
	header("Location: coffee.php");	}
	if(isset($_POST["fs1"]))
	{
	header("Location: fries.php");	}
	if(isset($_POST["bs1"]))
	{
	header("Location: burger.php");	}
}




done.php:
<?php
$order="";
if(isset($_POST["final"]))
{

if(isset($_POST["ps1"]))
{
   
}
if(isset($_POST["bs1"]))
{

}
if(isset($_POST["fs1"]))
{

}
if(isset($_POST["cs1"]))
{

}
echo $order;
}


?>
<?php
$finorder = $finorder.$order;
echo $finorder;	
?>


done:
<?php

if(isset($_POST["final"]))
{	
header("Location: done.php");

}
if(isset($_POST["finalc2"]))
{	
header("Location: coffee.php");	
}
if(isset($_POST["finalp2"]))
{	
header("Location: pizza.php");	
}
if(isset($_POST["finalb2"]))
{	
header("Location: burger.php");	
}
if(isset($_POST["finalf2"]))
{	
header("Location: fries.php");	
}


?>
header("Location: done.php");

$finorder = $finorder.$order;

echo $finorder;

<input type="submit" value="Proceed for Billing" name="bs1">

if(isset($_POST["ps1"]))
{
	echo"<html>";
echo"<form action='' method='post'>";
echo"<input type='submit' name='final' value='Place Order'><br><br>";
echo"<input type='submit' name='finalp2' value='Go Back'>";
echo"</form>";
echo"</html>";
}
if(isset($_POST["bs1"]))
{
	echo"<html>";
echo"<form action='' method='post'>";
echo"<input type='submit' name='final' value='Place Order'><br><br>";
echo"<input type='submit' name='finalb2' value='Go Back'>";
echo"</form>";
echo"</html>";
}
if(isset($_POST["fs1"]))
{
	echo"<html>";
echo"<form action='done.php' method='post'>";
echo"<input type='submit' name='final' value='Place Order'><br><br>";
echo"<input type='submit' name='finalf2' value='Go Back'>";
echo"</form>";
echo"</html>";
}
if(isset($_POST["cs1"]))
{
echo"<html>";
echo"<form action='done.php' method='post'>";
echo"<input type='submit' name='final' value='Place Order'><br><br>";
echo"<input type='submit' name='finalc2' value='Go Back'>";
echo"</form>";
echo"</html>";
}

<?php
	
	echo $orders;
	
?>
