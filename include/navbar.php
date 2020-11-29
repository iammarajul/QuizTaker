<?php
  session_start();
  include("../include/connection.php");
  if(!isset($_SESSION['un']))
  {
    header("location: ../?st=login");
    die();
  }
  $user_id=$_SESSION['un'];
  $sql1="SELECT * FROM user WHERE user_id='$user_id'";
  $a=$conn->query($sql1);
  $row = $a->fetch_assoc();
  $name=$row['user_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>
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
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="../DashBoard/editprofile.php">Update Profile</a></li>
    <li><a href="../DashBoard/profile.php">See profile</a></li>
    <li class="divider"></li>
    <li><a href="../User/logout.php">Sign out</a></li>
  </ul>

  <nav>
    <div class="nav-wrapper">
      <a href="#" style="padding-left: 10px;" class="brand-logo">Online Exam</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="sass.html">Sass</a></li> -->
        <li><i class="small material-icons">account_circle</i></li>
        <li><a class="dropdown-button" href="#!" data-target="dropdown1"><?php echo $name;?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>

  </nav>
  <ul id="slide-out" class="sidenav">
    
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="dash.php">Active Quiz</a></li>
    <li><a class="waves-effect" href="future.php">Future Quiz</a></li>
    <li><a class="waves-effect" href="ended.php">Ended Quiz</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 
        
</body>
<script type="text/javascript">
  $( document ).ready(function() {
    $(".dropdown-button").dropdown();
});
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

</html>