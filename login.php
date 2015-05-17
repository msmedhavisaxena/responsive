<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
         <link href="css/responsive.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
 $(document).ready(function() {
	$('#lightbox').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '.wrap1',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '.wrap1';
				}
			}
		}
	});
});
   
</script>
<?php

//echo "hello";

if(isset($_POST['action'])){
include ('db.php');

if(!$connection)
 {
// echo "about to die";	 
  die('Could not connect:'.mysqli_connect_error());
}
	 
	 $post_autologin=$_POST['autologin'];
	 
	 $email= mysqli_real_escape_string($connection,$_POST['email']);
	 $password= mysqli_real_escape_string($connection,$_POST['password']);
//	 $Results= mysqli_query($connection,"select name from user where email='".$email."' and pw='".$password."'");
//    $count= mysqli_num_rows($Results);
	 
  $query="SELECT email FROM `elocute2`.`useruser` WHERE email='$email' AND password='$password'";
  //echo "query=".$query;
  $result=mysqli_query($connection,$query);
  if(mysqli_num_rows($result)>0){
	$count = 1;  
  } else {
	$count = 0;  
  }
  
// echo "count=".$count;
//if result matched $myusername and $mypassword, table row must be 1 row  
if($count==1){
	//echo "<div class="calltoaction">";
	echo "correct username password";
	//echo "<a href="hear.php"></a>";
	 print_r("<script type='text/javascript'>window.location = '/elocute-medhavi1/hear.php'</script>");/*Redirect browser*/
	exit();
} else{ 
	echo "invalid email or pass"; echo ('div class="message"');
	$message="invalid email or password!!";
} 
 }
 
 ?>

</head>

<body>


    <div id="lightbox">
     <p><a href="index.php" title="Click to close">X</a></p>
      <div class="wrap1">
       
        <div class="by-email">
              <h2>Sign Up with Email<img src="image/email.png"/></h2>
                <form class="form-login" action="" method="post">
                    <input type="email" id="user_email"name="email" placeholder="@ Email" autocomplete="off" required="required"/>
                    <input type="password" id="user_pass" name="password" placeholder="Password" required="required"/>
           <!--       <input type="checkbox" class="rememberme" name="autologin" value="1"/>Remember me-->
                  <a href="index.php" > <input type="submit" id="loginbtn" value="Login" name="action"/></a>
                </form><!--.form-login-->
     <!--          <div class="forgot"><a href="#">Forgot Password?</a></div>-->
            </div><!--.by-email-->
    
   <!--         <div class="by-social-account">
                <a href="#" class="g-login">Sign in with Google</a>
		</div>!--.by-social-account-->
      </div>
 </div>

</body>
</html>
