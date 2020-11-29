<?php
  include("../include/connection.php");
  $time=time();
  $sql1="SELECT * FROM quiz WHERE quiz_et<=$time;";
  $res=$conn->query($sql1);
?>

<!DOCTYPE html>
<html>
<head>

	<title>
		Ended
	</title>
	 </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	
  <?php
    include('../include/navbar.php');
  ?>
        
  <div id="con" class="container">
    <h4 class="center">Ended Quiz</h4>
       <?php
        $cnt=0;
        // echo $res->num_rows;
        $ab=0;
        while($row = $res->fetch_assoc()) {
          // echo $row['quiz_name'];
            if($cnt%3==0) {echo "<div class='row'>";$ab++;}
            echo "<div class='col s16 m4'>";
            echo "<div class='card blue-grey darken-1'>";
            echo "<div class='card-content white-text'>";
            echo "<span class='card-title'>".$row['quiz_name']."</span>";
            echo "<p>Total Question: ".$row['quiz_q_nb']."<br>Given Time: ".$row['quiz_duration']." Min <br>Score: ".$row['quiz_marks']." </p>";
            echo "</div> <div class='card-action'>";
            echo "<a class='waves-effect waves-light btn' href='lederboard.php?id=".$row['quiz_id']."'>Leader board</a>
                  </div></div></div>";
            if($cnt%3==2) {echo "</div>";$ab--;}
            $cnt++;
        }   
        if($ab) echo "</div>";
        
      ?>  	
  </div>
 
  <?php
    include('../include/footer.php');
?>


        


</body>
<script type="text/javascript">
  $( document ).ready(function() {
    $(".dropdown-button").dropdown();
});
</script>
</html>
