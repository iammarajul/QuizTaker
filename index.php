<!DOCTYPE html>
<html>
<head>

	<title>
		Online Exam
	</title>
	 </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
</head>
<body>
	

  <nav>
    <div class="nav-wrapper">
      <a href="#" style="padding-left: 10px;" class="brand-logo">Online Exam</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="sass.html">Sass</a></li> -->
        <li><a href="User/signup.php">Sign Up</a></li>
        <li><a href="User/login.php">Log In</a></li>
      </ul>
    </div>
  </nav>
        
  <div class="container">
  	<br><br>
  	<div class="row">
    <div class="col s16 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Welcome</span>
          <p>I am a very simple JUdge. I am good at arranging some online multiple choose Question.
          I am convenient because I require little markup to use effectively.sign up to Use me !!</p>
        </div>
        <div class="card-action">
          <a href="User/signup.php">Sign Up</a>
          <a href="User/login.php">log In</a>
        </div>
      </div>
    </div>
  </div>
  </div>

            


</body>
<script type="text/javascript">
  var x="<?php echo $_GET['st']; ?>";
  if(x=='logout'){
      M.toast({html: "You successfully Logout!!",classes: 'rounded'});
  }else if(x=='login'){
     M.toast({html: "You Need to login to view this page!!",classes: 'rounded'});
  }
</script>
</html>