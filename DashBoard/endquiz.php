<?php
  $time= $_POST['time'];
  $min= (int)($time/60);
  $sec=$time%60;
?>

<!DOCTYPE html>
<html>
<head>
	<title>End Quiz</title>
</head>
<body>
	<?php
		include('../include/navbar.php');
		// echo $_POST['score'];
	?>

	<div class="container">
		<br><br>
		<div class="row">
    		<div class="col s12 m12">
      			<div class="card teal">
      				<div class="card-content white-text center">
      					<span class="card-title">Java Quiz Result</span>
      					<div class="row">
      						<div class="col s12 m4">
      							<i class="large material-icons">insert_chart</i>
      							<p>High score</p>
      							<h4>20</h4>
      						</div>
      						<div class="col s12 m4">
      							<i class="large material-icons">assignment_turned_in</i>
      							<p>Your score</p>
      							<h4><?php echo $_POST['score'];?></h4>
      						</div>
      						<div class="col s12 m4">
      							<i class="large material-icons">access_time</i>
      							<p>Your Time</p>
      							<h4><?php echo $min."m ".$sec."s";?></h4>
      						</div>
      					</div>
      				</div>
      			</div>
   	 		</div>
  		</div>
  		<div class="row">
  			 <div class="col s12 m12">
  				<a href="#" class="waves-effect waves-light btn-small"><i class="large material-icons">replay</i></a>
  				<a class="waves-effect waves-light btn-small">Button</a>
				  <a class="waves-effect waves-light right btn-small">Button</a>
        </div>
  		</div>
		
	</div>
	<?php
    include('../include/footer.php');
	?>
</body>
</html>