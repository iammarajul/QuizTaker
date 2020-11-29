<?php
	session_start();
	session_destroy();
	header("location: ../?st=logout");
	die();
?>