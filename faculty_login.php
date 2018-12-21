<?php
session_start();

if(isset($_POST['Login'])){
	
$con= mysqli_connect('localhost', 'root', '' , 'seu_alumni_event');


	$username =$_POST['username'];
	$password =$_POST['password'];
	$result =mysqli_query($con, 'select * from faculty where username="'.$username.'" and password="'.$password.'"');
	
	 
	if(mysqli_num_rows($result)==1){
		
		$_SESSION['username']=$username;
		//$_SESSION['id_employee']=$id_employee;
		header('Location: faculty_see.php'); 
	}
	else
		echo "Account's invalid";
}
if(isset($_GET['logout'])){
	session_unregister('username');

   }
?>
 <?php
            if(isset($_SESSION['id_employee'])) {
              ?>
             
            <?php
            } else { ?>
              
            <?php } ?>
			
<html>

<head>
<link rel="stylesheet" type="text/css" href="faculty_login.css">
</head>
<body>
<header>

<div class="nav">

<ul class="menu">
<li> <a href="home.html">HOME</a></li> 
<li> <a href="faculty_option.html">BACK</a></li> 
<li> <a href="faculy_login.php">LOGIN</a></li> 
</ul>


<div class="loginbox">
<a href="home.html">
<img src="logo8.jpg" class="logo">
</a>
<h1> Login Here</h1>
<form method="post">

<tr>
<td> Username:</td>
<td><input type ="text" placeholder=" User Name" name="username"/></td> 
</tr>

<tr>
<td> Password:</td>
<td><input type ="Password" placeholder=" Password" name="password"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
<tr>
<a href="faculty_registration.html">Lost Your Password?</a> <br>
<a href="faculty_registration.html">Don't Have an Account?</a> 
</td>

</form>

</body>
</header>
</html>