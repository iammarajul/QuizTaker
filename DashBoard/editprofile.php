<?php
  include('../include/navbar.php');
  $id=$_SESSION['un'];
  $sql="SELECT * FROM user WHERE user_id='$id';";
  $a=$conn->query($sql);
  $res= $a->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>update profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
       <div class="container">
        <div class="row">
    <div class="col s16 m2">
    </div>
    <div class="col s16 m8">
      <div class="card">
          <div class="card-tabs">
              <ul class="tabs tabs-fixed-width ">
                <li class="tab "><a class="active" href="#test4">Update Profile</a></li>
              </ul>
           </div>
           <div class="card-content grey lighten-4">
              <form name="sf" method="post" action="editprofile_sv.php" onsubmit="return validateForm()">
              <div class="row">
                  <div class="input-field col s6">
                    <input value="<?php echo $res['first_name'];?>" name="fn" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="<?php echo $res['last_name'];?>" name="ln" id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <input value="<?php echo $res['email'];?>" name="email" id="email" type="email" class="validate" required>
                      <label for="email">Email</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="<?php  echo $res['user_name'];?>" name="un" id="un" type="text" class="validate" >
                      <label for="un">UserName</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <input name="pass" id="pass2" type="password" class="validate">
                      <label for="pass2">New Password</label>
                </div>
                <div class="input-field col s6">
                    <input name="cpass" id="pass3" type="password" class="validate">
                      <label for="pass3">Password</label>
                </div>
              </div>
              <div class="row center">
                  <button class="btn waves-effect waves-light" type="submit" name="action">update
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
</html>

<script type="text/javascript">
  function validateForm() {
       var x = document.forms["sf"]["cpass"].value;
       var y = document.forms["sf"]["email"].value;
       var y1 = "<?php echo $res['email']; ?>";
       var z = document.forms["sf"]["fn"].value;
       var z1 =  "<?php echo $res['first_name']; ?>";
       var a = document.forms["sf"]["ln"].value;
       var a1 =  "<?php echo $res['last_name']; ?>";
       var b = document.forms["sf"]["un"].value;
       var b1 =  "<?php echo $res['user_name']; ?>";
       if (x=="") {
          M.toast({html: "Password should be filled<br> to make any change",classes: 'rounded'});
          return false;
       }
       else{
          if(y==y1 && z==z1 && a==a1 && b==b1){
             M.toast({html: "No change Made :( <br> make some change to update",classes: 'rounded'});
              return false;
          }
       }
      
  }
</script>