<?php
  header("Pragma: no-cache");
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		sign up
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
        <li><a href="login.php">Log In</a></li>
      </ul>
    </div>
  </nav>
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

 <div class="container">
     <br>

 	<div class="row">
 		<div class="col s16 m2">
 		</div>
 		<div class="col s16 m8">
 			<div class="card">
    			<div class="card-tabs">
    		  		<ul class="tabs tabs-fixed-width ">
    		    		<li class="tab "><a class="active" href="#test4">Sign Up</a></li>
    		  		</ul>
   				 </div>
   				 <div class="card-content grey lighten-4">
              <form name="sf" method="post" action="signup_sv.php" onsubmit="return validateForm()">
      				<div class="row">
                  <div class="input-field col s6">
                    <input value="<?php if(isset($_SESSION['fn'])) echo $_SESSION['fn'];?>" name="fn" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="<?php if(isset($_SESSION['fn'])) echo $_SESSION['ln'];?>" name="ln" id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <input value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" name="email" id="email" type="email" class="validate" required>
                      <label for="email">Email</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="<?php if(isset($_SESSION['fn'])) echo $_SESSION['un'];?>" name="un" id="un" type="text" class="validate" >
                      <label for="un">UserName</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <input name="pass" id="pass2" type="password" class="validate">
                      <label for="pass2">Password</label>
                </div>
                <div class="input-field col s6">
                    <input name="cpass" id="pass3" type="password" class="validate">
                      <label for="pass3">Confirm Password</label>
                </div>
              </div>
              <div class="row center">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
                      <i class="material-icons right">send</i>
                  </button>
              </div>
              </form>
    			 </div>
  		</div>
  	</div>
	</div>


 </div>
  <?php
    include('../include/footer.php');
  ?>

</body>

<?php
  session_destroy();
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  // alert("Registration Successful");
  var url_string = window.location.href; //window.location.href
  var url = new URL(url_string);
  var c = url.searchParams.get("st");
  if(c=="success"){
      M.toast({html: "Registration Successful!!",classes: 'rounded green',outDuration:28742874289});
  }
  else if(c=="eml") M.toast({html: "Email already exist!!",classes: 'rounded green'});
  else if(c=="un") M.toast({html: "user name already exist!!",classes: 'rounded green'});

  function validateForm() {
       var x = document.forms["sf"]["pass"].value;
       var y = document.forms["sf"]["cpass"].value;
       var z = document.forms["sf"]["fn"].value;
       var a = document.forms["sf"]["ln"].value;
       var b = document.forms["sf"]["un"].value;
       if (b=="") {
          M.toast({html: "UserName should be filled",classes: 'rounded'});
          return false;
       }
       else if(z=="" || a==""){
          M.toast({html: "first name and last name should be filled",classes: 'rounded'});
          return false;
       }
       else if(x==""){
          M.toast({html: "password should be filled",classes: 'rounded'});
          return false;
       }
       else if(x!=y){
          M.toast({html: "password doesn't match",classes: 'rounded'});
          return false;
       }
       else{
        return true;
       }
  }
</script>
</html>