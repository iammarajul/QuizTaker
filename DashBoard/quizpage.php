<?php
  include("../include/connection.php");
  $id=$_GET['id'];
  $sql1="SELECT * FROM question WHERE quiz_id=$id;";
  $res=$conn->query($sql1);
  $sql2="SELECT * FROM quiz WHERE quiz_id=$id;";
  $res2=$conn->query($sql2);
  $res2=$res2->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Quiz page
	</title>
  <style>
    span{
      color: black;
    }
	 </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<?php
    include('../include/navbar.php');
  ?>
  <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <h3 class="left" id='qz_nm'><?php echo $res2['quiz_name']; ?> quiz</h3>

          <h3 id="timer" class="right"></h3>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <p id="ques"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text green lighten-4">
               <form action="#">
                  <p>
                    <label>
                      <input id="rd0" class="with-gap" name="group1" type="radio" />
                      <span id="inp0"></span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input id="rd1" class="with-gap" name="group1" type="radio"/>
                      <span id="inp1"></span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input id="rd2" class="with-gap" name="group1" type="radio"  />
                      <span id="inp2"></span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input id="rd3" class="with-gap" name="group1" type="radio" />
                      <span id="inp3"></span>
                    </label>
                  </p>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12">
          <a id='pre' onclick="fun1()" class=" waves-light btn disabled"><i class="material-icons left">keyboard_arrow_left</i>Previous</a>
          <a id='suf'onclick="fun2()" class="right waves-light btn">Next <i class="material-icons right">keyboard_arrow_right</i> </a>
        </div>
      </div>
       <div class="progress">
          <div id='p_bar' class="determinate" style="width: 0%;"></div>
      </div>
</div>  
<?php
    include('../include/footer.php');
?>

</body>

  <script type="text/javascript">
  var curr=0;
  var time=(<?php echo $res2['quiz_duration'];?>)*60;
  var temptm=time;
  var arr = [
    <?php 
      while($row = $res->fetch_assoc()) {
        echo "[";
        echo "'".$row['q_des']."',";
        echo "'".$row['q_1']."',";
        echo "'".$row['q_2']."',";
        echo "'".$row['q_3']."',";
        echo "'".$row['q_4']."',";
        echo "'".$row['q_ans']."'";
        echo "],";
      }
    ?>
  ];

  document.getElementById('ques').innerHTML=arr[0][0];
  document.getElementById('inp0').innerHTML=arr[0][1];
  document.getElementById('inp1').innerHTML=arr[0][2];
  document.getElementById('inp2').innerHTML=arr[0][3];
  document.getElementById('inp3').innerHTML=arr[0][4];

  var quiz_nb=<?php echo $res2['quiz_q_nb'];?> - 1;
  var answer=new Array(quiz_nb+1);
  countime();

  function cheak(){
     if(document.getElementById('rd0').checked) answer[curr]=1;
     else if(document.getElementById('rd1').checked) answer[curr]=2;
     else if(document.getElementById('rd2').checked) answer[curr]=3;
     else if(document.getElementById('rd3').checked) answer[curr]=4;
     // document.getElementById('qz_nm').innerHTML=curr;
  }
  function show(){
    document.getElementById('ques').innerHTML=arr[curr][0];
    document.getElementById('rd0').checked=false;
    document.getElementById('rd1').checked =false;
    document.getElementById('rd2').checked =false;
    document.getElementById('rd3').checked =false;
    if(answer[curr]==1) document.getElementById('rd0').checked=true;
    if(answer[curr]==2) document.getElementById('rd1').checked=true;
    if(answer[curr]==3) document.getElementById('rd2').checked=true;
    if(answer[curr]==4) document.getElementById('rd3').checked=true;
    document.getElementById('inp0').innerHTML=arr[curr][1];
    document.getElementById('inp1').innerHTML=arr[curr][2];
    document.getElementById('inp2').innerHTML=arr[curr][3];
    document.getElementById('inp3').innerHTML=arr[curr][4];
  }
  function fun1(){
    cheak();
    curr--;
    document.getElementById("p_bar").style.width = ((curr/(quiz_nb+1))*100)+"%";
    if(curr==0) document.getElementById('pre').className=' waves-light btn disabled';
    document.getElementById('suf').className='right waves-light btn';
    document.getElementById('suf').innerHTML="Next <i class='material-icons right'>keyboard_arrow_right</i>";
    show();
  }
  function fun2(){
    cheak();
    if(curr==quiz_nb) {
      myRedirect("endquiz.php","score",20);
    }
    curr++;
    document.getElementById("p_bar").style.width = ((curr/(quiz_nb+1))*100)+"%";
    if(curr==quiz_nb) document.getElementById('suf').innerHTML="submit<i class='material-icons right'>touch_app</i>";
    document.getElementById('pre').className='waves-light btn';
    show();
  }
  var myRedirect = function(redirectUrl, arg, value) {
    var score1=0;
    for(var i=0;i<=quiz_nb;i++){
      if(answer[i]==arr[i][5]) score1++;
    }
    var time_score=temptm-time;
    var form = $('<form action="' + redirectUrl + '" method="post">' +
    '<input type="hidden" name="score" value="' + score1 + '"></input>' +
    '<input type="hidden" name="time" value="' + time_score + '"></input>' +
     '</form>');
    $('body').append(form);
    $(form).submit();
  }
  
  function countime(){
    var x = setInterval(function() {
    var minutes = Math.floor((time)/60);
    var seconds = Math.floor(time%60);
    document.getElementById("timer").innerHTML =minutes + "m " + seconds + "s ";
    time--;
      if (time <= 0) {
        clearInterval(x);
        myRedirect("endquiz.php","score",20);
      }
    }, 1000);
  }
</script>
  
</html>
