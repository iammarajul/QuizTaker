<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Sign out</a></li>
  </ul>

  <nav>
    <div class="nav-wrapper">
      <a href="#" style="padding-left: 10px;" class="brand-logo">Online Exam [admin]</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="sass.html">Sass</a></li> -->
        <li><i class="small material-icons">account_circle</i></li>
        <li><a class="dropdown-button" href="#!" data-target="dropdown1">Iammarajul<i class="material-icons right">arrow_drop_down</i></a></li>
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