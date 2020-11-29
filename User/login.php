<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>

	 <script type="text/javascript">
    window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<nav>
    <div class="nav-wrapper">
      <a href="#" style="padding-left: 10px;" class="brand-logo">Online Exam</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div>
  </nav>
  <!-- navbar -->
  <ul id="slide-out" class="sidenav">
    
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="../index.php">Home</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="login.php">Log In</a></li>
    <li><a class="waves-effect" href="signup.php">Sign Up</a></li>
    <!-- <li><a class="waves-effect" href="ended.php">Ended Quiz</a></li> -->
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

  <!-- side nav -->

 <div class="container">
 	<br><br>
 	<div class="row">
 		<div class="col s16 m2">
 		</div>
 		<div class="col s16 m8">
 			<div class="card">
    			<div class="card-tabs">
    		  		<ul class="tabs tabs-fixed-width ">
    		    		<li class="tab "><a class="active" href="#test4">Log IN</a></li>
    		  		</ul>
   				 </div>
   				 <div class="card-content grey lighten-4">
      				<div class="login">
      					<form name="sf" onsubmit="return validateForm()" method="post" action="login_sv.php">
      						<div class="row">
      							<div class="input-field col s12">
      								<input name="email" id="email1" type="email" class="validate">
          							<label for="email1">Email</label>
      							</div>
      						</div>
      						<div class="row">
      							<div class="input-field col s12">
      								<input name="pass" id="pass1" type="Password" class="validate">
          							<label for="pass1">Password</label>
      							</div>
      						</div>
      						<div class="row center">
      							<button class="btn waves-effect waves-light" type="submit" name="action">Log IN
 									  <i class="material-icons right">send</i>
 								</button>
      						</div>
      					</form>
      				</div>
    			</div>
  			</div>
  		</div>
	</div>
 </div>
  <?php
    include('../include/footer.php');
  ?>

</body>

<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  var x= "<?php if(isset($_GET['st']))echo $_GET['st']; ?>";
  if(x=="failed"){
    M.toast({html: "Wrong Password/Email!!",classes: 'rounded green'});
  }
  function validateForm() {
       var x = document.forms["sf"]["email"].value;
       var y = document.forms["sf"]["pass"].value;     
       if(y==""){
          M.toast({html: "password should be filled",classes: 'rounded'});
          return false;
      }
      else if(x==""){
          M.toast({html: "email should be filled",classes: 'rounded'});
          return false;
      }
      else{
          return true;
      }
  }
</script>
</html>