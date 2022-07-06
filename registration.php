<?php
include "../control/registrationback.php"

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
<form action="#" method="post">
 Enter your name:<input type="text" id="uname" name="uname" placeholder="first name">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
 User name :<input type="text" id="uname" name="uname" placeholder="last name">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>

Email:<input type="text" id="text" name = "email" placeholder="email">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>


Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Must click</small></span>";
}
?>



<br><br>
password:<input type="password" id="uname" name="uname">

<?php
if($isPost==true && $username=="")
{
	echo"<span style='color:red;'><small>required</small></span>";
}
?>
<br><br>

 


<input type="submit" value="Sign up" name="btnlogin">
 


</form>
 <form>
	<a href="mainlogin.php">Signup</a>
	
	</form>