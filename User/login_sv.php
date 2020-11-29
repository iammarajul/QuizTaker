

<?php

	include("../include/connection.php");
	$email=$_POST['email'];
	$pass=$_POST['pass']; 
	$sql1="SELECT * FROM user WHERE email='$email' and pass='$pass';";
	$a=$conn->query($sql1);
	if($a->num_rows==0){
		header("location: login.php?st=failed");
		die();
	}
	else{
		session_start();
		$row = $a->fetch_assoc();
		$_SESSION['un']=$row['user_id'];
		// echo $_SESSION['un'];
		header("location:../DashBoard/dash.php");
	}
 ?>