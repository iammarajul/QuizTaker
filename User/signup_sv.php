<?php
	include("../include/connection.php");
	$email=$_POST['email'];
	$un=$_POST['un'];
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$pass=$_POST['pass'];
	$sql1="SELECT * FROM user WHERE email='$email';";
	$sql2="SELECT * FROM user WHERE user_name='$un';";
	$a=$conn->query($sql1);
	$b=$conn->query($sql2);
	echo $a->num_rows;
	if($a->num_rows>0){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['un'] = $un;
		$_SESSION['fn'] = $fn;
		$_SESSION['ln'] = $ln;
		header("Location: signup.php?st=eml");
		die();
	}
	else if($b->num_rows>0){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['un'] = $un;
		$_SESSION['fn'] = $fn;
		$_SESSION['ln'] = $ln;
		header("Location: signup.php?st=un");
		die();
	}
	else{
		$sql="INSERT INTO user(first_name,last_name,user_name,email,pass) VALUES ('$fn','$ln','$un','$email','$pass')";
		$res=$conn->query($sql);
		if($res){
			header("Location: signup.php?st=success");
			die();
		}
	}

?>
