<?php
include('../control/logincheck.php');
if(isset($_SESSION['username'])){
header("location: managerhome.php");
}
?>
<!DOCTYPE html>
<html >
<head>
	<title>Document</title>
</head>
<body bgcolor="white" >
	
</body>
</html>

<?php
$isPost=false;
$username="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked!";
}
?>
<form action="" method="post">
 <input type="text" id="uname" name="uname" placeholder="user name">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<input type="password" id="uname" name="uname"placeholder="password">

<?php
if($isPost==true && $username=="")
{
	echo"<span style='color:red;'><small>Must fill up this box</small></span>";
}
?><br><br>

<input type="submit" value="log in" name="btnlogin"><br><br>


 <form>
	<a href="registration.php">Signup</a>
	
	</form>
	 <form>
	<a href="managerhome.php">Login</a>
	
	</form>