<?php
  include("../include/connection.php");
  $time=time();
  $sql1="SELECT * FROM quiz WHERE quiz_st>$time";
  $res=$conn->query($sql1);
  $st = array();
?>


<!DOCTYPE html>
<html>
<head>

	<title>
		Upcoming
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
        
    <div class="container">
      <h4 class="center">Upcoming Test</h4>
         <?php
        $cnt=0;
        // echo $res->num_rows;
        $ab=0;
        while($row = $res->fetch_assoc()) {
          // echo $row['quiz_name'];
            array_push($st,$row['quiz_st']-time());
            // echo time();
            if($cnt%3==0) {echo "<div class='row'>";$ab++;}
            echo "<div class='col s16 m4'>";
            echo "<div class='z-depth-4 card blue-grey darken-1'>";
            echo "<div class='card-content white-text'>";
            echo "<span class='card-title'>".$row['quiz_name']."</span>";
            echo "<p>Total Question: ".$row['quiz_q_nb']."<br>Given Time: ".$row['quiz_duration']." Min <br>Score: ".$row['quiz_marks']." </p>";
            echo "</div> <div class='card-action'>";
            echo "<h5 class='center white-text' id='".($cnt+1)."'> </h5>
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
 function countdown(element,second){
    var el = document.getElementById(element);
    var interval = setInterval(function() {
      var hr = Math.floor(second/(60*60));
      var min = Math.floor((second%(60*60))/60);
      var sec = Math.floor((second%(60*60))%60);
      el.innerHTML =hr+"h "+ min + "m " + sec + "s "; 
      second--;
       if (second < 0) {
        clearInterval(interval);
        el.innerHTML = "Started";
      }
    },1000);  
 }
 var arr=<?php echo json_encode($st); ?>;
 // countdown(1,arr[0]);
for(var i=0;i<=arr.length;i++){
    countdown(i+1,arr[i]);
 }


</script>
</html>
